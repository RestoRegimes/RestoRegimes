<?php

namespace RR\CoreBundle\Controller;

use RR\CoreBundle\Entity\Commentaire;
use RR\CoreBundle\Entity\SiteContent;
use RR\CoreBundle\Form\CommentaireType;
use RR\CoreBundle\Form\SiteContentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RR\RestaurantBundle\Entity\Restaurant;
use Geocoder\HttpAdapter\CurlHttpAdapter;
use Ivory\GoogleMap\Base\Coordinate;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }
    public function faqAction(){
        $em = $this->getDoctrine()->getManager();
        $faq = $em->getRepository('RRCoreBundle:SiteContent')->getTypeContent('FAQ');

        return $this->render('RRCoreBundle:Default:faq.html.twig',array('faq'=>$faq));
    }
    public function searchFormFullAction()
    {
        $form = $this->createFormBuilder(array())
            ->add('recherche', 'text',array('label'=>"",'required'=>false))
            ->add('geo','checkbox',array('label'=>"",'required'=>false))
            ->add('lat',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('lng',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('radius','integer',array('label'=>"",'required'=>false,'attr'=>array('min'=>'1','max'=>'100')))
            ->add('vegetarien', 'checkbox', array(
                'label'    => 'Vegetarien',
                'required' => false,
            ))
            ->add('vegetalien', 'checkbox', array(
                'label'    => 'Vegetalien',
                'required' => false,
            ))
            ->add('gluten', 'checkbox', array(
                'label'    => 'Sans gluten',
                'required' => false,
            ))
            ->add('diabete', 'checkbox', array(
                'label'    => 'Diabete',
                'required' => false,
            ))
            ->add('Cholesterol', 'checkbox', array(
                'required' => false,
            ))
            ->getForm();

        return $this->render('RRCoreBundle:Default:search.html.twig',array('form'=>$form->createView()));
    }
    public function rechercheAction(Request $request)
    {

        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('recherche', 'text',array('label'=>"",'required'=>false))
            ->add('geo','checkbox',array('label'=>"",'required'=>false))
            ->add('lat',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('lng',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('radius','integer',array('label'=>"",'required'=>false,'attr'=>array('min'=>'1','max'=>'100')))
            ->add('vegetarien', 'checkbox', array(
                'label'    => 'Vegetarien',
                'required' => false,
            ))
            ->add('vegetalien', 'checkbox', array(
                'label'    => 'Vegetalien',
                'required' => false,
            ))
            ->add('gluten', 'checkbox', array(
                'label'    => 'Sans gluten',
                'required' => false,
            ))
            ->add('diabete', 'checkbox', array(
                'label'    => 'Diabete',
                'required' => false,
            ))
            ->add('Cholesterol', 'checkbox', array(
                'required' => false,
            ))
            ->getForm();




        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

        // $data is a simply array with your form fields
        // like "query" and "category" as defined above.
            $data = $form->getData();


            if(empty($data['radius']))$data['radius']=1;
            if($data['geo']!=1) {
                $curl = new CurlHttpAdapter();
                $geocoder = new \Geocoder\Provider\GoogleMaps($curl);


                $address = $geocoder->geocode($data['recherche'] . " France");

                $coord = $address->first()->getCoordinates();
                $data['lat'] = $coord->getLatitude();
                $data['lng'] = $coord->getLongitude();
            }else{
                $coord=new Coordinate($data['lat'], $data['lng']);
            }
            if($data['lat']==0 && $data['lng']==0){
                //erreur recherche
            }
            $nbMaxResult=100;
            $listRestaurants= $this->getDoctrine()
                ->getManager()
                ->getRepository('RRRestaurantBundle:Restaurant')
                ->searchRestaurants($data,$nbMaxResult);

            $nbPerPage=1;
            $nbPage=ceil(count($listRestaurants)/$nbPerPage);


            $link=$this->getRequest()->getBasePath().'/rrcore/images/marker';
            $map = $this->get('ivory_google_map.map');
            $map=$this->get('core_helper')->getMapRestaurant($map,$listRestaurants,$link,$coord,$data['radius']);

            return $this->render('RRRestaurantBundle:Restaurant:index.html.twig', array(
                'form'=>$form->createView(),
                'listRestaurants' => $listRestaurants,
                'nbMaxResult'=>$nbMaxResult,
                'nbPerPage' => $nbPerPage,
                'nbPages' => $nbPage,
                'map'=>$map,
                'link'=>$link
            ));


    }
       return $this->render('RRCoreBundle:Default:layout.html.twig',array(
            "form"=>$form->createView(),
        ));
    }

    public function addfavoriAction(Request $request,$id_resto){
        // is it an Ajax request?
        $ret=new JsonResponse();
        if($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            if ($user->getRoles()[0] == "ROLE_USER") {
                $em = $this->getDoctrine()->getManager();
                $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id_resto);
                if (!$user->getFavoris()->contains($restaurant)) {
                    $user->addFavori($restaurant);

                    $em->persist($user);
                    $em->flush();
                    return $ret->setData('success');
                }
            }
        }else return $ret->setData('Error');
    }
    public function removefavoriAction(Request $request,$id_resto){
        // is it an Ajax request?
        $ret=new JsonResponse();
        if($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            if ($user->getRoles()[0] == "ROLE_USER") {
                $em = $this->getDoctrine()->getManager();
                $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id_resto);
                if ($user->getFavoris()->contains($restaurant)) {
                    $user->removeFavori($restaurant);
                    $em->persist($user);
                    $em->flush();
                    return $ret->setData('success');
                }
            }
        }else return $ret->setData('Error');

    }

    public function adminindexAction(){
        return $this->render('RRCoreBundle:Default:admin_index.html.twig',array());
    }

    public function addcontentAction(Request $request){
        $siteContent = new SiteContent();

        // J'ai raccourci cette partie, car c'est plus rapide à écrire !
        $form = $this->get('form.factory')->create(new SiteContentType, $siteContent);
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $restaurant contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isValid() && $this->getUser()->getRoles()[0]=="ROLE_ADMIN") {


            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($siteContent);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'contenu bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('rr_core_admin'));
        }

        // À ce stade, le formulaire n'est pas valide car :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('RRCoreBundle:Default:add_content.html.twig', array(
            'form' => $form->createView(),
            'action' => "add"
        ));
    }
    protected function getErrorsAsArray($form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error)
            $errors[] = $error->getMessage();

        foreach ($form->all() as $key => $child) {
            if ($err = $this->getErrorsAsArray($child))
                $errors[$key] = $err;
        }
        return $errors;
    }
    public function addcommentaireAction(Request $request,$id_resto)
    {
        $ret = new JsonResponse();
        if($request->isXmlHttpRequest()) {
            $commentaire=new Commentaire();
            $form = $this->createForm(new CommentaireType(), $commentaire);
            if ($request->getMethod() == 'POST')
            {
                $form->bind($request);
                $user = $this->getUser();
                if ($form->isValid() && $user->getRoles()[0] == "ROLE_USER")
                {
                    $em = $this->getDoctrine()->getManager();
                    $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id_resto);
                    $commentaire->setRestaurant($restaurant);
                    $commentaire->setUser($user);
                    $commentaire->setNoteMoyenne();
                    $em->persist($commentaire);
                    $em->flush();

                    return $ret->setData('message enregistré');
                }
                else
                {

                    return new JsonResponse(array(
                        'res'    => false,
                        'errors' => $this->getErrorsAsArray($form)));
                }
            }
        }return $ret->setData('Erreur protocole XmlHttp');

    }
}
