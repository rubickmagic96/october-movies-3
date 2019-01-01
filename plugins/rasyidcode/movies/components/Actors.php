<?php

namespace Rasyidcode\Movies\Components;

use Cms\Classes\ComponentBase;
use Rasyidcode\Movies\Models\Actor;

class Actors extends ComponentBase {

    public function componentDetails() {
        return [
            'name' => 'Actor List',
            'description' => 'List of Actors'
        ];
    }

    public function onRun() {
        $this->actors = $this->loadActors();
    }

    protected function loadActors() {
        return Actor::all();
    }

    public $actors;
}