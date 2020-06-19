<?php
 require_once ('./controllers/ErrorController.php');
class Router{

    private $ctrl;
    function __construct(){
       
        $this->ctrl= new ErrorController();
    }

        public function getRoute(){
            try{
                
                spl_autoload_register(function ($class) {
                    $pathLibs = "./lib/".$class.".php";
                    $pathModels = "./models/".$class.".php";
                
                    if (file_exists($pathLibs)) {
                        require  $pathLibs; 
                    }elseif(file_exists($pathModels )){
                    require  $pathModels; 
                    } 
                });
            

                if(isset($_GET['url'])){
                    $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                    $controller=ucfirst(strtolower($url[0]))."Controller";
                    $pathControlers = "./controllers/". $controller.".php";
                    if(file_exists($pathControlers)){
                        require_once($pathControlers);
                        $this->ctrl=new $controller();
                            if(isset($url[1])){

                                if(method_exists($this->ctrl,$url[1])){
                                    $action=$url[1];
                                    unset($url[0]);
                                    unset($url[1]);
                                    $this->ctrl->{$action}($url);
                                   }else{
                                    
                                    $this->ctrl->showError("Cette Page n'existe pas");
                                   }
                            }else{
                                $this->ctrl->index();
                              }
                        
                    }else{

                        $this->ctrl->showError("Le Controller ".$url[0]."  n'existe Pas");
                    }
                
                }else{
                    $pathControlers = "./controllers/SecurityController.php";
                    require_once($pathControlers);
                    $this->ctrl= new SecurityController();
                    $this->ctrl->index();
                }
            }
            catch(Exception $ex){
                $this->ctrl->showError($ex->getMessage());
            }

        }
            

}