<?php

namespace Rezgui\LeafletMap\Components;

use Cms\Classes\ComponentBase;
use Flash;

class LeafletMap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'rezgui.leafletmap::lang.components.leafletmap.name',
            'description' => 'rezgui.leafletmap::lang.components.leafletmap.description'
        ];
    }
    public function defineProperties()
    {
        return [
            'coords' => [
                'title'             => 'rezgui.leafletmap::lang.components.leafletmap.coords.title',
                'description'        => 'rezgui.leafletmap::lang.components.leafletmap.coords.name',
                'type'              => 'string',
                'default'            => '51.505, -0.09'
            ],
            'zoom' => [
                'title'             => 'rezgui.leafletmap::lang.components.leafletmap.zoom.title',
                'type'              => 'string',
                'description'        => 'rezgui.leafletmap::lang.components.leafletmap.zoom.description',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'rezgui.leafletmap::lang.components.leafletmap.zoom.validationMessage',
                'default'            => '12'
            ],
            'markerCoords' => [
                'title'             => 'rezgui.leafletmap::lang.components.leafletmap.markerCoords.title',
                'description'       => 'rezgui.leafletmap::lang.components.leafletmap.markerCoords.description',
                'type'              => 'string',
            ],
            'markerText' => [
                'title'             => 'rezgui.leafletmap::lang.components.leafletmap.markerText.title',
                'description'       => 'rezgui.leafletmap::lang.components.leafletmap.markerText.description',
                'default'           => 'rezgui.leafletmap::lang.components.leafletmap.markerText.default',
                'type'              => 'string'
            ],
            'scrollProtection' => [
                'title'             => 'rezgui.leafletmap::lang.components.leafletmap.scrollProtection.title',
                'description'       => 'rezgui.leafletmap::lang.components.leafletmap.scrollProtection.description',
                'default'           => 'false',
                'type'              => 'dropdown',
                'options'           => [
                    "false" => "rezgui.leafletmap::lang.components.leafletmap.scrollProtection.controlson",
                    "true" => "rezgui.leafletmap::lang.components.leafletmap.scrollProtection.controlsoff"
                ]
            ]
        ];
    }
    public function onRun()
    {
        $this->addCss('/plugins/rezgui/leafletmap/assets/css/leaflet.css');
    }
}
