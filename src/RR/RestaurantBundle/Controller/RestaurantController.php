<?php


namespace RR\RestaurantBundle\Controller;

// N'oubliez pas ce use :
use RR\RestaurantBundle\Form\RestaurantType;
use RR\RestaurantBundle\Form\RestaurantHorairesType;
use RR\RestaurantBundle\Form\RestaurantImageType;
use RR\RestaurantBundle\Form\RestaurantEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ivory\GoogleMapBundle\Model\Map;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Base\Coordinate;
use \Ivory\GoogleMap\Base\Bound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use RR\RestaurantBundle\Entity\Restaurant;
use RR\RestaurantBundle\Entity\ImageRestaurant;
use RR\RestaurantBundle\Entity\RegimeRestaurant;
use Ivory\GoogleMap\Controls\ControlPosition;
use Ivory\GoogleMap\Controls\ZoomControl;
use Ivory\GoogleMap\Controls\ZoomControlStyle;


class RestaurantController extends Controller
{
    public function indexAction($page)
    {

        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }
        $nbPerPage=5;//test Paris lat 48.89-48.82 lng 2.4-2.28

        $listRestaurants = $this->getDoctrine()
            ->getManager()
            ->getRepository('RRRestaurantBundle:Restaurant')
            ->getRestaurants($page,$nbPerPage)
        ;
        $nbPage=ceil(count($listRestaurants)/$nbPerPage);

        if($page>$nbPage){
            return $this->redirect($this->generateUrl('rr_core_homepage'));
        }
        $map = $this->get('ivory_google_map.map');
        $bounds = new Bound();
        foreach($listRestaurants as $restaurant) {
            $marker = new Marker();

// Configure your marker options
            $coordinate = new Coordinate($restaurant->getAddress()->getLatitude(), $restaurant->getAddress()->getLongitude());
            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($coordinate, true);
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => false,
                'flat' => true,
            ));
            $bounds->extend($marker);
            $map->addMarker($marker);
        }
        if(count($map->getMarkers())>1){
            $map->setAutoZoom(true);
            $map->setBound($bounds);
        }
// Configure your zoom control

        $map->setCenter($coordinate);


        return $this->render('RRRestaurantBundle:Restaurant:index.html.twig', array(
            'listRestaurants' => $listRestaurants,
            'nbPages'=>$nbPage,
            'page'=>$page,
            'map'=>$map
        ));

    }

    public function viewAction($id)
    {// On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Pour récupérer une annonce unique : on utilise find()
        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id);

        // On vérifie que l'annonce avec cet id existe bien
        if ($restaurant === null) {
            throw $this->createNotFoundException("Le restaurant d'id ".$id." n'existe pas.");
        }

        $map = $this->get('ivory_google_map.map');



        $marker = new Marker();

// Configure your marker options
        $coordinate = new Coordinate($restaurant->getAddress()->getLatitude(), $restaurant->getAddress()->getLongitude());
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition($coordinate, true);
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => false,
            'flat'      => true,
        ));
        $zoomControl = new ZoomControl();

// Configure your zoom control
        $zoomControl->setControlPosition(ControlPosition::TOP_RIGHT);
        $zoomControl->setZoomControlStyle(ZoomControlStyle::SMALL);

        $map->setCenter($coordinate);
        $map->addMarker($marker);
        $map->setZoomControl($zoomControl);

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('RRRestaurantBundle:Restaurant:view.html.twig', array(
            'restaurant'           => $restaurant,
            'map'=> $map
        ));
    }

    public function addAction(Request $request)
    {
        $restaurant = new Restaurant();

        // J'ai raccourci cette partie, car c'est plus rapide à écrire !
        $form = $this->get('form.factory')->create(new RestaurantType, $restaurant);
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $restaurant contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isValid()) {

            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($restaurant);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Restaurant bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('rr_restaurant_horaires', array('id' => $restaurant->getId())));
        }

        // À ce stade, le formulaire n'est pas valide car :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('RRRestaurantBundle:Restaurant:add.html.twig', array(
            'form' => $form->createView(),
            'action' => "add"
        ));

    }
    public function horairesAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->Find($id);

        if (null === $restaurant) {
            throw new NotFoundHttpException("Le restaurant d'id ".$id." n'existe pas.");
        }


        $form = $this->createForm(new RestaurantHorairesType(), $restaurant);


        // On vérifie que les valeurs entrées sont correctes
        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Restaurant bien modifié.');

            return $this->redirect($this->generateUrl('rr_restaurant_view', array('id' => $restaurant->getId())));
        }

        return $this->render('RRRestaurantBundle:Restaurant:add.html.twig', array(
            'form'   => $form->createView(),
            'restaurant' => $restaurant ,// Je passe également l'annonce à la vue si jamais elle veut l'afficher
            'action' => 'horaires'
        ));

    }
    public function imagesAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->Find($id);

        if (null === $restaurant) {
            throw new NotFoundHttpException("Le restaurant d'id ".$id." n'existe pas.");
        }


        $form = $this->createForm(new RestaurantImageType(), $restaurant);

        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $restaurant contient les valeurs entrées dans le formulaire par le visiteur

        // On vérifie que les valeurs entrées sont correctes
        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Restaurant bien modifié.');

            return $this->redirect($this->generateUrl('rr_restaurant_view', array('id' => $restaurant->getId())));
        }

        return $this->render('RRRestaurantBundle:Restaurant:add.html.twig', array(
            'form'   => $form->createView(),
            'restaurant' => $restaurant ,// Je passe également l'annonce à la vue si jamais elle veut l'afficher
            'action' => 'images'
        ));

    }
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->Find($id);

        if (null === $restaurant) {
            throw new NotFoundHttpException("Le restaurant d'id ".$id." n'existe pas.");
        }


        $form = $this->createForm(new RestaurantEditType(), $restaurant);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Restaurant bien modifié.');

            return $this->redirect($this->generateUrl('rr_restaurant_view', array('id' => $restaurant->getId())));
        }

       return $this->render('RRRestaurantBundle:Restaurant:add.html.twig', array(
            'form'   => $form->createView(),
            'restaurant' => $restaurant ,// Je passe également l'annonce à la vue si jamais elle veut l'afficher
            'action' => 'edit'
        ));
    }

    public function deleteAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id);

        if (null === $restaurant) {
            throw new NotFoundHttpException("Le restaurant d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression de restaurant contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($restaurant);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le restaurant a bien été supprimée.");

            return $this->redirect($this->generateUrl('rr_restaurant_home'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('RRRestaurantBundle:Restaurant:delete.html.twig', array(
            'restaurant' => $restaurant,
            'form'   => $form->createView()
        ));
    }

    public function menuAction($limit=3)
    {
        $listRestaurants = $this->getDoctrine()
            ->getManager()
            ->getRepository('RRRestaurantBundle:Restaurant')
            ->findBy(
                array(),                 // Pas de critère
                $limit,                  // On sélectionne $limit annonces
                0                        // À partir du premier
            );

        return $this->render('RRRestaurantBundle:Restaurant:menu.html.twig', array(
            'listAdverts' => $listRestaurants
        ));
    }



}