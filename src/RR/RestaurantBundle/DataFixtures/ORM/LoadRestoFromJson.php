<?php

namespace RR\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RR\RestaurantBundle\Entity\Regime;
use RR\RestaurantBundle\Entity\Horaire;
use RR\RestaurantBundle\Entity\Restaurant;
use Padam87\AddressBundle\Entity\GeocodedAddress;



class LoadRestoFromJson implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $file_places = 'web/places_details.json';

        $file_json_array = json_decode(file_get_contents($file_places),true);

        /*{"place_name":"Duc des Lombards"
            ,"address":"42 Rue des Lombards, 75001 Paris, France"
            ,"latitude":48.8596962
            ,"longitude":2.3485599
            ,"telephone":"01 42 33 22 88"
            ,"website":"http:\/\/www.ducdeslombards.com\/"
            ,"weekday_text":["Monday: 7:00 \u2013 11:30 PM",
                        "Tuesday: 7:00 \u2013 11:30 PM",
                        "Wednesday: 7:00 \u2013 11:30 PM",
                        "Thursday: 7:00 \u2013 11:30 PM",
                        "Friday: 7:00 PM \u2013 3:30 AM",
                        "Saturday: 7:00 PM \u2013 3:30 AM",
                        "Sunday: Closed"]
            ,"periods":[
                        {"close":{"day":1,"time":"2330"},"open":{"day":1,"time":"1900"}}
                        ,{"close":{"day":2,"time":"2330"},"open":{"day":2,"time":"1900"}}
                        ,{"close":{"day":3,"time":"2330"},"open":{"day":3,"time":"1900"}}
                        ,{"close":{"day":4,"time":"2330"},"open":{"day":4,"time":"1900"}}
                        ,{"close":{"day":6,"time":"0330"},"open":{"day":5,"time":"1900"}}
                        ,{"close":{"day":0,"time":"0330"},"open":{"day":6,"time":"1900"}}]};

*/

        foreach($file_json_array as $resto){
            // On crée la catégorie

            if(array_key_exists("telephone",$resto)) {
                $Address = new GeocodedAddress();
                $address = explode(',', $resto["address"]);
                $Address->setStreet($address[0]);
                $Address->setCity(explode(' ', $address[1])[1]);
                $Address->setZipCode(explode(' ', $address[1])[0]);
                $Address->setLatitude($resto["latitude"]);
                $Address->setLongitude($resto["longitude"]);

                $Restaurant = new Restaurant();
                $Restaurant->setNom($resto["place_name"]);

                $Restaurant->setTelephone(str_replace(' ', '',$resto["telephone"]));
                if (array_key_exists("website", $resto))
                    $Restaurant->setDescription($resto["website"]);

                $Restaurant->setAddress($Address);
                $Restaurant->setValide(true);

                if (array_key_exists("periods", $resto)) {
                    foreach ($resto["periods"] as $period) {

                        $lundi = new Horaire();
                        $mardi = new Horaire();
                        $mercredi = new Horaire();
                        $jeudi = new Horaire();
                        $vendredi = new Horaire();
                        $samedi = new Horaire();
                        $dimanche = new Horaire();

                        switch ($period["open"]["day"]) {
                            case 0:
                                if ($dimanche->getOuverture1() != null) {
                                    $dimanche->setOuverture2(new \DateTime(substr_replace($period["open"]["time"], ':', 2, 0)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $dimanche->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $dimanche->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $dimanche->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 1:
                                if ($lundi->getOuverture1() != null) {
                                    $lundi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $lundi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $lundi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $lundi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 2:
                                if ($mardi->getOuverture1() != null) {
                                    $mardi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $mardi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $mardi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $mardi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 3:
                                if ($mercredi->getOuverture1() != null) {
                                    $mercredi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $mercredi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $mercredi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $mercredi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 4:
                                if ($jeudi->getOuverture1() != null) {
                                    $jeudi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $jeudi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $jeudi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $jeudi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 5:
                                if ($vendredi->getOuverture1() != null) {
                                    $vendredi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $vendredi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $vendredi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $vendredi->setFermeture1(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                }
                                break;
                            case 6:
                                if ($samedi->getOuverture1() != null) {
                                    $samedi->setOuverture2(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
                                    $samedi->setFermeture2(new \DateTime(substr_replace($period["close"]["time"], ':', 2, 0)));
                                } else {
                                    $samedi->setOuverture1(new \DateTime(substr($period["open"]["time"], 0, 2) . ':' . substr($period["open"]["time"], 2, 2)));
                                    if(array_key_exists("close",$period) && array_key_exists("time",$period["close"]))
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
                $manager->persist($Restaurant);
                $manager->flush();
            }
        }

        // On déclenche l'enregistrement de toutes les catégories

    }
}