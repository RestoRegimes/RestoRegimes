<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadRegime.php

namespace RR\RestaurantBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RR\RestaurantBundle\Entity\Regime;

class LoadRegime implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de Regimes et descriptions à ajouter
        $regimes = array(
            'Vegetarien',
            'Allergies',
            'Sans gluten',
            'Diabetique',
            'Cholesterol'
        );
        $description = array(
            "Le végétarisme est une pratique alimentaire qui exclut la consommation de chair animale pour des motivations diverses.",
            "Le végétalisme est une pratique alimentaire qui exclut les produits et sous-produits d''origine animale (viandes, poissons, crustacés, mollusques, gélatine, œufs, lait, miel, etc.).",
            "Ce régime excluant le blé, l''orge, l''avoine et le seigle n''est pas très simple à mettre en place car il implique souvent de modifier des habitudes alimentaires bien ancrées.",
            "Aujourd’hui, on ne parle plus de régime pour personnes diabétiques.",
            "Le cholestérol est un lipide de la famille des stérols qui joue un rôle central dans de nombreux processus biochimiques. "
          );



        for($i=0;$i<5;$i++) {
            // On crée la catégorie
            $regime = new Regime();
            $regime->setLibelle($regimes[$i]);
            $regime->setDescription($description[$i]);
            // On la persiste
            $manager->persist($regime);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}