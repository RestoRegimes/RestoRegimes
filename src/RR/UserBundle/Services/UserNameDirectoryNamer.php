<?php

namespace RR\UserBundle\Services;


use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

/**
 * Class UsernameDirectoryNamer
 * @package RR\UserBundle\Services
 */
class UserNameDirectoryNamer implements DirectoryNamerInterface
{

    public function directoryName($object, PropertyMapping $mapping)
    {
        return $object->getUser()->getUsernameCanonical();
    }

}