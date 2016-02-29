<?php namespace RedMarlin\LeafletMap\Components;

use Cms\Classes\ComponentBase;
use Flash;

class LeafletMap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Leaflet Map',
            'description' => 'Displays OpenstreetMap and lets you mark one location'
        ];
    }
  	public function defineProperties()
    {
        return [
            'coords' => [
                'title'             => 'Map Coordinates',
                'description'		=> 'Map center latitude and longitude, comma separated',
                'type'              => 'string',
                'default'			=> '51.505, -0.09'
            ],
            'zoom' => [
                'title'             => 'Zoom',
                'type'              => 'string',
                'description'		=> 'Zoom value from 0-18',
                 'validationPattern' => '^[0-9]+$',
                 'validationMessage' => 'The Zoom property can contain only numeric symbols',
                 'default'			=> '12'
            ],
            'markerCoords' => [
                'title'             => 'Marker Coordinates',
                'description'       => 'Marker Longitude and latitude comma separated. If left empty no marker will be shown',
                'type'              => 'string',
            ],
            'markerText' => [
                'title'             => 'Marker text',
                'description'       => 'Show defined text on the marker',
                'default'           => 'Your marker description here',
                'type'              => 'text'
            ]
            
        ];
  }
  	public function onRun()
  	{
    	$this->addCss('/plugins/redmarlin/leafletmap/assets/css/leaflet.css');
   	}



}
