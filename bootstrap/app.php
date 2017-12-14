<?php
/**
 * Created by PhpStorm.
 * User: florian.b
 * Date: 14.12.2017
 * Time: 11:08
 */

/*
 * app.php : This file bootstraps the Slim 3 application together
 */

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App();

$container = $app->getContainer();

$container['UserController'] = function ($container){
    return new \App\Controllers\UserController($container);
};

require __DIR__ . '/../app/routes.php';