<?php

namespace RR\RestaurantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RR\RestaurantBundle\Entity\HoraireRepository")
 */
class Horaire implements \JsonSerializable
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
     * @ORM\Column(name="ouverture1", type="time",nullable=true)
     */
    private $ouverture1=NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fermeture1", type="time",nullable=true)
     */
    private $fermeture1=NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ouverture2", type="time",nullable=true)
     */
    private $ouverture2=NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fermeture2", type="time",nullable=true)
     */
    private $fermeture2=NULL;


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
     * Set ouverture1
     *
     * @param \DateTime $ouverture1
     *
     * @return Horaire
     */
    public function setOuverture1($ouverture1)
    {
        $this->ouverture1 = $ouverture1;

        return $this;
    }

    /**
     * Get ouverture1
     *
     * @return \DateTime
     */
    public function getOuverture1()
    {
        return $this->ouverture1;
    }

    /**
     * Set fermeture1
     *
     * @param \DateTime $fermeture1
     *
     * @return Horaire
     */
    public function setFermeture1($fermeture1)
    {
        $this->fermeture1 = $fermeture1;

        return $this;
    }

    /**
     * Get fermeture1
     *
     * @return \DateTime
     */
    public function getFermeture1()
    {
        return $this->fermeture1;
    }

    /**
     * Set ouverture2
     *
     * @param \DateTime $ouverture2
     *
     * @return Horaire
     */
    public function setOuverture2($ouverture2)
    {
        $this->ouverture2 = $ouverture2;

        return $this;
    }

    /**
     * Get ouverture2
     *
     * @return \DateTime
     */
    public function getOuverture2()
    {
        return $this->ouverture2;
    }

    /**
     * Set fermeture2
     *
     * @param \DateTime $fermeture2
     *
     * @return Horaire
     */
    public function setFermeture2($fermeture2)
    {
        $this->fermeture2 = $fermeture2;

        return $this;
    }

    /**
     * Get fermeture2
     *
     * @return \DateTime
     */
    public function getFermeture2()
    {
        return $this->fermeture2;
    }

    public function jsonSerialize()
    {
        return array(
            'ouverture1' => $this->ouverture1,
            'fermeture1'=>$this->fermeture1,
            'ouverture2' => $this->ouverture2,
            'fermeture2'=>$this->fermeture2
        );
    }


}
