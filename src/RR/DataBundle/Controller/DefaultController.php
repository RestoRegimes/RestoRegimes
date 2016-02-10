<?php

namespace RR\DataBundle\Controller;

use RR\DataBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $form = $this->createForm(new SearchType());
        return $this->render('RRDataBundle:Default:index.html.twig', array('form'=>$form->createView()));
    }

    public function searchAction(Request $request){

        $form = $this->createForm(new SearchType());

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            // $data is a simply array with your form fields
            // like "query" and "category" as defined above.
            $data = $form->getData();


            if(empty($data['radius']))$data['radius']=0.5;
            else $data['radius']=$data['radius']/1000;

                $adapter  = new \Geocoder\HttpAdapter\CurlHttpAdapter();
                $provider = new \Geocoder\Provider\GoogleMapsProvider($adapter);
                $geocoder = new \Geocoder\Geocoder($provider);

                $address = $geocoder->geocode($data['recherche'] . " France");
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
                'form'=>$form2->createView(),
                'map'=>$map
            ));


        }
        return $this->render('RRDataBundle:Default:index.html.twig',array(
            "form"=>$form->createView(),
        ));
    }

    public function findRestoAction(Request $request){
        $form = $this->createForm(new SearchType());

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            // $data is a simply array with your form fields
            // like "query" and "category" as defined above.
            $data = $form->getData();


            if(empty($data['radius']))$data['radius']=500;

            if($data['lat']!=0 &&  $data['lng']!=0){
                $this->get("places_finder")->placesSearch($data['lat'],$data['lng'],$data['radius'],"restaurant");
            }

            return $this->render('RRDataBundle:Default:search.html.twig', array(
                'form'=>$form->createView(),
            ));

        }
        return $this->render('RRDataBundle:Default:index.html.twig',array(
            "form"=>$form->createView(),
        ));
    }
}
