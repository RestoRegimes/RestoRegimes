<?php
namespace RR\DataBundle\Services;

use Ivory\GoogleMap\Overlays\MarkerImage;
use Ivory\GoogleMapBundle\Model\Map;
use Ivory\GoogleMap\Overlays\Circle;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\InfoWindow;
use Ivory\GoogleMap\Base\Coordinate;
use \Ivory\GoogleMap\Base\Bound;
use Ivory\GoogleMap\Events\Event;

class MapBuilder
{

    private $map;


    public function __construct($map){
        $this->map = $map;

        $this->styleMap();
    }


    public function generateMap($latitude,$longitude,$radius){
        $coordinates = new Coordinate($latitude,$longitude);
        $this->map->setCenter($coordinates);
        $bounds = new Bound();

        $circle = new Circle();

// Configure your circle options
        $circle->setPrefixJavascriptVariable('circle_');
        $circle->setCenter($latitude, $longitude, true);
        $circle->setRadius($radius*1000);

        $circle->setOption('clickable', false);
        $circle->setOptions(array(
            'strokeColor'=> '#FD6601',
            'strokeOpacity'=> 0.6,
            'strokeWeight'=> 4,
            'fillColor'=>'#dadada',
            'fillOpacity'=> 0.2,
            'clickable'    => true,
            'draggable' => true,
            'geodesic' => true,
            'editable' => true
        ));
        $bounds->extend($circle);
        $this->map->addCircle($circle);

        $event = new Event();
        $instance = $circle->getJavascriptVariable();
        $eventName = "center_changed";
        $handle = 'function( event ){
            $("#data-lat-form").val(this.center.lat());
            $("#data-lng-form").val(this.center.lng());
        }';
        $event->setInstance($instance);
        $event->setEventName($eventName);
        $event->setHandle($handle);
        $event->setCapture(true);

        $event2 = new Event();
        $eventName2 = "radius_changed";
        $handle2 = 'function( event ){
        console.log(this.radius);
        $("#data-radius-form").val(Math.ceil(this.radius));
        }';
        $event2->setInstance($instance);
        $event2->setEventName($eventName2);
        $event2->setHandle($handle2);
        $event2->setCapture(true);

        $this->map->getEventManager()->addDomEvent($event);
        $this->map->getEventManager()->addDomEvent($event2);
        $this->map->setAutoZoom(true);
        $this->map->setBound($bounds);
        return $this->map;
    }

    public function styleMap(){
        $this->map->setMapOption('styles', array(
                array(
                    'stylers' => array(
                        array('hue' => '#00ffe6'),
                        array('saturation' => -20),
                    )
                ),
                array(
                    'featureType'=>"landscape",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('lightness' => 65),
                        array('visibility' => 'on'),
                    )
                ),
                array(
                    'featureType'=>"poi",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('visibility' => 'simplified'),
                    )
                ),
                array(
                    'featureType'=>"road.highway",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('visibility' => 'simplified'),
                    )
                ),
                array(
                    'featureType'=>"road.arterial",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('lightness' => 30),
                        array('visibility' => 'on'),
                    )
                ),
                array(
                    'featureType'=>"road.local",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('lightness' => 40),
                        array('visibility' => 'on'),
                    )
                ),
                array(
                    'featureType'=>"transit",
                    'stylers' => array(
                        array('saturation' => -100),
                        array('visibility' => 'simplified'),
                    )
                ),
                array(
                    'featureType'=>"administrative.province",
                    'stylers' => array(
                        array('visibility' => 'off'),
                    )
                ),
                array(
                    'featureType'=>"water",
                    'elementType'=>"labels",
                    'stylers' => array(
                        array('saturation' => 40),
                        array('lightness' => -25),
                        array('visibility' => 'on'),
                    )
                ),
                array(
                    'featureType'=>"water",
                    'elementType'=>"geometry",
                    'stylers' => array(
                        array('color' => '#a2daf2'),
                    )
                ),
                array(
                    'featureType'=>"poi.park",
                    'elementType'=>"geometry",
                    'stylers' => array(
                        array('saturation' => 50),
                        array('lightness' => -25),
                        array('hue' => '#bde6ab'),
                    )
                ),
                array(
                    'featureType'=>"poi.medical",
                    'elementType'=>"geometry",
                    'stylers' => array(
                        array('saturation' => 50),
                        array('lightness' => -25),
                        array('color' => '#fbd3da'),
                    )
                ),
                array(
                    'featureType'=>"poi.business",
                    'elementType'=>"all",
                    'stylers' => array(
                        array('visibility' => 'off'),
                    )
                ),
                array(
                    'featureType'=>"landscape.natural.terrain",
                    'elementType'=> "labels",
                    'stylers' => array(
                        array('visibility' => 'off'),
                    )
                ),

            )
        );
    }

}