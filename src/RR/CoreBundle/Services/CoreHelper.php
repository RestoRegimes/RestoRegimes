<?php
/**
 * Created by PhpStorm.
 * User: lfbac
 * Date: 27/12/2015
 * Time: 22:53
 */

namespace RR\CoreBundle\Services;


use Ivory\GoogleMap\Overlays\MarkerImage;
use RR\RestaurantBundle\Entity\RegimeRestaurant;
use Ivory\GoogleMapBundle\Model\Map;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Base\Coordinate;
use \Ivory\GoogleMap\Base\Bound;

class CoreHelper
{

    public function getMapRestaurant($map,$listRestaurants,$link,$coord=NULL){

        $bounds = new Bound();

        $markerImageStandard = new MarkerImage();
        $markerImageGluten = new MarkerImage();
        $markerImageVegetarien = new MarkerImage();
        $markerImageVegetalien = new MarkerImage();
        $markerImageDiabete = new MarkerImage();
        $markerImageCholestherol = new MarkerImage();
        $markerImageMultiple = new MarkerImage();

        // Configure your marker image options
        $markerImageStandard->setPrefixJavascriptVariable('marker_image_standard_');
        $markerImageStandard->setUrl($link."S.png");
        $markerImageStandard->setSize(34, 34, "px", "px");
        $markerImageStandard->setScaledSize(34, 34, "px", "px");

        $markerImageGluten->setPrefixJavascriptVariable('marker_image_gluten_');
        $markerImageGluten->setUrl($link."G.png");
        $markerImageGluten->setSize(34, 34, "px", "px");
        $markerImageGluten->setScaledSize(34, 34, "px", "px");

        $markerImageDiabete->setPrefixJavascriptVariable('marker_image_diabete_');
        $markerImageDiabete->setUrl($link."D.png");
        $markerImageDiabete->setSize(34, 34, "px", "px");
        $markerImageDiabete->setScaledSize(34, 34, "px", "px");

        $markerImageVegetarien->setPrefixJavascriptVariable('marker_image_vegetarien_');
        $markerImageVegetarien->setUrl($link."V.png");
        $markerImageVegetarien->setSize(34, 34, "px", "px");
        $markerImageVegetarien->setScaledSize(34, 34, "px", "px");

        $markerImageVegetalien->setPrefixJavascriptVariable('mamarkerImage_vegetalien_');
        $markerImageVegetalien->setUrl($link."VL.png");
        $markerImageVegetalien->setSize(34, 34, "px", "px");
        $markerImageVegetalien->setScaledSize(34, 34, "px", "px");

        $markerImageCholestherol->setPrefixJavascriptVariable('mamarkerImage_cholestherol_');
        $markerImageCholestherol->setUrl($link."C.png");
        $markerImageCholestherol->setSize(34, 34, "px", "px");
        $markerImageCholestherol->setScaledSize(34, 34, "px", "px");

        $markerImageMultiple->setPrefixJavascriptVariable('mamarkerImage_multiple_');
        $markerImageMultiple->setUrl($link."+.png");
        $markerImageMultiple->setSize(34, 34, "px", "px");
        $markerImageMultiple->setScaledSize(34, 34, "px", "px");

        foreach($listRestaurants as $restaurant) {
            $marker = new Marker();

// Configure your marker options
            $coordinate = new Coordinate($restaurant->getAddress()->getLatitude(), $restaurant->getAddress()->getLongitude());
            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($coordinate, true);
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => false,
                'flat' => true,
            ));
            $regimes = $restaurant->getRegimes();

            if(is_null($regimes[0]))$marker->setIcon($markerImageStandard);
            else if(count($regimes)>2)$marker->setIcon($markerImageMultiple);
            else{
                switch($regimes[0]->getId()){
                    case 1: $marker->setIcon($markerImageVegetarien);
                        break;
                    case 2: $marker->setIcon($markerImageVegetalien);
                        break;
                    case 3: $marker->setIcon($markerImageGluten);
                        break;
                    case 4: $marker->setIcon($markerImageDiabete);
                        break;
                    case 5: $marker->setIcon($markerImageCholestherol);
                        break;
                    default : $marker->setIcon($markerImageStandard);
                }

            }



            $bounds->extend($marker);
            $map->addMarker($marker);
        }
        if($coord!=null){
            $marker = new Marker();

// Configure your marker options
            $coordinate = new Coordinate($coord->getLatitude(), $coord->getLongitude());
            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($coordinate, true);
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => false,
                'flat' => true,
            ));
            $marker->setIcon($markerImageStandard);
            $bounds->extend($marker);
            $map->addMarker($marker);
        }
        if(count($map->getMarkers())>1){
            $map->setAutoZoom(true);
            $map->setBound($bounds);
        }
// Configure your zoom control

        $map->setCenter($coordinate);
        return $map;
    }


}