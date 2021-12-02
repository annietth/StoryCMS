<?php
class controllerAddArticle{
    public function __construct(){
        $this->addarticle();
    }


    public function addarticle() {
        require_once("view/addarticle.php");
    }
}

?>