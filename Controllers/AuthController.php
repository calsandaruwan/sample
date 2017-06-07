<?php
/**
 * Created by PhpStorm.
 * User: cal
 * Date: 6/4/17
 * Time: 3:06 PM
 */

namespace App\Controllers;


class AuthController
{
    public function __construct()
    {
        session_start();
    }

    public function authenticate(){
        if(isset($_SESSION["auth"]) &&$_SESSION["auth"] == true){
            return true;
        }
        return false;
    }

    public function login(){
        $title = 'Login';
        $message = 'Please login to continue';
        if(isset($_POST['submit'])){
            echo 'asd';
            $input =$_POST['post'];
            if(isset($input['email'])&&isset($input['password'])&&$input['email']='admin@admin.com'&&$input['password']='a'){
                $_SESSION["auth"] = true;
                header('Location: '.'http://mvcapp.dev/cal2?c=Item&a=lists');
            }
        }
        include_once('Views/Login.php');
    }
}