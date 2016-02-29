<?php namespace RedMarlin\Leafletmap;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Leaflet Map',
            'description' => 'Show Location Map using LeafLet and OpenStreetMaps',
            'author'      => 'RedMarlin',
            'icon'        => 'icon-globe'
        ];
    }

    public function registerComponents(){
    return [
            'RedMarlin\LeafletMap\Components\LeafletMap' => 'LeafletMap',
    ];
    }

    public function registerSettings()
    {
    }
}
