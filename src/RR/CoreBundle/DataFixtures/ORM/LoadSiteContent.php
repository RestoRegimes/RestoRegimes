<?php

namespace RR\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RR\CoreBundle\Entity\SiteContent;

class LoadSiteContent implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        $typeFAQ="FAQ";

        $titles = array(
            "Découvrez Restorégime : ",
            "Sur les restaurants : Qu'est-ce que l'on trouve sur ce site ?",
            "",
            "",
            "",
            "Sur la recherche : comment trouver le restaurant qui vous plaît ?",
            "",
            "",
            "",
            "",
            "Quelques astuces sur la recherche : ",
            "",
            "Sur les avis :",
            "",
            "",
            "",
            "",
            "",
            "Sur votre compte :",
            ""

        );

        $subTitles = array(
            "Qui sommes-nous et que proposons-nous ?",
            "Quels restaurants trouve-t-on sur Restorégime ?",
            "Comment sont-ils sélectionnés ?",
            "À quoi correspond la mention de prix ''à partir de'' ? ",
            "Vous ne trouvez pas le restaurant que vous souhaitez ? Faites-nous part de votre suggestion !",
            "Comment fonctionne la recherche sur Restorégime ? ",
            "Les restaurants proposés sont-ils disponibles pour mes critères ?",
            "Pourquoi se géolocaliser ? A quoi sert le picto « ma position actuelle» du moteur de recherche ?",
            "Suite à votre recherche, vous désirez plus de résultats ?",
            "Le format liste ne vous convient pas ?",
            "Comment rechercher par type de cuisine ?",
            "Comment rechercher un restaurant par besoin alimentaire ?",
            "N'importe qui peut-il déposer un avis sur Restorégime ?",
            "Comment déposer un avis ?",
            "Comment est calculée la note que j'attribue au restaurant ?",
            "Toutes les notes sont-elles publiées ?",
            "Pourquoi mon commentaire écrit n'est-il pas publié ?",
            "Gourmet, Fin gourmet, Gastronome... A quoi correspondent ces profils d'utilisateurs ?",
            "Quelles sont les informations de mon compte que les autres utilisateurs peuvent voir ?",
            "Pourquoi utiliser Facebook Connect sur Restorégime ?"


        );

        $contents1 = array(
            'Restorégime est un service de réservation de restaurants en ligne gratuit. Notre mission est de vous proposer un large choix de restaurants classés selon différents critères de régime (poids, allergies, habitudes alimentaires…)  ',
            "Restorégime vous propose une offre variée de plus X restaurants de qualité, et de tous types. Une cuisine adaptée aux besoins de personnes qui suivent un régime diététique ou pour des raisons médicale. ",
            "Afin de vous garantir une offre variée et fiable, les restaurants doivent tous être réservables et proposer une prestation pour laquelle ils se sont engagés pour figurer sur Restorégime. ",
            "Sur toutes les fiches des restaurants, nous indiquons la mention « à partir de », cela vous permet de connaître le montant minimal d'une addition à régler dans l’établissement de votre choix.",
            "Vous avez vos habitudes dans un restaurant qui vous prépare des plats adaptés et vous ne le trouvez pas sur Restorégime. Faites nous part de vos suggestions, nous sommes preneurs de vos bonnes adresses !",
            "Pour trouver un restaurant sur Restorégime, il vous suffit de compléter les champs situés en haut de chaque page : Le champ « quel type de régime ?» : vous indiquez vos besoins alimentaires. « où ? » :",
            "En complétant les champs « date » « heure » et « nombre de personnes » situés en haut de page, vous accédez à une liste de restaurants disponibles pour les critères choisis. ",
            "Se géolocaliser permet d'obtenir la liste des restaurants les plus proches de l'endroit où l'on se trouve : Une icône en forme de cible renvoyant à « Ma position actuelle » se trouve dans le champ « où » du moteur de recherche. ",
            "Une fois lancée votre recherche en fonction d'une adresse, d'une ville, d'un code postal ou encore d'un métro, nous adaptons le rayon de la recherche afin que vous ayez un minimum de restaurants proposés.",
            "Vous pouvez facilement avoir une vue d'ensemble des restaurants sur une carte en cliquant sur « Voir sur un plan », en haut à gauche de la page. Et vous pourrez affiner votre recherche de la même manière qu'avec le format liste !",
            "Après avoir fait votre recherche, il vous suffit de sélectionner le type de cuisine que vous souhaitez dans la colonne à gauche de la liste de restaurants proposés.",
            "Vous pouvez trier vos résultats par « Promotions » depuis le menu déroulant, en haut à droite de la page. Cela vous permet d'afficher les meilleures promotions parmi les adresses proposées. ",
            "NON ! Seuls les internautes ayant réservé par Restorégime et honoré leur réservation peuvent déposer un avis. Un vrai gage de fiabilité et de crédibilité sur les notes et avis déposés sur le site.",
            "Une fois votre repas terminé, vous recevez un email vous invitant à déposer votre avis sur votre expérience au restaurant. Vous pouvez alors remplir le questionnaire directement depuis l'email",
            "Lorsque vous déposez un avis, vous notez 3 critères sur une échelle de 1 à 10 : la cuisine, le respect des besoins alimentaires, le service et le cadre. La note finale attribuée au restaurant est la moyenne de ces notes,",
            "Oui à partir du moment où la réservation a été honorée. Dès que vous déposez votre avis, la note est publiée. Si vous ne vous êtes pas présenté au restaurant, la note n'apparaîtra pas. Si vous avez laissé un commentaire,",
            "Tous les commentaires sont publiés sur Restorégime à l'exception des propos injurieux ou non conformes aux Mentions Légales du site.",
            "Pour vous aider dans votre choix, vous pouvez repérer les avis « d'experts » en identifiant le profil des membres Restorégime, défini en fonction du nombre d'avis qu'ils ont déposés sur le site :",
            "Votre prénom et l'initiale de votre nom sont visibles par les autres utilisateurs. Si vous avez choisi d'avoir un profil public, vos avis seront visibles en cliquant sur votre nom. Si vous ne souhaitez pas qu'on puisse les lire, ",
            "Gagnez du temps grâce à Facebook Connect lors de votre inscription et de vos connections sur Restorégime ! Si vous le souhaitez, les informations de votre page Facebook"
        );
        $contents2 = array(
            'pour vous permettre où que vous alliez de trouver un restaurant qui réponde à vos besoins.',
            "",
            "D'ailleurs, la plupart sont cités ou recommandés par un guide gastronomique. Toutefois, sur Restorégime, le critique c'est également vous. Après avoir mangé, vous pouvez déposer (et nous y engageons vivement) ",
            "Le montant est calculé à partir des prix indiqués par le restaurateur, sur la base entrée/plat ou plat/dessert, hors boisson et prend en compte les offres disponibles. Cette mention ne peut être considérée comme",
            "Pour cela, il vous suffit de cliquer sur le lien «Vous souhaitez suggérer un Restorégime» qui apparaît lorsqu'aucun résultat ne correspond à votre recherche. Vous pouvez également",
            "vous pouvez chercher un restaurant selon votre ville, le nom du restaurant, une adresse, un code postal, un quartier ou même un métro. Le champ « quand ? » : en complétant les champs « date », « heure »",
            "Si vous n'avez pas rempli ces critères, les disponibilités des restaurants ne seront pas prises en compte.",
            "Il permet de se géolocaliser et donc d'avoir en un clin d'oeil tous les restaurants autour de soi.",
            "Cependant, si vous le souhaitez, vous pouvez réduire cette distance ou au contraire l'augmenter pour avoir plus de résultats. ",
            "",
            "",
            "Vous pouvez aussi choisir le type de promotion qui vous intéresse dans la colonne à gauche de la liste de restaurants ou même filtrer vos restaurants pour n'afficher que ceux qui ",
            "",
            "ou à partir de votre compte, depuis le lien à côté de votre réservation, dans la page « Mes réservations ».",
            "Vous pouvez également donner votre avis par écrit sur le rapport qualité-prix, la fraicheur des produits, le temps d'attente et surtout préciser si vous recommanderiez cette adresse. ",
            "calculée de la manière suivante : celui-ci est toujours relu par nos équipes avant publication. Par souci de représentativité, 3 avis au minimum doivent être déposés pour apparaître sur la fiche du restaurant.",
            "Cependant, votre avis, même non publié, est toujours adressé au restaurateur concerné, afin de l'en informer. Quant à la note, elle est automatiquement publiée sur la fiche du restaurant.",
            "Vous pouvez aussi accéder à l'historique des avis déposés par un internaute, en cliquant sur le lien sous son profil. Une précieuse source d'inspiration pour comparer vos goûts et trouver votre bonheur !",
            "rendez-vous sur « mon profil » dans l'onglet « Mon compte » et décocher « Je souhaite activer l'accès à mon profil public ». Vos avis seront alors uniquement visibles sur les fiches des restaurants.",
            "telles que votre photo, nom, prénom et ville seront utilisées sur votre compte Restorégime."
        );
        $contents3 = array(
            "",
            "",
            "un avis, vous êtes en partie nos yeux et nos bouches pour savoir si le restaurant respecte son engagement pour votre santé, et vous êtes également là pour guider les « restorégimeurs » à faire leur choix.",
            "contractuelle mais elle vous donne un bon aperçu d’une partie de votre note. Toutefois, certains restaurants à leur bon vouloir, peuvent proposer un menu du jour adapté à vos besoins alimentaire au prix du menu habituel.",
            "nous écrire en remplissant le formulaire qui se trouve dans l'onglet «Contactez-nous» en bas de page. Nous lisons tous vos messages !",
            "et « nombre de personnes », vous pourrez trouver rapidement un restaurant disponible en fonction de vos critères. ",
            "",
            "Mais pour fonctionner, cette géolocalisation doit être activée ! Pour cela, il faut cliquer sur « Partager sa localisation » dans le pop-up qui s'ouvre suite à votre clic sur cette même icône.",
            "Pour cela, déplacez le curseur du « Rayon de recherche » dans la colonne de gauche de votre page de résultats.",
            "",
            "",
            "proposent une réduction et ce, en cochant la case « Toutes les promotions ».",
            "",
            "",
            "Enfin, dans un souci de représentativité, seules les notes des 12 derniers mois sont prises en compte. ",
            "",
            "",
            "Pour le savoir, rendez-vous sur la page « Mon compte ». Si vous ne souhaitez pas que l'on puisse accéder à votre historique d'avis, vous pouvez désactiver cette fonctionnalité dans votre profil. Alors, vous êtes « Fin gourmet » vous, non ?",
            "",
            ""

        );

        $footer = array(

        );

        for($i=0;$i<19;$i++) {
            // On crée la catégorie
            $siteContent = new SiteContent();
            $siteContent->setTypeContent($typeFAQ);
            if(strlen($titles[$i])>0) $siteContent->setTitle($titles[$i]);
            if(strlen($subTitles[$i])>0) $siteContent->setSubtitle($subTitles[$i]);
            if(strlen($contents1[$i])>0) $siteContent->setContent1($contents1[$i]);
            if(strlen($contents2[$i])>0) $siteContent->setContent2($contents2[$i]);
            if(strlen($contents3[$i])>0) $siteContent->setContent3($contents3[$i]);
            $siteContent->setEnabled(true);
            // On la persiste
            $manager->persist($siteContent);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}