<?php
class Joueur extends User{

   

    public function __construct($row=null){
        
        if($row!=null){
            $this->hydrate($row);
        }
        $this->profil="joueur";
    }

    public function setProfil($profil){
        return $this;
    }

   

   
    
}