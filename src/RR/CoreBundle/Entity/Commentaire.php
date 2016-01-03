<?php
namespace RR\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="commentaire")
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
    * @ORM\ManytoOne(targetEntity="RR\UserBundle\Entity\User", inversedBy="commentaires")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $user;

    /**
     * @ORM\ManytoOne(targetEntity="RR\RestaurantBundle\Entity\Restaurant", inversedBy="commentaires")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $restaurant;

    /**
     * @ORM\Column(type="string", length=4096)
     * @Assert\NotBlank()
     * @Assert\Length(min="15", max="4096",minMessage="Le commentaire doit faire au minimum {{ limit }} caracteres",maxMessage="Le commentaire doit faire au maximum {{ limit }} caracteres")
     */
    protected $texteCommentaire;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Assert\Range(min=0, max=10)
     */
    protected $noteCuisine;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Assert\Range(min=0, max=10)
     */
    protected $noteBesoins;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Assert\Range(min=0, max=10)
     */
    protected $noteService;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Assert\Range(min=0, max=10)
     */
    protected $noteMoyenne;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texteCommentaire
     *
     * @param string $texteCommentaire
     *
     * @return Commentaire
     */
    public function setTexteCommentaire($texteCommentaire)
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    /**
     * Get texteCommentaire
     *
     * @return string
     */
    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }

    /**
     * Set noteCuisine
     *
     * @param integer $noteCuisine
     *
     * @return Commentaire
     */
    public function setNoteCuisine($noteCuisine)
    {
        $this->noteCuisine = $noteCuisine;

        return $this;
    }

    /**
     * Get noteCuisine
     *
     * @return integer
     */
    public function getNoteCuisine()
    {
        return $this->noteCuisine;
    }

    /**
     * Set noteBesoins
     *
     * @param integer $noteBesoins
     *
     * @return Commentaire
     */
    public function setNoteBesoins($noteBesoins)
    {
        $this->noteBesoins = $noteBesoins;

        return $this;
    }

    /**
     * Get noteBesoins
     *
     * @return integer
     */
    public function getNoteBesoins()
    {
        return $this->noteBesoins;
    }

    /**
     * Set noteService
     *
     * @param integer $noteService
     *
     * @return Commentaire
     */
    public function setNoteService($noteService)
    {
        $this->noteService = $noteService;

        return $this;
    }

    /**
     * Get noteService
     *
     * @return integer
     */
    public function getNoteService()
    {
        return $this->noteService;
    }

    /**
     * Set noteMoyenne
     *
     * @param string $noteMoyenne
     *
     * @return Commentaire
     */
    public function setNoteMoyenne()
    {
        if(is_null($this->noteCuisine))$this->noteCuisine=0;
        if(is_null($this->noteBesoins))$this->noteBesoins=0;
        if(is_null($this->noteService))$this->noteService=0;
        $noteMoyenne = $this->noteCuisine *0.4 + $this->noteBesoins * 0.4 + $this->noteService * 0.2;
        if($noteMoyenne>0)$this->noteMoyenne=$noteMoyenne;
        return $this;
    }

    /**
     * Get noteMoyenne
     *
     * @return string
     */
    public function getNoteMoyenne()
    {
        return $this->noteMoyenne;
    }

    /**
     * Set user
     *
     * @param \RR\UserBundle\Entity\User $user
     *
     * @return Commentaire
     */
    public function setUser(\RR\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \RR\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set resto
     *
     * @param \RR\RestaurantBundle\Entity\Restaurant $resto
     *
     * @return Commentaire
     */
    public function setResto(\RR\RestaurantBundle\Entity\Restaurant $resto = null)
    {
        $this->resto = $resto;

        return $this;
    }

    /**
     * Get resto
     *
     * @return \RR\RestaurantBundle\Entity\Restaurant
     */
    public function getResto()
    {
        return $this->resto;
    }

    /**
     * @Assert\Callback
     */
    public function isContentValid(ExecutionContextInterface $context)
    {
        $arraybadwords=array(
            'Abruti','Abrutie','Anus','Atardé','Atardée','Baltringue','Bande-mou','Bite','Boloss','Bordel','Boubourse',
            'Bouffon','Bouffonne','Boulet','Boursemolle','Bouseux','Bouseuse','Boutonneux','Branleur','Branleuse','Branquignole',
            'Brigand','Brêle','Burne','Bécasse','Cagole','Catin','Chacal','Chameau','Charogne','Chiant','Chiante','Chiassard',
            'Chienasse','Chieur','Chieuse','Chiure','Cinglé','Cinglée','Clitoris','Cloaque','Cloche','Clodo','Cloporte','Clown',
            'Cocu','Con','Conbête','Conchieur','Connard','Conard','Connasse','Conasse','Conne','Cornard','Corne-cul','Corniaud',
            'Couard','Couille','Couille-Molle','Couillon','Crapule','Crasse','Crassard','Crasseuse','Crevard','Crevure','Crotte',
            'Crétin','Cuistre','Cul','Degueulasse','Dégueulasse','Ducon','Dugland','Débile','Debile','Décamerde','Décérébré',
            'Dégueulis','Dégénéré','Dépravé','Dépravée','Détritus','Ecervelé','Emmerdeur','Emmerdeuse','Empaffé','Empaffée',
            'Empoté','Empotée','Enculé','Enculée','Enculeur','Enflure','Enfoiré','Enfoirée','Face-De-Cul','Face-De-Pet',
            'Face-De-Bite','Face-De-Rat','Faignasse','Feignasse','Fainéant','Fainéante','Faquin','Faquine','Faraud',
            'Faschiste','Fachiste','Fesse','Fiente','Fils-De-Pute','Fion','Fiote','Fiotte','Foireux','Foireuse','Foutre',
            'Fricoteur','Fricoteuse','Fumier','Furoncle','Gangrène','Garage-a-bite','Garce','Gland','Glandeur','Glandu',
            'Gnome','Gogol','Gogole','Gogolle','Gourdasse','Gourgandine','Graveleux','Gredin','Gringalet','Grognasse','Gros-Con',
            'Gros-Naze','Grosse-Merde','Grosse-Truie','Gueulard','Gueule','Gueux','Gugus','Guignol','Homoncule','Hérétique',
            'Idiot','Idiotte','Ignare','Illettré','Imbécile','Infame','Infâme','Ivrogne','Judas','Kéké','Laideron','Larve',
            'Leche-boules','Leche-cul','Lopette','Loquedu','Louf','Mal-Baisé','Mal-Baisée','Malpropre','Merdaillon','Merdasse',
            'Merde','Merdophile','Minable','Minus','Miteux','Molasson','Morpion','Mortecouille','Morveux','Mécréant','Naze',
            'Nazebroque','Necropédophile','Neuneu','Nique','Nécrophile','Obsédé','Olibrius','Ordure','Panaris','Parasite',
            'Peigne-cul','Pendard','Pervers','Pet','Pignouf','Pimbêche','Pine','Pisse','Pisseuse','Pisseur','Pissure','Plouc',
            'Poltron','Poltronne','Pouffiasse','Pouilleux','Pouilleuse','Psychorigide','Putain','Pute','Putréfaction','Péquenot',
            'Pétasse','Queutard','Salaud','Salopard','Salope','Scatophile','Sodomite','Tafiole','Vermine');

        // On vérifie que le contenu ne contient pas l'un des mots

        if (preg_match('/\b('.implode('|', $arraybadwords).')\b/', ucwords(str_replace('-',' ',$this->getTexteCommentaire())))) {
            // La règle est violée, on définit l'erreur
            $context
                ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
                ->atPath('texteCommentaire')                                                   // attribut de l'objet qui est violé
                ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
            ;
        }

    }

    /**
     * Set restaurant
     *
     * @param \RR\RestaurantBundle\Entity\Restaurant $restaurant
     *
     * @return Commentaire
     */
    public function setRestaurant(\RR\RestaurantBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    
        return $this;
    }

    /**
     * Get restaurant
     *
     * @return \RR\RestaurantBundle\Entity\Restaurant
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }
}
