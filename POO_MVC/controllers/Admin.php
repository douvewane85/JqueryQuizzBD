<?php
class Admin extends Controller{

    function __construct(){
        $this->folder_view="admin";
        $this->layout="default";

    }

    function loadPage(){
        $this->layout="ajax";
        $this->view=func_get_arg(0)[2];
        $this->render();

    }

    
}



