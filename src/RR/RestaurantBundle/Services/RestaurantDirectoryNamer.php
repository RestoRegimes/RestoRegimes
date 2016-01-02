<?php

namespace RR\RestaurantBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;

use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

class RestaurantDirectoryNamer implements DirectoryNamerInterface
{

    public function directoryName($object, PropertyMapping $mapping)
    {
        return $object->getRestaurant()->getSiret();
    }

}