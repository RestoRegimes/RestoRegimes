<?php
namespace RR\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\OnetoOne(targetEntity="RR\UserBundle\Entity\User")
     */
    protected $user;

    /**
     * @ORM\OnetoOne(targetEntity="RR\RestaurantBundle\Entity\Restaurant")
     */
    protected $resto;

    /**
     * @ORM\Column(type="string", length=4096)
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="4096")
     */
    protected $texteCommentaire;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=0, max=10)
     */
    protected $noteCuisine;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=0, max=10)
     */
    protected $noteBesoins;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=0, max=10)
     */
    protected $noteService;

    /**
     * @ORM\Column(type="decimal", scale=2)
     *
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
    public function setNoteMoyenne($noteCuisine, $noteBesoins, $noteService)
    {
        $this->noteMoyenne = $noteCuisine *0.4 + $noteBesoins * 0.4 + $noteService * 0.2;

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
}
