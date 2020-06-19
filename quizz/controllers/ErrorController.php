<?php

class ErrorController{

    public function __construct(){
     
    }

    public function showError($errorMsg){
        die($errorMsg);
    }
}