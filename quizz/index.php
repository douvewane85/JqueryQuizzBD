<?php
 define("BASE_ROOT","http://localhost/SNTACAD/quizz/");
  require_once "./lib/Router.php";
  $router=new Router();
  $router->getRoute();

//Definition  des Constantes








/*require_once "./models/IQuizz.php";
require_once "./models/User.php";
require_once "./models/Joueur.php";
require_once "./models/Admin.php";*/
    //Construction
   /* $user=new User();
    $user->setId(1);
    $user->setLogin("douve");
    $user->setPassword("wane");
    $user->setProfil("joueur");
    var_dump($user);
    echo "ID: ".$user->getId();
    echo " Login: ".$user->getLogin();
    echo " Password : ".$user->getPassword();
    echo " Profil : ".$user->getProfil();*/

  /*  $jouer1=new Joueur();
    $jouer1->hydrate([
        "id"=>1,
        "login"=>"douve",
        "password"=>"wane",
        "profil"=>"joueur",
    ]);
   $jouer1->setId(1);
    $jouer1->setLogin("douve");
    $jouer1->setPassword("wane");
    $jouer1->setProfil("Admin");
    var_dump($jouer1);
    echo "ID: ".$jouer1->getId();
    echo " Login: ".$jouer1->getLogin();
    echo " Password : ".$jouer1->getPassword();
    echo " Profil : ".$jouer1->getProfil();

    $admin=new Admin([
        "id"=>1,
        "login"=>"douve",
        "password"=>"wane",
        "profil"=>"admin",
    ]);
    $admin->setId(1)
          ->setLogin("douve")
          ->setPassword("wane")
          ->setProfil("Admin");
    var_dump($admin);
    echo "ID: ".$admin->getId();
    echo " Login: ".$admin->getLogin();
    echo " Password : ".$admin->getPassword();
    echo " Profil : ". $admin->getProfil()
     */    



?>