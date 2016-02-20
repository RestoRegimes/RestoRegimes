<?php
// src/AppBundle/Entity/User.php

namespace RR\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="telephone", message="Ce telephone est deja utilisé.")
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;




    /**
     * @ORM\OneToOne(targetEntity="Padam87\AddressBundle\Entity\GeocodedAddress",cascade={"persist","remove"})
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="string",length=10,unique=true,nullable=true)
     * @Assert\Regex(pattern="#^0[1-68]([0-9]{2}){4}$#",message="Numero de telephone non valide ex: 0305678303")
     */
    private $telephone;

    /**
     * @ORM\OnetoOne(targetEntity="RR\UserBundle\Entity\UserImage",cascade={"persist","remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageName")
     */
    private $profileImage;

    /**
     * @ORM\ManyToMany(targetEntity="RR\RestaurantBundle\Entity\Restaurant",cascade={"persist"})
     * @ORM\JoinTable(name="favoris")
     */
    private $favoris;

    /**
     * @ORM\OneToMany(targetEntity="RR\CoreBundle\Entity\Commentaire", mappedBy="user", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    protected $commentaires;


    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;

    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;

    /**
     * @ORM\Column(name="premium",type="boolean",options={"default": false})
     */
    protected $premium;


    public function __construct()
    {
        parent::__construct();
        $this->premium=false;
        // your own logic
    }

    /**
     * Set address
     *
     * @param \Padam87\AddressBundle\Entity\GeocodedAddress $address
     *
     * @return User
     */
    public function setAddress(\Padam87\AddressBundle\Entity\GeocodedAddress $address = null)
    {
        $address->setCountry("France");
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
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
     * Set profileImage
     *
     * @param \RR\UserBundle\Entity\UserImage $profileImage
     *
     * @return User
     */
    public function setProfileImage(\RR\UserBundle\Entity\UserImage $profileImage = null)
    {
        $this->profileImage = $profileImage;
        $profileImage->setUser($this);
    
        return $this;
    }

    /**
     * Get profileImage
     *
     * @return \RR\UserBundle\Entity\UserImage
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * Add favori
     *
     * @param \RR\RestaurantBundle\Entity\Restaurant $favori
     *
     * @return User
     */
    public function addFavori(\RR\RestaurantBundle\Entity\Restaurant $favori)
    {
        $this->favoris[] = $favori;
    
        return $this;
    }

    /**
     * Remove favori
     *
     * @param \RR\RestaurantBundle\Entity\Restaurant $favori
     */
    public function removeFavori(\RR\RestaurantBundle\Entity\Restaurant $favori)
    {
        $this->favoris->removeElement($favori);
    }

    /**
     * Get favoris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Add commentaire
     *
     * @param \RR\CoreBundle\Entity\Commentaire $commentaire
     *
     * @return User
     */
    public function addCommentaire(\RR\CoreBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
    
        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \RR\CoreBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\RR\CoreBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set google_id
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get google_id
     *
     * @return string
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set google_access_token
     *
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get google_access_token
     *
     * @return string
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set premium
     *
     * @param boolean $premium
     *
     * @return User
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean
     */
    public function getPremium()
    {
        return $this->premium;
    }
}
