<?php
namespace RR\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="favoris")
 */
class Favoris
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OnetoOne(targetEntity="RR\UserBundle\Entity\User")
     */
    protected $user;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Restaurant")
     */
    protected $resto;

    /**
     * @ORM\Column(type="date")
     */
    protected $dateAjout;

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
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Favoris
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set user
     *
     * @param \RR\UserBundle\Entity\User $user
     *
     * @return Favoris
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
     * @return Favoris
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
}
