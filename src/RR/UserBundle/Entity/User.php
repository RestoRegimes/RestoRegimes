<?php
// src/AppBundle/Entity/User.php

namespace RR\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
}
