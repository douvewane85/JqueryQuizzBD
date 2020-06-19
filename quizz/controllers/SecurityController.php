<?php

class SecurityController extends Controller{
    function __construct(){
        $this->folder_view="security";
        $this->layout="default";
        $this->validator=new Validator();
        $this->manager=new CompteManager();
        session_start();
    }
   

    public function showError($errorMsg){
        die($errorMsg);
    }
    public function index(){
        $this->view="connexion";
        $this->render();
    }

    public  function view(){
        $args=func_get_args()[0];
        $views=$args[2];
        $this->view=$views;
        $this->layout=null;
        $this->render();
    }

    public function inscription(){
       
     }

     
    public function connexion(){
        
        if(isset($_POST['login'])){
            //Au clique du bouton de connexion
          
             //Validation des données saisies
             //Extraire les données d'un tableau associatif =>extract($tab_associatif)
             //$_POST['login']   remplacer $login
             //$_POST['password'] remplacer $password 
                extract($_POST);
              $this->validator->isVide($login,'login',"Login Obligatoire");
              $this->validator->isVide($password,'password',"Mot de Passe  Obligatoire");
              if($this->validator->isValid()){

              $compte= $this->manager->getUserByLoginPwd($login,$password);
            //  var_dump($compte);
              if($compte!=null){
                  //Compte Existe
                  $result=[
                    "status"=>"succes",
                    "data"=>$compte
                  ];
                  $_SESSION['userConnect']=$compte;
                    
                 /*if($compte->getProfil()==="joueur"){
                         echo "jeux";
                 }else{
                       
                         echo "admin";
                 }*/
              }else{
                    //Login ou Mot de passe Incorrect
                    $result=[
                        "status"=>"error",
                        "data"=>"Login ou Mot de passe Incorrect"
                      ];

              }
           }else{
               $errors=$this->validator->getErrors();
               $result=[
                "status"=>"error",
                "data"=> $errors
              ];
              
           }
       }else{
           //Actualisation de Page
           echo "Actualisation";
       }
      
     }

     public function logout(){
        $args=func_get_args();
        var_dump($args);
     }




}