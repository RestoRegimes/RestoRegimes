<?php

namespace RR\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recherche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RR\CoreBundle\Entity\RechercheRepository")
 */
class Recherche
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_recherche", type="datetime")
     */
    private $dateRecherche;

    /**
     * @var string
     *
     * @ORM\Column(name="recherche", type="string",length=255")
     */
    private $recherche;


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
     * Set dateRecherche
     *
     * @param \DateTime $dateRecherche
     *
     * @return Recherche
     */
    public function setDateRecherche($dateRecherche)
    {
        $this->dateRecherche = $dateRecherche;

        return $this;
    }

    /**
     * Get dateRecherche
     *
     * @return \DateTime
     */
    public function getDateRecherche()
    {
        return $this->dateRecherche;
    }

    /**
     * Set recherche
     *
     * @param string $recherche
     *
     * @return Recherche
     */
    public function setRecherche($recherche)
    {
        $this->recherche = $recherche;

        return $this;
    }

    /**
     * Get recherche
     *
     * @return string
     */
    public function getRecherche()
    {
        return $this->recherche;
    }
}

