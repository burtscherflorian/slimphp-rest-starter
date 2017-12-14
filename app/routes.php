<?php
/**
 * Created by PhpStorm.
 * User: florian.b
 * Date: 14.12.2017
 * Time: 11:07
 */

/*
 * routes.php : This files specifies all api routes to the different controllers
 */

$app->post('/api/user', 'UserController:postGetUser');