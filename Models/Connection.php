<?php

namespace App\Models;


class Connection
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function get(){
        if(!self::$instance) {
            $conn = mysqli_connect('localhost', 'root', 'Secret@123', 'fashion') or die('Connection failed');
            self::$instance = $conn;
        }
        return self::$instance;
    }
}