<?php
class controllerHome {
    public function __construct(){
        $this->home();
    }


    public function home() {
        require_once("view/home.php");
    }
}