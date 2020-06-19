<?php
   
   define("URL_ASSETS","http://localhost/SNTACAD/POO_MVC/assets");
   define("URL_ROOT","http://localhost/SNTACAD/POO_MVC");
  require_once('./libs/Router.php');
   $router=new Router();
   //controller/methode=>UC
   $router->getRoute();
   /*
   $sec=new Security();
   $sec->showPage();
   $obj->{$method}()
   */
?>