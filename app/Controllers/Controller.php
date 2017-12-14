<?php
/**
 * Created by PhpStorm.
 * User: florian.b
 * Date: 28.07.2017
 * Time: 09:59
 */

/*
 * Main Controller class which can be used as standard Controller
 */

namespace App\Controllers;

class Controller {
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if($this->container->{$property}) {
            return $this->container->{$property};
        }
    }
}