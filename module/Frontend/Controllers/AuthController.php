<?php

namespace App\Frontend\Controllers;

use \Roo\Controller;
use \GUMP;

class AuthController extends Controller{
    
    public function login(){
        if(isset($_POST['submit'])){
            $gumpValidation = new GUMP();
            
            $_POST = $gumpValidation->sanitize($_POST);
            
            $gumpValidation->validation_rules(array(
                'username'  => 'required|alpha_numeric|max_len,100|min_len,6',
                'password'  => 'required|max_len,100|min_len,6'
            ));
            
            $gumpValidation->filter_rules(array(
                'username'  => 'trim|sanitize_string',
                'password' => 'trim|md5'
            ));
            
            $validatedData = $gumpValidation->run($_POST);
            
            if($validatedData === false){
                echo $gumpValidation->get_readable_errors(true);
            }else{
                print_r($validatedData); // success
            }
            
            exit();
        }
        $this->render('login.html');
    }
}