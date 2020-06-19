<?php

class Validator{

   //Attributs 
    private $errors=[];

    //Getters
    public function getErrors(){
        return $this->errors;
    }


    public function isValid(){
        return count($this->errors)===0;
    }


   public  function isVide($nbre,$key,$sms="Le champ est Obligatoire"){
        if(empty($nbre)){
            $this->errors[$key]=$sms;
        }
           
     }

    public function isEgal($val1,$val2,$key,$sms="Les Valeurs ne sont pas identiques"){
        if($val1!=$val2){
            $this->errors[$key]=$sms;
        }
    }
}

?>