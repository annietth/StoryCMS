<?php
require_once "view/View.php";
class controllerArticle {
    private $_articleManager;

    public function __construct(){
        $this->article();
    }
    
    public function article() {
        $this->_articleManager = new articleManager();
        $articles = $this->_articleManager->getArticles();
        $this->_view = new View('article');
        $this->_view->generate(array('title'=>'tt','articles'=>$articles));
        
        //require_once("view/article.php");
    }
}