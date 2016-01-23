<?php

namespace RR\CoreBundle\Services;


use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

class SiteImageDirectoryNamer implements DirectoryNamerInterface
{

    public function directoryName($object, PropertyMapping $mapping)
    {
        return $object->getSitecontent()->getTypeContent();
    }

}