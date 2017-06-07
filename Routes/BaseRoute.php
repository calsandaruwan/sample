<?php

namespace App\Routes;
include_once('Controllers/AuthController.php');
use App\Controllers\AuthController as Auth;


class BaseRoute
{
    public function __construct()
    {
        $auth = new Auth();
        if(!$auth->authenticate()){
            $auth->login();
        }else {
            $this->Route();
        }
    }

    public function Route(){
        $segments =  $this->getSegments();

        //instantiate controller mentioned in the segment c
        //call method mentioned in the segment a
        include_once('Controllers/'.$segments['c'].'Controller.php');
        $controller =  'App\Controllers\\'.$segments['c'].'Controller';
        $obj = new $controller();
        $obj->{$segments['a']}();


    }

    public function getSegments(){
        //set default segment data
        $segments = [
          'c'=>'Article',
          'a'=>'index'
        ];

        if(isset($_GET['c'])&&isset($_GET['a'])){
            $segments['c'] = ucfirst($_GET['c']);
            $segments['a'] = $_GET['a'];
        }

        return $segments;
    }
}