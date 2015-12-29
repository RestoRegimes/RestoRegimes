<?php

namespace RR\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RR\RestaurantBundle\Entity\Restaurant;
use Ivory\GoogleMap\Base\Coordinate;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }
    public function searchFormAction()
    {
        $form = $this->createFormBuilder(array())
            ->add('recherche', 'text',array('required'=>false,'label'=>" "))
            ->getForm();

        return $this->render('RRCoreBundle:Default:searchform.html.twig',array('formAccueil'=>$form->createView()));
    }
    public function searchFormFullAction()
    {
        $form = $this->createFormBuilder(array())
            ->add('recherche', 'text',array('label'=>"",'required'=>false))
            ->add('geo','checkbox',array('label'=>"",'required'=>false))
            ->add('lat',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('lng',null,array( 'attr'=>array('style'=>'display:none;'),'required'=>false,'label'=>" "))
            ->add('radius','integer',array('label'=>"",'required'=>false))
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
            ->add('radius','integer',array('label'=>"",'required'=>false))
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


            if(empty($data['radius']))$data['radius']=10;
            if($data['geo']!=1) {
                $curl = new \Ivory\HttpAdapter\CurlHttpAdapter();
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


            $link=$this->getRequest()->getBasePath().'/bundles/rrcore/images/marker';
            $map = $this->get('ivory_google_map.map');
            $map=$this->get('core_helper')->getMapRestaurant($map,$listRestaurants,$link,$coord);

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


}
