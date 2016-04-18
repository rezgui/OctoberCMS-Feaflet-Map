<?php namespace RedMarlin\LeafletMap\Components;

use Cms\Classes\ComponentBase;
use Flash;

class LeafletMap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'redmarlin.leafletmap::lang.components.leafletmap.name',
            'description' => 'redmarlin.leafletmap::lang.components.leafletmap.description'
        ];
    }
  	public function defineProperties()
    {
        return [
            'coords' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.coords.title',
                'description'		=> 'redmarlin.leafletmap::lang.components.leafletmap.coords.name',
                'type'              => 'string',
                'default'			=> '51.505, -0.09'
            ],
            'zoom' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.zoom.title',
                'type'              => 'string',
                'description'		=> 'redmarlin.leafletmap::lang.components.leafletmap.zoom.description',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'redmarlin.leafletmap::lang.components.leafletmap.zoom.validationMessage',
                'default'			=> '12'
            ],
            'markerCoords' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.markerCoords.title',
                'description'       => 'redmarlin.leafletmap::lang.components.leafletmap.markerCoords.description',
                'type'              => 'string',
            ],
            'width' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.width.title',
                'description'       => 'redmarlin.leafletmap::lang.components.leafletmap.width.description',
                'type'              => 'string',
                'validationPattern' => '^[0-9,%,px]+$',
                'validationMessage' => 'redmarlin.leafletmap::lang.components.leafletmap.width.validationmessage',
                'default'           => '100%',
            ],
            'height' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.height.title',
                'description'       => 'redmarlin.leafletmap::lang.components.leafletmap.height.description',
                'type'              => 'string',
                'validationPattern' => '^[0-9,%,px]+$',
                'validationMessage' => 'redmarlin.leafletmap::lang.components.leafletmap.height.validationmessage',
                'default'           => '350px',
            ],
            'markerText' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.markerText.title',
                'description'       => 'redmarlin.leafletmap::lang.components.leafletmap.markerText.description',
                'default'           => 'redmarlin.leafletmap::lang.components.leafletmap.markerText.default',
                'type'              => 'text'
            ],
            'scrollProtection' => [
                'title'             => 'redmarlin.leafletmap::lang.components.leafletmap.scrollProtection.title',
                'description'       => 'redmarlin.leafletmap::lang.components.leafletmap.scrollProtection.description',
                'type'              => 'checkbox'
            ]            
        ];
    }
  	public function onRun()
  	{
    	$this->addCss('http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css');
        $this->addCss('/plugins/redmarlin/leafletmap/assets/css/style.css');
   	}

}
