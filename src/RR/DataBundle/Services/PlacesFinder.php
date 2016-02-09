<?php
/**
 * Created by PhpStorm.
 * User: lfbarreto
 * Date: 09/02/16
 * Time: 13:01
 */

namespace RR\DataBundle\Services;


class PlacesFinder
{

    private $api_key;
    public function __construct($api_key)
    {
        $this->api_key=$api_key;
    }

    public function placesSearch($latitude,$longitude,$radius,$type){

    }

    public function placeDetails($id_place){

    }
}