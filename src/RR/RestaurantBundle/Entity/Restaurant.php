<?php

namespace RR\RestaurantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="RR\RestaurantBundle\Entity\RestaurantRepository")
 * @UniqueEntity(fields="telephone", message="Un Restaurant existe déjà avec ces coordonnées.")
 * @UniqueEntity(fields="siret", message="Un Restaurant existe déjà avec ces coordonnées.")
 * @ORM\HasLifecycleCallbacks()
 */
class Restaurant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(min=2,minMessage="le nom doit faire au minimum {{ limit }} deux caractères.")
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="string",length=10,unique=true)
     * @Assert\Regex(pattern="#^0[1-68]([-. ]?[0-9]{2}){4}$#",message="Numero de telephone non valide")
     */
    private $telephone;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=10, minMessage="La description doit faire au moins {{ limit }} caractères.")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="siret", type="string",length=14,unique=true)
     * @Assert\Length(  min=14,
     *                  max=14,
     *                  minMessage="Le numero siret doit faire {{ limit }} caractères.",
     *                  maxMessage="Le numero siret doit faire {{ limit }} caractères.")
     * @Assert\Luhn(message = "Le numero SIRET entré n'est pas valide.")
     *
     */
    private $siret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     * @Assert\Type(type="bool")
     */
    private $valide = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     * @Assert\DateTime()
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Assert\DateTime()
     */
    private $updatedAt;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\RestoImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="resto_image", fileNameProperty="imageName")
     */
    private $image1;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\RestoImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="resto_image", fileNameProperty="imageName")
     */
    private $image2;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\RestoImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="resto_image", fileNameProperty="imageName")
     */
    private $image3;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\RestoImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="resto_image", fileNameProperty="imageName")
     */
    private $image4;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\RestoImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="resto_image", fileNameProperty="imageName")
     */
    private $image5;

    /**
     * @ORM\ManyToMany(targetEntity="RR\RestaurantBundle\Entity\Regime",cascade={"persist"})
     */
    private $regimes;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $lundi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $mardi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $mercredi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $jeudi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $vendredi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $samedi;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Horaire",cascade={"persist","remove"})
     */
    private $dimanche;

    /**
     * @ORM\OnetoOne(targetEntity="Padam87\AddressBundle\Entity\GeocodedAddress",cascade={"persist","remove"})
     */
    private $address;

    public function __construct(){
        $this->dateCreation         = new \Datetime();
        $this->updatedAt = new \DateTime();
        $this->images   = new ArrayCollection();
        $this->regimes = new ArrayCollection();
    }
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Restaurant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Restaurant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Restaurant
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return Restaurant
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return Restaurant
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Restaurant
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @ORM\PreUpdate
     */
    public function updateDate()
    {
        $this->setUpdatedAt(new \Datetime());
    }
    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Restaurant
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }



    /**
     * Add regime
     *
     * @param \RR\RestaurantBundle\Entity\Regime $regime
     *
     * @return Restaurant
     */
    public function addRegime(\RR\RestaurantBundle\Entity\Regime $regime)
    {
        $this->regimes[] = $regime;

        return $this;
    }

    /**
     * Remove regime
     *
     * @param \RR\RestaurantBundle\Entity\Regime $regime
     */
    public function removeRegime(\RR\RestaurantBundle\Entity\Regime $regime)
    {
        $this->regimes->removeElement($regime);
    }

    /**
     * Get regimes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegimes()
    {
        return $this->regimes;
    }

    /**
     * @Assert\Callback
     */
    public function isDescriptionValid(ExecutionContextInterface $context)
    {
        $forbiddenWords = array('échec', 'abandon');

        // On vérifie que le contenu ne contient pas l'un des mots
        if (preg_match('#'.implode('|', $forbiddenWords).'#', $this->getDescription())) {
            // La règle est violée, on définit l'erreur
            $context
                ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
                ->atPath('description')                                                   // attribut de l'objet qui est violé
                ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
            ;
        }
    }

    /**
     * Set lundi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $lundi
     *
     * @return Restaurant
     */
    public function setLundi(\RR\RestaurantBundle\Entity\Horaire $lundi = null)
    {
        $this->lundi = $lundi;

        return $this;
    }

    /**
     * Get lundi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getLundi()
    {
        return $this->lundi;
    }

    /**
     * Set mardi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $mardi
     *
     * @return Restaurant
     */
    public function setMardi(\RR\RestaurantBundle\Entity\Horaire $mardi = null)
    {
        $this->mardi = $mardi;

        return $this;
    }

    /**
     * Get mardi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getMardi()
    {
        return $this->mardi;
    }

    /**
     * Set mercredi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $mercredi
     *
     * @return Restaurant
     */
    public function setMercredi(\RR\RestaurantBundle\Entity\Horaire $mercredi = null)
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    /**
     * Get mercredi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getMercredi()
    {
        return $this->mercredi;
    }

    /**
     * Set jeudi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $jeudi
     *
     * @return Restaurant
     */
    public function setJeudi(\RR\RestaurantBundle\Entity\Horaire $jeudi = null)
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    /**
     * Get jeudi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getJeudi()
    {
        return $this->jeudi;
    }

    /**
     * Set vendredi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $vendredi
     *
     * @return Restaurant
     */
    public function setVendredi(\RR\RestaurantBundle\Entity\Horaire $vendredi = null)
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    /**
     * Get vendredi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getVendredi()
    {
        return $this->vendredi;
    }

    /**
     * Set samedi
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $samedi
     *
     * @return Restaurant
     */
    public function setSamedi(\RR\RestaurantBundle\Entity\Horaire $samedi = null)
    {
        $this->samedi = $samedi;

        return $this;
    }

    /**
     * Get samedi
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getSamedi()
    {
        return $this->samedi;
    }

    /**
     * Set dimanche
     *
     * @param \RR\RestaurantBundle\Entity\Horaire $dimanche
     *
     * @return Restaurant
     */
    public function setDimanche(\RR\RestaurantBundle\Entity\Horaire $dimanche = null)
    {
        $this->dimanche = $dimanche;

        return $this;
    }

    /**
     * Get dimanche
     *
     * @return \RR\RestaurantBundle\Entity\Horaire
     */
    public function getDimanche()
    {
        return $this->dimanche;
    }

    /**
     * Set address
     *
     * @param \Padam87\AddressBundle\Entity\GeocodedAddress $address
     *
     * @return Restaurant
     */
    public function setAddress(\Padam87\AddressBundle\Entity\GeocodedAddress $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Padam87\AddressBundle\Entity\GeocodedAddress
     */
    public function getAddress()
    {
        return $this->address;
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

        if (preg_match('/\b('.implode('|', $arraybadwords).')\b/', ucwords(str_replace('-',' ',$this->getDescription())))) {
            // La règle est violée, on définit l'erreur
            $context
                ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
                ->atPath('description')                                                   // attribut de l'objet qui est violé
                ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
            ;
        }

    }

    /**
     * Set image1
     *
     * @param \RR\RestaurantBundle\Entity\RestoImage $image1
     *
     * @return Restaurant
     */
    public function setImage1(\RR\RestaurantBundle\Entity\RestoImage $image1 = null)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return \RR\RestaurantBundle\Entity\RestoImage
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param \RR\RestaurantBundle\Entity\RestoImage $image2
     *
     * @return Restaurant
     */
    public function setImage2(\RR\RestaurantBundle\Entity\RestoImage $image2 = null)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return \RR\RestaurantBundle\Entity\RestoImage
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image3
     *
     * @param \RR\RestaurantBundle\Entity\RestoImage $image3
     *
     * @return Restaurant
     */
    public function setImage3(\RR\RestaurantBundle\Entity\RestoImage $image3 = null)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return \RR\RestaurantBundle\Entity\RestoImage
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image4
     *
     * @param \RR\RestaurantBundle\Entity\RestoImage $image4
     *
     * @return Restaurant
     */
    public function setImage4(\RR\RestaurantBundle\Entity\RestoImage $image4 = null)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return \RR\RestaurantBundle\Entity\RestoImage
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * Set image5
     *
     * @param \RR\RestaurantBundle\Entity\RestoImage $image5
     *
     * @return Restaurant
     */
    public function setImage5(\RR\RestaurantBundle\Entity\RestoImage $image5 = null)
    {
        $this->image5 = $image5;

        return $this;
    }

    /**
     * Get image5
     *
     * @return \RR\RestaurantBundle\Entity\RestoImage
     */
    public function getImage5()
    {
        return $this->image5;
    }
}
