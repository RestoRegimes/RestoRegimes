<?php
/**
 * Created by PhpStorm.
 * User: lfbarreto
 * Date: 09/02/16
 * Time: 13:01
 */

namespace RR\DataBundle\Services;

use RR\RestaurantBundle\Entity\Horaire;
use RR\RestaurantBundle\Entity\Restaurant;
use Padam87\AddressBundle\Entity\GeocodedAddress;

class PlacesFinder
{

    private $api_key;
    private $manager;

    public function __construct($api_key,$manager)
    {
        $this->api_key=$api_key;
        $this->manager=$manager;
    }

    public function placesSearch($latitude,$longitude,$radius,$type){
        $file_id = 'id_places.json';
        $file_places = 'places_details.json';

        $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?location=".$latitude.",".$longitude."&radius=".$radius."&types=".$type."&key=".$this->api_key;

        $response = file_get_contents( $url );
        $result= json_decode($response,true);

        $array_id= file($file_id);
        $places_details=[];

        foreach($result["results"] as $res){
            if(!in_array($res["place_id"],$array_id)){
                $array_id[]=$res["place_id"];
                $place=$this->placeDetails($res["place_id"]);
                if($place!==null)
                    $places_details[]=$place;
            }
        }

        $json_id_string = json_encode($array_id);
        $json_places_string = json_encode($places_details);


        file_put_contents($file_id, $json_id_string);
        file_put_contents($file_places,$json_places_string,FILE_APPEND);

        return $places_details;

    }

    public function placeDetails($id_place){
        $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=".$id_place."&key=".$this->api_key;
        $response = json_decode(file_get_contents ( $url ),true);

        $filter_name=array(
            "Domino's","Quick","McDonald's","KFC","Hôtel","Hotel","Pizza","Pizzeria","Buffallo grill","Hippopotamus"
        );

        if(array_key_exists("formatted_phone_number",$response["result"]) && array_key_exists('rating',$response["result"]) && !preg_match('/\b('.implode('|', $filter_name).')\b/', ucwords(str_replace('-',' ',$response["result"]["name"])))){

            $place_details=array(
                'place_name'    =>$response["result"]["name"],
                'address'       =>$response["result"]["formatted_address"],
                'latitude'      =>$response["result"]["geometry"]["location"]["lat"],
                'longitude'     =>$response["result"]["geometry"]["location"]["lng"],
            );

            $place_details['telephone']=$response["result"]["formatted_phone_number"];

            if(array_key_exists("website",$response["result"]))
                $place_details['website']=$response["result"]["website"];

            if(array_key_exists("opening_hours",$response["result"])){
                if(array_key_exists("weekday_text",$response["result"]["opening_hours"]))
                    $place_details['weekday_text']=$response["result"]["opening_hours"]["weekday_text"];
                if(array_key_exists("periods",$response["result"]["opening_hours"]))
                    $place_details['periods']=$response["result"]["opening_hours"]["periods"];
            }
            if(array_key_exists("photos",$response["result"])){
                $url_photo = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=500&photoreference=".$response["result"]["photos"][0]["photo_reference"]."&key=".$this->api_key;
                $location_photo=get_headers( $url_photo ,1);
                if(array_key_exists("Location",$location_photo))
                    $place_details['photo_url']=$location_photo["Location"];
            }

            $this->addResto($place_details);

            return $place_details;
        }else{
            return null;
        }



    }

    public function addResto($details){

            $r=$this->manager->getRepository('RRRestaurantBundle:Restaurant')->FindByTelephone(str_replace(' ', '', $details["telephone"]));

            if($r===null || empty($r)) {
                $Address = new GeocodedAddress();
                $address = explode(',', $details["address"]);
                $Address->setStreet($address[0]);
                $Address->setCity(explode(' ', $address[1])[2]);
                $Address->setZipCode(explode(' ', $address[1])[1]);
                $Address->setLatitude($details["latitude"]);
                $Address->setLongitude($details["longitude"]);

                $Restaurant = new Restaurant();
                $Restaurant->setNom($details["place_name"]);

                $Restaurant->setTelephone(str_replace(' ', '', $details["telephone"]));
                if (array_key_exists("website", $details))
                    $Restaurant->setDescription($details["website"]);

                $Restaurant->setAddress($Address);
                $Restaurant->setValide(true);

                if(array_key_exists("photo_url",$details))
                    $Restaurant->setPhotoUrl($details['photo_url']);

                if (array_key_exists("periods", $details)) {
                    $lundi = new Horaire();
                    $mardi = new Horaire();
                    $mercredi = new Horaire();
                    $jeudi = new Horaire();
                    $vendredi = new Horaire();
                    $samedi = new Horaire();
                    $dimanche = new Horaire();
                    foreach ($details["periods"] as $period) {

                        switch ($period["open"]["day"]) {
                            case 0:
                                if ($dimanche->getOuverture1() != null) {
                                    $dimanche->setOuverture2(new \DateTime(substr_replace($period["open"]["time"], ':', 2, 0)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $dimanche->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $dimanche->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $dimanche->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 1:
                                if ($lundi->getOuverture1() != null) {
                                    $lundi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $lundi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $lundi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $lundi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 2:
                                if ($mardi->getOuverture1() != null) {
                                    $mardi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $mardi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $mardi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $mardi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 3:
                                if ($mercredi->getOuverture1() != null) {
                                    $mercredi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $mercredi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $mercredi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $mercredi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 4:
                                if ($jeudi->getOuverture1() != null) {
                                    $jeudi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $jeudi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $jeudi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $jeudi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 5:
                                if ($vendredi->getOuverture1() != null) {
                                    $vendredi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $vendredi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $vendredi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $vendredi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 6:
                                if ($samedi->getOuverture1() != null) {
                                    $samedi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $samedi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $samedi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if (array_key_exists("close", $period) && array_key_exists("time", $period["close"]))
                                        $samedi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                        }

                    }

                    if ($lundi->getOuverture1() != null)
                        $Restaurant->setLundi($lundi);
                    if ($mardi->getOuverture1() != null)
                        $Restaurant->setMardi($mardi);
                    if ($mercredi->getOuverture1() != null)
                        $Restaurant->setMercredi($mercredi);
                    if ($jeudi->getOuverture1() != null)
                        $Restaurant->setJeudi($jeudi);
                    if ($vendredi->getOuverture1() != null)
                        $Restaurant->setVendredi($vendredi);
                    if ($samedi->getOuverture1() != null)
                        $Restaurant->setSamedi($samedi);
                    if ($dimanche->getOuverture1() != null)
                        $Restaurant->setDimanche($dimanche);

                }


                // On la persiste
                $this->manager->persist($Restaurant);
                $this->manager->flush();

            }
    }
}