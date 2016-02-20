<?php

namespace RR\DataBundle\Controller;

use RR\DataBundle\Form\MapType;
use RR\DataBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $form_map = $this->createForm(new MapType());
        return $this->render('RRDataBundle:Default:index.html.twig', array('form_map'=>$form_map->createView()));
    }

    public function searchAction(Request $request){

        $form_map = $this->createForm(new MapType());
        $form = $this->createForm(new SearchType());

        if ($request->isMethod('POST')) {
            $form_map->handleRequest($request);
            $form->handleRequest($request);

            // $data is a simply array with your form fields
            // like "query" and "category" as defined above.
            $data_map = $form_map->getData();
            $data=$form->getData();

            if(empty($data['radius']))$data['radius']=0.2;
            else $data['radius']=$data['radius']/1000;

                $adapter  = new \Geocoder\HttpAdapter\CurlHttpAdapter();
                $provider = new \Geocoder\Provider\GoogleMapsProvider($adapter);
                $geocoder = new \Geocoder\Geocoder($provider);

                $address = $geocoder->geocode($data_map['recherche'] . " France");
                $data['lat']=$address->getLatitude();
                $data['lng']=$address->getLongitude();
            if($data['lat']==0 &&  $data['lng']==0){
                $map=null;
            }else{
                $map = $this->get('map_builder')->generateMap($address->getLatitude(),$address->getLongitude(),$data['radius']);
            }
            $form2 = $this->createForm(new SearchType());
            $data['radius']=$data['radius']*1000;
            $form2->setData($data);

            return $this->render('RRDataBundle:Default:search.html.twig', array(
                "form_map"=>$form_map->createView(),
                'form'=>$form2->createView(),
                'map'=>$map
            ));


        }
        return $this->render('RRDataBundle:Default:index.html.twig',array(
            "form_map"=>$form_map->createView(),
            "form"=>$form->createView(),
        ));
    }

    public function findRestoAction(Request $request){
        $form_map = $this->createForm(new MapType());
        $form = $this->createForm(new SearchType());
        $map=null;
        $places=null;
        if ($request->isMethod('POST')) {
            $form_map->handleRequest($request);
            $form->handleRequest($request);

            // $data is a simply array with your form fields
            // like "query" and "category" as defined above.
            $data = $form->getData();


            if(empty($data['radius']))$data['radius']=200;


            if($data['lat']!=0 &&  $data['lng']!=0){
                $places = $this->get("places_finder")->placesSearch($data['lat'],$data['lng'],$data['radius'],"restaurant");
                $map = $this->get('map_builder')->generateMap($data['lat'],$data['lng'],$data['radius']/1000);
            }

            return $this->render('RRDataBundle:Default:search.html.twig', array(
                "form_map"=>$form_map->createView(),
                'form'=>$form->createView(),
                "map"=>$map,
                "places"=>$places
            ));

        }
        return $this->render('RRDataBundle:Default:index.html.twig',array(
            "form_map"=>$form_map->createView(),
            "form"=>$form->createView(),
        ));
    }
}
