<?php

class User implements IQuizz{
    //Attributs
    protected $id;
    protected $login;
    protected $password;
    protected $profil;
    protected  $fullName;

   public  function __contruct($row=null){
       echo 1;
        if($row!=null){
          $this->hydrate($row);
        }
    }
    //Getters and Setters
    public function getId() {
        return $this->id;
   }

   public function getProfil(){
       return $this->profil;
   }
   public function getLogin() {
    return $this->id;
  }
  public function getPassword() {
    return $this->password;
  }

  public function setId($id) {
      $this->id=$id;
      return $this;

}

public function setProfil($profil){
    $this->profil=$profil;
    return $this;
}
public function setLogin($login) {
   $this->login=$login;
   return $this;
}

public function setPassword($password) {
    $this->password=$password;
    return $this;
  }

  public function hydrate($row){
      var_dump($row);
    $this->id=$row["id"];
    $this->profil=$row["profil"];
    $this->login=$row["login"];
    $this->password=$row["password"];
    return $this;
  }

  




    

}