<?php namespace Rasyidcode\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents() {
        return [
            'Rasyidcode\Movies\Components\Actors' => 'actors'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets() {
        return [
            'Rasyidcode\Movies\FormWidgets\Actorbox' => [
                'label' => 'Actorbox Field',
                'code' => 'actorbox'
            ]
            ];
    }
}
