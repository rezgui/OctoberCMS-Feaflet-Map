<?php

namespace Rezgui\Leafletmap;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'rezgui.leafletmap::lang.plugin.name',
            'description' => 'rezgui.leafletmap::lang.plugin.description',
            'author'      => 'Rezgui',
            'icon'        => 'icon-globe'
        ];
    }

    public function registerComponents()
    {
        return [
            'Rezgui\LeafletMap\Components\LeafletMap' => 'LeafletMap',
        ];
    }

    public function registerSettings()
    {
    }
}
