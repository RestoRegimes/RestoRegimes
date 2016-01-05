<?php

namespace RR\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Proxies\__CG__\RR\RestaurantBundle\Entity\Regime;
use RR\RestaurantBundle\Entity\Horaire;
use RR\RestaurantBundle\Entity\Restaurant;
use Padam87\AddressBundle\Entity\GeocodedAddress;



class LoadResto implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $vegetarien = $manager->getRepository('RRRestaurantBundle:Regime')->find(1);
        $vegetalien = $manager->getRepository('RRRestaurantBundle:Regime')->find(2);
        $gluten = $manager->getRepository('RRRestaurantBundle:Regime')->find(3);
        $diabete = $manager->getRepository('RRRestaurantBundle:Regime')->find(4);
        $cholesterol = $manager->getRepository('RRRestaurantBundle:Regime')->find(5);


        $restaurants=array(
        /*'nom,telephone,description
        ,lundi_h1,lundi_h2,lundi_h3,lundi_h4
        ,mardi_h1,mardi_h2,mardi_h3,mardi_h4
        ,mercredi_h1,mercredi_h2,mercredi_h3,mercredi_h4
        ,jeudi_h1,jeudi_h2,jeudi_h3,jeudi_h4
        ,vendredi_h1,vendredi_h2,vendredi_h3,vendredi_h4
        ,samedi_h1,samedi_h2,samedi_h3,samedi_h4
        ,dimanche_h1,dimanche_h2,dimanche_h3,dimanche_h4
        ,vegetarien,vegetalien,gluten,diabete,cholesterol',
        /* format horaire:  hh:mm l'ordre de resto doit correspondre à l'ordre des addresses les regimes sont codé en binaire 0,1,0,0,0 -> vegetalien*/
//Axel--->
            'Saveurs Végét Halles,0140419395,http://www.saveursvegethalles.fr/index.htm
        ,12:00,15:00,18:30,23:00
        ,12:00,15:00,18:30,23:00
        ,12:00,15:00,18:30,23:00
        ,12:00,15:00,18:30,23:00
        ,12:00,15:00,18:30,23:00
        ,12:00,15:00,18:30,23:00
        ,,,,
        ,1,1,0,0,0',


            'Mavrommatis,0143311717,http://www.mavrommatis.com/fr/
        ,,,,
        ,,19:00,23:00,
        ,,19:00,23:00,
        ,12:00,14:15,19:00,23:00
        ,12:00,14:15,19:00,23:00
        ,12:00,14:15,19:00,23:00
        ,,,,
        ,1,0,0,0,0',


            'Le puits de legumes,0173202411,http://www.lepuitsdelegumesbio.fr/
        ,12:00,16:00,19:00,22:00
        ,12:00,16:00,19:00,22:00
        ,12:00,16:00,19:00,22:00
        ,12:00,16:00,19:00,22:00
        ,12:00,16:00,19:00,22:00
        ,12:00,16:00,19:00,22:00       
        ,,,,
        ,1,1,0,0,0',



//---<
//Luiz--->
            'Château de Chine,0384280913,www.restaurant-chateau-chine.fr
        ,,,,
        ,11:15,14:00,18:30,23:00
        ,11:15,14:00,18:30,23:00
        ,11:15,14:00,18:30,23:00
        ,11:15,14:00,18:30,23:00
        ,11:15,14:00,18:30,23:00
        ,11:15,14:00,18:30,23:00
        ,1,1,0,1,0',

//---<
//Florian--->



//---<
//Lan Lynn--->


//---<
//Henry--->


//---<
        );
        $addresses=array(
          /*'ville,rue,latitude,longitude',
          /* http://www.findlatitudeandlongitude.com/batch-geocode/#.VovUoBXhDtQ pour le geocodage de addresses*/
//Axel--->
            'Paris,41 Rue des Bourdonnais,48.860533,2.345503',
            'Paris,42 Rue Daubenton,48.840593,2.351203'
            'Paris,18 18 Rue du Cardinal Lemoine,48.848696,2.353463'

//---<
//Luiz--->
            'Belfort,15 Rue Aristide Briand,47.632488,6.855264',
//---<
//Florian--->



//---<
//Lan Lynn--->


//---<
//Henry--->


//---<
        );

        for($i=0;$i<count($restaurants);$i++) {
            // On crée la catégorie
            $Address=new GeocodedAddress();
            $address=explode(',',$addresses[$i]);
            $Address->setCity($address[0]);
            $Address->setStreet($address[1]);
            $Address->setLatitude($address[2]);
            $Address->setLongitude($address[3]);

            $Restaurant = new Restaurant();
            $restaurant=explode(',',$restaurants[$i]);

            $Restaurant->setNom($restaurant[0]);
            $Restaurant->setTelephone($restaurant[1]);
            $Restaurant->setDescription($restaurant[2]);
            $lundi_h=new Horaire();
            if(!empty($restaurant[3]))$lundi_h->setOuverture1(new \DateTime($restaurant[3]));
            if(!empty($restaurant[4]))$lundi_h->setFermeture1(new \DateTime($restaurant[4]));
            if(!empty($restaurant[5]))$lundi_h->setOuverture2(new \DateTime($restaurant[5]));
            if(!empty($restaurant[6]))$lundi_h->setFermeture2(new \DateTime($restaurant[6]));
            if(strlen($restaurant[3].$restaurant[4].$restaurant[5].$restaurant[6])>0)$Restaurant->setLundi($lundi_h);
            $mardi_h=new Horaire();
            if(!empty($restaurant[7]))$mardi_h->setOuverture1(new \DateTime($restaurant[7]));
            if(!empty($restaurant[8]))$mardi_h->setFermeture1(new \DateTime($restaurant[8]));
            if(!empty($restaurant[9]))$mardi_h->setOuverture2(new \DateTime($restaurant[9]));
            if(!empty($restaurant[10]))$mardi_h->setFermeture2(new \DateTime($restaurant[10]));
            if(strlen($restaurant[7].$restaurant[8].$restaurant[9].$restaurant[10])>0)$Restaurant->setMardi($mardi_h);
            $mercredi_h=new Horaire();
            if(!empty($restaurant[11]))$mercredi_h->setOuverture1(new \DateTime($restaurant[11]));
            if(!empty($restaurant[12]))$mercredi_h->setFermeture1(new \DateTime($restaurant[12]));
            if(!empty($restaurant[13]))$mercredi_h->setOuverture2(new \DateTime($restaurant[13]));
            if(!empty($restaurant[14]))$mercredi_h->setFermeture2(new \DateTime($restaurant[14]));
            if(strlen($restaurant[11].$restaurant[12].$restaurant[13].$restaurant[14])>0)$Restaurant->setMercredi($mercredi_h);
            $jeudi_h=new Horaire();
            if(!empty($restaurant[15]))$jeudi_h->setOuverture1(new \DateTime($restaurant[15]));
            if(!empty($restaurant[16]))$jeudi_h->setFermeture1(new \DateTime($restaurant[16]));
            if(!empty($restaurant[17]))$jeudi_h->setOuverture2(new \DateTime($restaurant[17]));
            if(!empty($restaurant[18]))$jeudi_h->setFermeture2(new \DateTime($restaurant[18]));
            if(strlen($restaurant[15].$restaurant[16].$restaurant[17].$restaurant[18])>0)$Restaurant->setJeudi($jeudi_h);
            $vendredi_h=new Horaire();
            if(!empty($restaurant[19]))$vendredi_h->setOuverture1(new \DateTime($restaurant[19]));
            if(!empty($restaurant[20]))$vendredi_h->setFermeture1(new \DateTime($restaurant[20]));
            if(!empty($restaurant[21]))$vendredi_h->setOuverture2(new \DateTime($restaurant[21]));
            if(!empty($restaurant[22]))$vendredi_h->setFermeture2(new \DateTime($restaurant[22]));
            if(strlen($restaurant[19].$restaurant[20].$restaurant[21].$restaurant[22])>0)$Restaurant->setVendredi($vendredi_h);
            $samedi_h=new Horaire();
            if(!empty($restaurant[23]))$samedi_h->setOuverture1(new \DateTime($restaurant[23]));
            if(!empty($restaurant[24]))$samedi_h->setFermeture1(new \DateTime($restaurant[24]));
            if(!empty($restaurant[25]))$samedi_h->setOuverture2(new \DateTime($restaurant[25]));
            if(!empty($restaurant[26]))$samedi_h->setFermeture2(new \DateTime($restaurant[26]));
            if(strlen($restaurant[23].$restaurant[24].$restaurant[25].$restaurant[26])>0)$Restaurant->setSamedi($samedi_h);
            $dimanche_h=new Horaire();
            if(!empty($restaurant[27]))$dimanche_h->setOuverture1(new \DateTime($restaurant[27]));
            if(!empty($restaurant[28]))$dimanche_h->setFermeture1(new \DateTime($restaurant[28]));
            if(!empty($restaurant[29]))$dimanche_h->setOuverture2(new \DateTime($restaurant[29]));
            if(!empty($restaurant[30]))$dimanche_h->setFermeture2(new \DateTime($restaurant[30]));
            if(strlen($restaurant[27].$restaurant[28].$restaurant[29].$restaurant[30])>0)$Restaurant->setDimanche($dimanche_h);

            $Restaurant->setAddress($Address);
            $Restaurant->setValide(true);

            if($restaurant[31]==1)$Restaurant->addRegime($vegetarien);
            if($restaurant[32]==1)$Restaurant->addRegime($vegetalien);
            if($restaurant[33]==1)$Restaurant->addRegime($gluten);
            if($restaurant[34]==1)$Restaurant->addRegime($diabete);
            if($restaurant[35]==1)$Restaurant->addRegime($cholesterol);

            // On la persiste
            $manager->persist($Restaurant);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}