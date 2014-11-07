<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/4/2014
 * Time: 11:22 PM
 */

namespace Core;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Helper\MapHelper;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;

class GoogleMap {
    /**
     * @var map
     */
    private $map;

    /**
     * @var mapHelper
     */
    private $mapHelper;

    /**
     * @param Map $map
     * @param MapHelper $mapHelper
     */
    public function __construct(Map $map, MapHelper $mapHelper)
    {
        $this->map = $map;
        $this->mapHelper = $mapHelper;
        $this->init();
    }

    public function init(){
        $this->map->setPrefixJavascriptVariable('map_');
        $this->map->setHtmlContainerId('map_canvas');

        $this->map->setAsync(true);
        $this->map->setAutoZoom(false);

        $this->map->setCenter(21.0249399, 105.8457613, true);
        $this->map->setMapOption('zoom', 14);

        $this->map->setBound(-2.1, -3.9, 2.6, 1.4, true, true);

        $this->map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
        $this->map->setMapOption('mapTypeId', 'roadmap');

        $this->map->setMapOption('disableDefaultUI', true);
        $this->map->setMapOption('disableDoubleClickZoom', true);
        $this->map->setMapOptions(array(
            'disableDefaultUI'       => true,
            'disableDoubleClickZoom' => true,
        ));

        $this->map->setStylesheetOption('width', '100%');
        $this->map->setStylesheetOption('height', '500px');
        $this->map->setStylesheetOptions(array(
            'width'  => '100%',
            'height' => '400px',
        ));

        $this->map->setLanguage('vi');
    }

    /**
     * @param $latitude
     * @param $longitude
     * @param string $urlIcon
     * @throws \Ivory\GoogleMap\Exception\AssetException
     * @throws \Ivory\GoogleMap\Exception\OverlayException
     */
    public function createMarker($latitude, $longitude, $urlIcon = "http://maps.gstatic.com/mapfiles/markers/marker.png"){
        $marker = new Marker();

        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition($latitude, $longitude, true);
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => false,
            'flat'      => true,
        ));
        $marker->setIcon($urlIcon);
        $this->map->addMarker($marker);
    }


    public function render(){
        return $this->mapHelper->render($this->map);
    }


} 