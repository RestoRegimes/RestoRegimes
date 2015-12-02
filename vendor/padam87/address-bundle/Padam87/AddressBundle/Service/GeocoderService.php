<?php

namespace Padam87\AddressBundle\Service;

use Geocoder\Geocoder;
use Padam87\AddressBundle\Entity\GeocodedAddressInterface;

class GeocoderService
{
    /**
     * @var Geocoder
     */
    protected $geocoder;

    /**
     * @var FormatterService
     */
    protected $formatter;

    /**
     * @param Geocoder $geocoder
     * @param FormatterService  $formatter
     */
    public function __construct(Geocoder $geocoder, FormatterService $formatter)
    {
        $this->geocoder = $geocoder;
        $this->formatter = $formatter;
    }

    /**
     * @param GeocodedAddressInterface $address
     */
    public function geocode(GeocodedAddressInterface $address)
    {
        try {
            $coords = $this->geocoder->geocode($this->formatter->format($address, FormatterService::FLAG_NOBR))->first();
            $address->setLatitude($coords->getLatitude());
            $address->setLongitude($coords->getLongitude());
        } catch (\Exception $e) {

            $address->setLatitude(0);
            $address->setLongitude(0);
        }


    }
}
