<?php namespace Avirdigital\Courier;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function registerComponents()
    {
        return [
            'Avirdigital\Courier\Components\AddDriverComponent' => 'AddDriver',

        ];
    }

    public function registerSettings()
    {
    }
}
