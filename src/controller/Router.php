<?php
require_once "view/View.php";

class Router {
    private $ctrl;
    private $view;

    public function getRoute(){
        try {
            spl_autoload_register(function($class){
                require_once('model/'.$class.'.php');
            });

            $url='';

            if (isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClasse = "controller".$controller;
                $controllerFile = "controller/".$controllerClasse.".php";

                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClasse($url);
                }else {
                    require_once("view/404.php");
                }
            }else {
                require_once("controller/controllerHome.php");
                $this->ctrl = new controllerHome($url);
            }

        } catch (\Exception $e) {
            // $error = $e->get_Message();
            $this->_view = new View('error');
            require_once('views/error.php');
        }
    }
}