<?php

namespace RR\CoreBundle\Controller;

use RR\CoreBundle\Entity\Commentaire;
use RR\CoreBundle\Entity\SiteContent;
use RR\CoreBundle\Form\CommentaireType;
use RR\CoreBundle\Form\SiteContentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RR\RestaurantBundle\Entity\Restaurant;
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
    public function cguAction(){
        $em = $this->getDoctrine()->getManager();
        $cgu = $em->getRepository('RRCoreBundle:SiteContent')->getTypeContent('CGU');

        return $this->render('RRCoreBundle:Default:cgu.html.twig',array('cgu'=>$cgu));
    }
    public function mentionsAction(){
        $em = $this->getDoctrine()->getManager();
        $mention = $em->getRepository('RRCoreBundle:SiteContent')->getTypeContent('MENTION');

        return $this->render('RRCoreBundle:Default:mentions.html.twig',array('mention'=>$mention));
    }
    public function searchFormFullAction()
    {
        $form = $this->createFormBuilder(array())
            ->add('recherche', 'text',array('label'=>"",'required'=>false))
            ->add('geo','checkbox',array('label'=>"",'required'=>false))
            ->add('lat',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('lng',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('radius','integer',array('label'=>"",'required'=>false,'attr'=>array('min'=>'50','max'=>'5000')))
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
            ->add('radius','integer',array('label'=>"",'required'=>false,'attr'=>array('min'=>'50','max'=>'5000')))
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


            if(empty($data['radius']))$data['radius']=0.5;
            else $data['radius']=$data['radius']/1000;
            if($data['geo']!=1) {
                $adapter  = new \Geocoder\HttpAdapter\CurlHttpAdapter();
                $provider = new \Geocoder\Provider\GoogleMapsProvider($adapter);
                $geocoder = new \Geocoder\Geocoder($provider);

                $address = $geocoder->geocode($data['recherche'] . " France");

                $data['lat'] =$address->getLatitude();
                $data['lng'] = $address->getLongitude();
            }else{
                $address=new Coordinate($data['lat'], $data['lng']);
            }
            if($data['lat']==0 && $data['lng']==0){
                //erreur recherche
            }
            $nbMaxResult=6; // 6 resto

            if($this->getUser()!==null && $this->getUser()->getPremium())
                $nbMaxResult=14; //14 resto pour premium


            $listRestaurants= $this->getDoctrine()
                ->getManager()
                ->getRepository('RRRestaurantBundle:Restaurant')
                ->searchRestaurants($data,50); //50 requetes sql max à ne pas confondre avec le nb de resultat on le filtre plus tard


            $listRestaurant=array();
            $listdistance = array();
            for($i=0;$i<$nbMaxResult && $i<count($listRestaurants);$i++){
                $listRestaurant[]=$listRestaurants[$i][0];
                $listdistance[]=$listRestaurants[$i]['distance'];
            }
            $nbPerPage=1;
            $nbPage=ceil(count($listRestaurants)/$nbPerPage);


            $link=$this->getRequest()->getBasePath().'/rrcore/images/marker';
            $map = $this->get('ivory_google_map.map');
            $map=$this->get('core_helper')->getMapRestaurant($map,$listRestaurant,$link,$address,$data['radius']);

            return $this->render('RRRestaurantBundle:Restaurant:index.html.twig', array(
                'form'=>$form->createView(),
                'listRestaurants' => $listRestaurant,
                'listdistance' => $listdistance,
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
                    $comm=$this->getDoctrine()
                        ->getManager()
                        ->getRepository('RRCoreBundle:Commentaire')
                        ->findLastCommentResto($id_resto,$this->getUser()->getId());
                    if(count($comm)==0){
                        $restaurant = $em->getRepository('RRRestaurantBundle:Restaurant')->find($id_resto);
                        $commentaire->setRestaurant($restaurant);
                        $commentaire->setUser($user);
                        $commentaire->setNoteMoyenne();
                        $em->persist($commentaire);
                        $em->flush();

                        return $ret->setData('message enregistré');

                    }else
                        return $ret->setData('nb Message journalier dépassé');


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
