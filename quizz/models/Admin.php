<?php
class Admin extends User{

    public function __construct($row=null){
      
        if($row!=null){
            $this->hydrate($row);
        }
        $this->profil="admin";
        
    }

    public function setProfil($profil){
        return $this;
    }

}