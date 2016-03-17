<?php

namespace RR\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Ex requete: http://{host}/api/search?latitude=47.639674&longitude=6.863849&radius=1000&vegetarien=0&allergies=0&diabete=0&cholesterol=0&gluten=0
     * @param Request $request
     * @return JsonResponse
     */
    public function getrestaurantAction(Request $request){

        if($request->getMethod()=="GET"){
            $data= array();

            $data['lat']=$request->query->get('latitude');
            $data['lng']=$request->query->get('longitude');
            $data['radius']=$request->query->get('radius');
            $data['vegetarien']=$request->query->get('vegetarien');
            $data['allergies']=$request->query->get('allergies');
            $data['diabete']=$request->query->get('diabete');
            $data['Cholesterol']=$request->query->get('cholesterol');
            $data['gluten']=$request->query->get('gluten');

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

            return new JsonResponse($listRestaurants);
        }else{
            return new JsonResponse(array("errors"=>"Erreur requete"));
        }



    }

}
