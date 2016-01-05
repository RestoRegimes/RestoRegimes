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

'Mavrommatis,0143311717,http://www.mavrommatis.com/fr
,,,,
,,19:00,23:00,
,,19:00,23:00,
,12:00,14:15,19:00,23:00
,12:00,14:15,19:00,23:00
,12:00,14:15,19:00,23:00
,,,,
,1,0,0,0,0',


'Le puits de legumes,0173202411,http://www.lepuitsdelegumesbio.fr
,12:00,16:00,19:00,22:00
,12:00,16:00,19:00,22:00
,12:00,16:00,19:00,22:00
,12:00,16:00,19:00,22:00
,12:00,16:00,19:00,22:00
,12:00,16:00,19:00,22:00
,,,,
,1,1,0,0,0',


'Lemoni Café,0145084984,http://www.lemonicafe.fr
,12:00,15:00,,
,12:00,15:00,,
,12:00,15:00,,
,12:00,15:00,,
,12:00,15:00,,
,,,,
,,,,
,1,0,0,0,0',


'Le Bio d Adam et Ève,0982369457,https://www.facebook.com/Le-Bio-dAdam-et-Eve-123116557815703
,11:30,20:00,,
,11:30,20:00,,
,11:30,20:00,,
,11:30,20:00,,
,11:30,20:00,,
,11:30,20:00,,
,,,,
,1,1,0,0,0',


'Le Pot de Vins,0953842119,http://www.lepotdevins.com
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,,,,
,,,,
,1,1,0,0,0',


'Bio Sphère Café,0142934558,http://biospherecafe.fr
,12:00,18:00,,
,12:00,18:00,,
,12:00,18:00,,
,12:00,18:00,,
,12:00,18:00,,
,12:00,22:00,,
,,,,
,1,0,1,0,0',


'AGAPAE,0145226325,http://agapae.fr/wordpress
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,,,,
,,,,
,0,0,1,0,0',



'EXKi Kléber,0145018125,http://www.exki.com
,08:00,21:00,,
,08:00,21:00,,
,08:00,21:00,,
,08:00,21:00,,
,08:00,21:00,,
,11:00,17:00,,
,11:00,17:00,,
,0,0,1,0,0',


'Noglu,0140264124,http://www.noglu.fr
,12:00,15:00,,
,12:00,15:00,19:30,23:00
,12:00,15:00,19:30,23:00
,12:00,15:00,19:30,23:00
,12:00,15:00,19:30,23:00
,12:00,15:00,19:30,23:00
,,,,
,0,0,1,0,0',


'La verrière,0177183916,http://www.la-verriere.fr
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,11:00,20:00,,
,,,,
,,,,
,1,1,0,0,0',


'Hank,0972440399,http://hankburger.com
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,1,0,0,0,0',


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
'La Pierre Percée,0384313046, Restaurant végétarien ouvert tous les jours sur réservation.
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,1,0,0,0,0',
'Le Pochon Magique,0384282806, Restaurant végétarien ouvert du lundi au samedi jusquà 13h30.
,11:15,13:30,,
,11:15,13:30,,
,11:15,13:30,,
,11:15,13:30,,
,11:15,13:30,,
,11:15,13:30,,
,11:15,13:30,,
,1,0,0,0,0',
'Mirabelle,0381501020, Restaurant végétarien
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,11:15,14:00,18:30,23:00
,,,,
,,,,
,1,0,0,0,0',
'Saveurs VégétHalles,0140419395, Restaurant végétalien et bio ouvert tous les jours sauf le dimanche de 12h à 15h et 19h à 23h. http://www.saveursvegethalles.fr/index.htm
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,,,,
,1,1,1,0,0',
'Le Potager du Marais,0157409857, Restaurant végétalien et bio ouvert du mercredi au dimanche de 12h à 15h et de 19h à 23h.
,,,,
,,,,
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,12:00,15:00,19:00,23:00
,1,1,1,0,0',
'Bobs Kitchen,0952551166, Restaurant végétarien végétalien et bio ouvert du lundi au vendredi de 8h à 15h et le samedi et le dimanche de 10h à 16h.
,08:00,15:00,,
,08:00,15:00,,
,08:00,15:00,,
,08:00,15:00,,
,08:00,15:00,,
,10:00,16:00,,
,10:00,16:00,,
,1,1,1,0,0',
'Café Pinson,0983825353, Restaurant végétalien bio et sans gluten
,09:00,22:00,,
,09:00,22:00,,
,09:00,22:00,,
,09:00,22:00,,
,09:00,22:00,,
,09:00,22:00,,
,10:00,18:00,,
,1,1,1,0,0',
'Au Grand Appétit,0140270495, Restaurant végétalien et bio
,12:00,15:00,19:00,21:00
,12:00,15:00,19:00,21:00
,12:00,15:00,19:00,21:00
,12:00,15:00,,
,12:00,14:30,,
,12:00,15:00,,
,12:00,15:00,,
,1,1,1,0,0',
'Café Ginger,0142724383, Restaurant végétalien bio et sans gluten
,12:30,16:00,,
,12:30,16:00,,
,12:30,16:00,,
,12:30,16:00,,
,12:30,16:00,19:00,23:00
,12:30,16:00,19:00,23:00
,12:30,16:00,19:00,23:00
,1,1,1,0,0',
'Le Grenier de Notre-Dame,0143299829, Restaurant végétarien végétalien bio et sans gluten
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,12:00,14:30,18:30,23:00
,1,1,1,0,0',
'Vegan Folies,0143372189, Pâtisserie végétaliennes sans gluten et bio et sans gluten
,,,,
,11:00,22:00,,
,11:00,22:00,,
,11:00,22:00,,
,11:00,22:00,,
,11:00,22:00,,
,11:00,22:00,,
,1,1,1,0,0',
'Maoz Falafel,0143263600, Snack-bar vendant des falafels végétariens et végétaliens
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,1,1,0,0,0',
'Maoz Falafel,0146338719, Snack-bar vendant des falafels végétariens et végétaliens.
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,11:30,00:30,,
,1,1,0,0,0',
'Pousse Pousse,0153161081, Restaurant végétarien végétalien bio et sans gluten
,,,,
,12:00,14:45,,
,12:00,14:45,,
,12:00,14:45,,
,12:00,14:45,,
,12:00,18:00,,
,,,,
,1,1,1,0,0',
'Le Végétarien,0142471514, Restaurant végétarien végétalien et sans gluten
,11:30,15:00,,
,11:30,15:00,,
,11:30,15:00,,
,11:30,15:00,,
,11:30,15:00,,
,12:00,18:00,,
,,,,
,1,1,1,0,0',
'42 Degrés,0973657788, Restaurant végétalien bio et sans gluten
,,,,
,12:00,14:30,19:30,22:00
,12:00,14:30,19:30,22:00
,12:00,14:30,19:30,22:00
,12:00,14:30,19:30,22:00
,12:00,14:30,19:30,22:00
,,,,
,1,1,1,0,0',
'Végébowl,0142464589, Restaurant végétalien bio et sans gluten. Sur réservation.
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,,,19:00,22:30
,,,19:00,22:30
,1,1,1,0,0',
'Krishna-Bhavan,0142057843, Restaurant végétarien et végétalien sur demande
,11:00,23:00,,
,11:00,23:00,,
,11:00,23:00,,
,11:00,23:00,,
,11:00,23:00,,
,11:00,23:00,,
,11:00,23:00,,
,1,1,0,0,0',
'Saravanaa Bhavan,0140050101, Restaurant végétarien et végétalien sur demande
,10:30,23:00,,
,10:30,23:00,,
,10:30,23:00,,
,10:30,23:00,,
,10:30,23:00,,
,10:30,23:00,,
,10:30,23:00,,
,1,1,0,0,0',
'Tien Hiang,0142000823, Restaurant végétalien et sans gluten sur demande
,12:00,15:00,18:30,23:00
,,,,
,12:00,15:00,18:30,23:00
,12:00,15:00,18:30,23:00
,12:00,15:00,18:30,23:00
,12:00,15:00,18:30,23:00
,12:00,15:00,18:30,23:00
,1,1,1,0,0',
'Bobs Juice Bar,0950063618, Restaurant végétarien végétalien bio et sans gluten
,07:30,15:00,,
,07:30,15:00,,
,07:30,15:00,,
,07:30,15:00,,
,07:30,15:00,,
,,,,
,,,,
,1,1,1,0,0',
'Sol Semilla,0142010344, Bar à plantes végétalien bio et sans gluten. Sur réservation.
,,,,
,11:00,14:00,,
,11:00,14:00,,
,11:00,14:00,,
,11:00,14:00,,
,12:00,18:00,,
,12:00,18:00,,
,1,1,1,0,0',
'Loving Hut,0148064384, Restaurant végétalien et bio
,11:30,15:00,18:30,23:00
,11:30,15:00,18:30,23:00
,11:30,15:00,18:30,23:00
,11:30,15:00,18:30,23:00
,11:30,15:00,18:30,23:00
,11:30,15:00,18:30,23:00
,,,,
,1,1,0,0,0',
'Soya,0148063302, Restaurant végétarien végétalien bio et sans gluten
,12:00,15:30,19:00,23:00
,12:00,15:30,19:00,23:00
,12:00,15:30,19:00,23:00
,12:00,15:30,19:00,23:00
,12:00,15:30,19:00,23:00
,12:00,15:30,19:00,23:00
,12:00,15:30,,
,1,1,1,0,0',
'Mamie Green,0143723668, Restaurant végétarien végétalien et bio
,,,,
,11:30,19:00,,
,11:30,19:00,,
,11:30,19:00,,
,11:30,19:00,,
,11:30,19:00,,
,11:30,19:00,,
,1,1,0,0,0',
'East Side Burgers,0148064383, Fast food végétarien et végétalien
,12:00,18:00,,
,12:00,18:00,,
,12:00,18:00,,
,12:00,18:00,,
,12:00,20:00,,
,12:00,20:00,,
,12:00,18:00,,
,1,1,0,0,0',
'Gentle Gourmet Café,0143434849, Restaurant végétalien bio et sans gluten
,09:00,15:00,19:00,23:00
,09:00,15:00,19:00,23:00
,09:00,15:00,19:00,23:00
,09:00,15:00,19:00,23:00
,09:00,15:00,19:00,23:00
,09:00,15:00,19:00,23:00
,09:00,17:00,19:00,23:00
,1,1,1,0,0',
'Green Garden,0145829954, Restaurant végétalien
,12:00,15:00,18:30,22:30
,,,,
,12:00,15:00,18:30,22:30
,12:00,15:00,18:30,22:30
,12:00,15:00,18:30,22:30
,12:00,15:00,18:30,22:30
,12:00,15:00,18:30,22:30
,1,1,0,0,0',
'Aquarius,0145413688, Restaurant végétarien végétalien et bio
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,12:00,14:30,19:00,22:30
,,,,
,1,1,0,0,0',
'Joy in Food,0143879679, Restaurant végétarien végétalien et bio
,12:00,14:30,,
,12:00,14:30,,
,12:00,14:30,,
,12:00,14:30,,
,12:00,14:30,,
,,,,
,,,,
,1,1,0,0,0',
'Au Grain de Folie,0142581557, Restaurant végétarien végétalien et bio ouvert du mercredi au dimanche de 13h à 14h30 et du mardi au samedi de 19h à 22h30.
,,,,
,,,19:00,22:30
,13:00,14:30,19:00,22:30
,13:00,14:30,19:00,22:30
,13:00,14:30,19:00,22:30
,13:00,14:30,19:00,22:30
,13:00,14:30,,
,1,1,0,0,0',
'Bêtise et Volup Thé,0381508345, Restaurant végétarien végétalien et bio
,,,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,12:00,22:00,,
,,,,
,1,1,0,0,0',

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
            'Paris,75005,42 Rue Daubenton,48.840593,2.351203',
            'Paris,75005,18 Rue du Cardinal Lemoine,48.848696,2.353463',
            'Paris,75001,5 Rue Hérold,48.86482,2.341126',
            'Paris,75001,41 Rue Saint Honoré,48.860792,2.345479',
            'Paris,75001,36 Rue Croix des Petits Champs,48.86424,2.340392',
            'Paris,75008,47 Rue Laborde,48.875383,2317791',
            'Paris,75008,10 Place Henri Bergson,48.876352,2.320977',
            'Paris,75116,8 Avenue Kléber,48.872069,2.293266',
            'Paris,75002,16 Passage des Panoramas,48.870976,2.341726',
            'Paris,75007,24 Avenue de Tourville,48.854337,2.306967',
            'Paris,75003,55 Rue des Archives,48.861575,2.358293',

//---<
//Luiz--->
            'Belfort,90000,15 Rue Aristide Briand,47.632488,6.855264',
//---<
//Florian--->
            'Fouvent-Saint-Andoche,70600,Domaine de la Pierre Percée,47.675662,5.685214999999971',
            'Belfort,90000,18 rue de Brasse,47.6434499,6.857726800000023',
            'Besançon,25000,1 rue Mégevand,47.2366432,6.022471200000041',
            'Paris,75001,41 rue des Bourbonnais,48.8605333,2.345503199999939',
            'Paris,75003,22 rue Rambuteau,48.8608996,2.3543503999999302',
            'Paris,75003,74 rue des Gravilliers,48.86456769999999,2.3545662999999877',
            'Paris,75004,6 rue du Forez,48.8636491,2.363151000000016',
            'Paris,75005,9 rue de la Cerisaie,48.8516549,2.3664059999999836',
            'Paris,75005,9 rue Jacques Cœur,48.8528822,2.367327799999998',
            'Paris,75005,18 rue de la Bucherie,48.85193959999999,2.3484647000000223',
            'Paris,75005,53 rue Mouffetard,48.8434104,2.3496196999999484',
            'Paris,75005,8 rue Xavier Privas,48.85294469999999,2.3455804999999827',
            'Paris,75006,36 rue Saint-André des Arts,48.85343599999999,2.3417021000000204',
            'Paris,75009,7 rue Notre-Dame de Lorette,48.8771888,2.3384227999999894',
            'Paris,75009,65 rue du Faubourg Poissonnière,48.8755311,2.3478463999999803',
            'Paris,75009,109 rue du Faubourg Poissonnière,48.8776168,2.348911600000065',
            'Paris,75009,3 rue de la Boule Rouge,48.87335849999999,2.344544199999973',
            'Paris,75010,24 rue Cail,48.88292719999999,2.359570299999973',
            'Paris,75010,170 rue du Faubourg-Saint-Denis,48.8798646,2.35756779999997',
            'Paris,75010,14 rue Bichat,48.87027079999999,2.369061600000009',
            'Paris,75010,15 rue Lucien Sampaix,48.872029,2.3604325000000017',
            'Paris,75010,23 rue des Vinaigriers,48.87307099999999,2.3629620000000386',
            'Paris,75011,92 Boulevard Beaumarchais,48.8598848,2.367854599999987',
            'Paris,75011,20 rue de la Pierre levée,48.86811669999999,2.370258299999932',
            'Paris,75011,25 rue de la Forgé Royale,48.8521114,2.380914599999983',
            'Paris,75011,60 Boulevard Voltaire,48.8618141,2.3730745999999954',
            'Paris,75012,24 Boulevard de la Bastille,48.84902599999999,2.3682651000000305',
            'Paris,75013,20 rue Nationale,48.8234363,2.368519200000037',
            'Paris,75014,40 rue de Gergovie,48.83319399999999,2.315592199999969',
            'Paris,75017,22 rue Truffaut,48.8852398,2.322793899999965',
            'Paris,75018,24 rue la Vieuville,48.88474129999999,2.340531800000008',
            'Besançon,25000,79 rue des Granges,47.2371427,6.027574299999969',


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
            $Address->setZipCode($address[1]);
            $Address->setStreet($address[2]);
            $Address->setLatitude($address[3]);
            $Address->setLongitude($address[4]);

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