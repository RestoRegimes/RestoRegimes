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
use Ivory\GoogleMap\Overlays\Circle;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\InfoWindow;
use Ivory\GoogleMap\Base\Coordinate;
use \Ivory\GoogleMap\Base\Bound;

class CoreHelper
{
    protected $router;

    public function __construct($router) {

        $this->router=$router;
    }

    public function getMapRestaurant($map,$listRestaurants=NULL,$link,$coord=NULL,$radius=NULL){

        $bounds = new Bound();

        $markerImageStandard = new MarkerImage();
        $markerImageUser = new MarkerImage();
        $markerImageGluten = new MarkerImage();
        $markerImageVegetarien = new MarkerImage();
        $markerImageVegetalien = new MarkerImage();
        $markerImageDiabete = new MarkerImage();
        $markerImageCholestherol = new MarkerImage();
        $markerImageMultiple = new MarkerImage();

        // Configure your marker image options
        $markerImageStandard->setPrefixJavascriptVariable('marker_image_standard_');
        $markerImageStandard->setUrl($link."S.png");
        $markerImageStandard->setSize(27, 40, "px", "px");
        $markerImageStandard->setScaledSize(27, 40, "px", "px");

        $markerImageUser->setPrefixJavascriptVariable('marker_image_user_');
        $markerImageUser->setUrl($link."U.png");
        $markerImageUser->setSize(27, 40, "px", "px");
        $markerImageUser->setScaledSize(27, 40, "px", "px");

        $markerImageGluten->setPrefixJavascriptVariable('marker_image_gluten_');
        $markerImageGluten->setUrl($link."G.png");
        $markerImageGluten->setSize(27, 40, "px", "px");
        $markerImageGluten->setScaledSize(27, 40, "px", "px");

        $markerImageDiabete->setPrefixJavascriptVariable('marker_image_diabete_');
        $markerImageDiabete->setUrl($link."D.png");
        $markerImageDiabete->setSize(27, 40, "px", "px");
        $markerImageDiabete->setScaledSize(27, 40, "px", "px");

        $markerImageVegetarien->setPrefixJavascriptVariable('marker_image_vegetarien_');
        $markerImageVegetarien->setUrl($link."V.png");
        $markerImageVegetarien->setSize(27, 40, "px", "px");
        $markerImageVegetarien->setScaledSize(27, 40, "px", "px");

        $markerImageVegetalien->setPrefixJavascriptVariable('mamarkerImage_vegetalien_');
        $markerImageVegetalien->setUrl($link."VL.png");
        $markerImageVegetalien->setSize(27, 40, "px", "px");
        $markerImageVegetalien->setScaledSize(27, 40, "px", "px");

        $markerImageCholestherol->setPrefixJavascriptVariable('mamarkerImage_cholestherol_');
        $markerImageCholestherol->setUrl($link."C.png");
        $markerImageCholestherol->setSize(27, 40, "px", "px");
        $markerImageCholestherol->setScaledSize(27, 40, "px", "px");

        $markerImageMultiple->setPrefixJavascriptVariable('mamarkerImage_multiple_');
        $markerImageMultiple->setUrl($link."+.png");
        $markerImageMultiple->setSize(27, 40, "px", "px");
        $markerImageMultiple->setScaledSize(27, 40, "px", "px");

        foreach($listRestaurants as $restaurant) {
            $infoWindow = new InfoWindow();
            $infoWindow->setPrefixJavascriptVariable('info_window_');
            $infoWindow->setPosition(0, 0, true);
            $infoWindow->setPixelOffset(1.1, 2.1, 'px', 'pt');
            $url=$this->router->generate('rr_restaurant_view',array('id'=>$restaurant->getId()));
            $infoWindow->setContent('<p><h5>'.$restaurant->getNom().'</h5>
                                        <br>'.$restaurant->getTelephone().'
                                        <br>'.$restaurant->getAddress()->getStreet().'
                                        <br>'.$restaurant->getAddress()->getCity().'
                                        <br>'.$restaurant->getAddress()->getZipCode().'<br><br>
                                        <a class="mdl-button mdl-button--raised mdl-button--colored" href="'.$url.'">Infos</a>
                                     </p>');
            $infoWindow->setOpen(false);
            $infoWindow->setAutoOpen(true);
            $infoWindow->setOpenEvent('click');
            $infoWindow->setAutoClose(true);
            $infoWindow->setOptions(array(
                'disableAutoPan' => false,
                'zIndex'         => 10,
            ));
            $marker = new Marker();
            $marker->setInfoWindow($infoWindow);

// Configure your marker options
            $coordinate = new Coordinate($restaurant->getAddress()->getLatitude(), $restaurant->getAddress()->getLongitude());
            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($coordinate, true);
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => true,
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
        if($coord!=null && $radius!=null){
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
            $marker->setIcon($markerImageUser);
            $bounds->extend($marker);
            $map->addMarker($marker);


            $circle = new Circle();

// Configure your circle options
            $circle->setPrefixJavascriptVariable('circle_');
            $circle->setCenter($coord->getLatitude(), $coord->getLongitude(), true);
            $circle->setRadius($radius*1000);

            $circle->setOption('clickable', false);
            $circle->setOptions(array(
                'strokeColor'=> '#FD6601',
                'strokeOpacity'=> 0.6,
                'strokeWeight'=> 4,
                'fillColor'=>'#dadada',
                'fillOpacity'=> 0.2,
                'clickable'    => false
            ));
            $bounds->extend($circle);
            $map->addCircle($circle);
        }
        if(count($map->getMarkers())>1){

            $map->setAutoZoom(true);
            $map->setBound($bounds);
        }
// Configure your zoom control
        $map->setCenter($coordinate);
        return $map;
    }

    public function getSingleRestoMap($map,$link,$restaurant){


        $bounds = new Bound();

        $regimes = $restaurant->getRegimes();

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

        if(is_null($regimes[0])){
            $markerImageStandard = new MarkerImage();
            $markerImageStandard->setPrefixJavascriptVariable('marker_image_standard_');
            $markerImageStandard->setUrl($link."S.png");
            $markerImageStandard->setSize(27, 40, "px", "px");
            $markerImageStandard->setScaledSize(27, 40, "px", "px");
            $marker->setIcon($markerImageStandard);
        }
        else if(count($regimes)>2){
            $markerImageMultiple = new MarkerImage();
            $markerImageMultiple->setPrefixJavascriptVariable('mamarkerImage_multiple_');
            $markerImageMultiple->setUrl($link."+.png");
            $markerImageMultiple->setSize(27, 40, "px", "px");
            $markerImageMultiple->setScaledSize(27, 40, "px", "px");
            $marker->setIcon($markerImageMultiple);
        }
        else{
            switch($regimes[0]->getId()){
                case 1:
                    $markerImageVegetarien = new MarkerImage();
                    $markerImageVegetarien->setPrefixJavascriptVariable('marker_image_vegetarien_');
                    $markerImageVegetarien->setUrl($link."V.png");
                    $markerImageVegetarien->setSize(27, 40, "px", "px");
                    $markerImageVegetarien->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageVegetarien);
                    break;
                case 2:
                    $markerImageVegetalien = new MarkerImage();
                    $markerImageVegetalien->setPrefixJavascriptVariable('mamarkerImage_vegetalien_');
                    $markerImageVegetalien->setUrl($link."VL.png");
                    $markerImageVegetalien->setSize(27, 40, "px", "px");
                    $markerImageVegetalien->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageVegetalien);
                    break;
                case 3:
                    $markerImageGluten = new MarkerImage();
                    $markerImageGluten->setPrefixJavascriptVariable('marker_image_gluten_');
                    $markerImageGluten->setUrl($link."G.png");
                    $markerImageGluten->setSize(27, 40, "px", "px");
                    $markerImageGluten->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageGluten);
                    break;
                case 4:
                    $markerImageDiabete = new MarkerImage();
                    $markerImageDiabete->setPrefixJavascriptVariable('marker_image_diabete_');
                    $markerImageDiabete->setUrl($link."D.png");
                    $markerImageDiabete->setSize(27, 40, "px", "px");
                    $markerImageDiabete->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageDiabete);
                    break;
                case 5:
                    $markerImageCholestherol = new MarkerImage();
                    $markerImageCholestherol->setPrefixJavascriptVariable('mamarkerImage_cholestherol_');
                    $markerImageCholestherol->setUrl($link."C.png");
                    $markerImageCholestherol->setSize(27, 40, "px", "px");
                    $markerImageCholestherol->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageCholestherol);
                    break;
                default :
                    $markerImageStandard = new MarkerImage();
                    $markerImageStandard->setPrefixJavascriptVariable('marker_image_standard_');
                    $markerImageStandard->setUrl($link."S.png");
                    $markerImageStandard->setSize(27, 40, "px", "px");
                    $markerImageStandard->setScaledSize(27, 40, "px", "px");
                    $marker->setIcon($markerImageStandard);
            }

        }

        $bounds->extend($marker);
        $map->addMarker($marker);


        $map->setCenter($coordinate);
        return $map;

    }

}