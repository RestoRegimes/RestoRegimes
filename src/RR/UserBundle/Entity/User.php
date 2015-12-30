<?php
// src/AppBundle/Entity/User.php

namespace RR\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\OnetoOne(targetEntity="Padam87\AddressBundle\Entity\GeocodedAddress",cascade={"persist","remove"})
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="string",length=10,unique=true,nullable=true)
     * @Assert\Regex(pattern="#^0[1-68]([-. ]?[0-9]{2}){4}$#",message="Numero de telephone non valide")
     */
    private $telephone;

    /**
     * @ORM\OnetoOne(targetEntity="RR\UserBundle\Entity\UserImage",cascade={"persist","remove"})
     * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageName")
     */
    private $profileImage;

    public function __construct()
    {
        parent::__construct();
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
}
