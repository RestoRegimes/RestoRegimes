<?php

namespace RR\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RR\RestaurantBundle\Entity\Restaurant;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RRCoreBundle:Default:layout.html.twig',array());
    }
    public function rechercheAction(Request $request)
    {

        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('recherche', 'text')
            ->add('radius','integer')
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
            ->add('rechercher','submit')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

        // $data is a simply array with your form fields
        // like "query" and "category" as defined above.
        $data = $form->getData();

            print_r($data);
            $curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
            $geocoder = new \Geocoder\Provider\GoogleMaps($curl);

            $address=$geocoder->geocode($data['recherche']." France");

            $coord=$address->first()->getCoordinates();
            $data['lat']=$coord->getLatitude();
            $data['lng']=$coord->getLongitude();
            echo $data['lat'];
            echo $data['lng'];
            if($data['lat']==0 && $data['lng']==0){
                //erreur recherche
            }

            $listRestaurants= $this->getDoctrine()
                ->getManager()
                ->getRepository('RRRestaurantBundle:Restaurant')
                ->searchRestaurants($data);
                        ;


            return $this->render('RRCoreBundle:Default:search.html.twig',array(
                "form"=>$form->createView(),
                "listRestaurants"=>$listRestaurants
            ));
            #TODO traiter les données du formulaire
    }
       return $this->render('RRCoreBundle:Default:search.html.twig',array(
            "form"=>$form->createView()
        ));
    }
}
