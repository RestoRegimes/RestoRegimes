<?php

namespace RR\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function getrestaurantAction(Request $request,$latitude,$longitude,$radius,$vegetarien,$allergies,$gluten,$diabete,$cholesterol){

        $data= array();

        $data['lat']=$latitude;
        $data['lng']=$longitude;
        $data['radius']=$radius;
        $data['vegetarien']=$vegetarien;
        $data['allergies']=$allergies;
        $data['diabete']=$diabete;
        $data['Cholesterol']=$cholesterol;
        $data['gluten']=$gluten;

        $nbMaxResult=6; // 6 resto

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


        echo json_encode($listRestaurant[0]);
        return new JsonResponse($listRestaurants);


    }

}
