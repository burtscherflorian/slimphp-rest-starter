<?php
/**
 * Created by PhpStorm.
 * User: florian.b
 * Date: 28.07.2017
 * Time: 09:46
 */

/*
 * Extends from the main Controller
 */

namespace App\Controllers;

class UserController extends Controller
{
    /*
     * Function returns a json http response to the client which made the api call
     */
    public function postGetUser($request, $response){
        return $response->withJson(array('username' => 'burtscherflorian', 'website' => 'https://github.com/burtscherflorian'), 200, JSON_UNESCAPED_UNICODE);
    }
}