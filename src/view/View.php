<?php
class View {
    private $viewFile;
    private $titlePage;

    public function __construct($action){
        $this->viewFile = "view/".$action.".php";
    }

    public function generate($data){
        //vieaw a envoyer
        $content = $this->generateFile($this->viewFile, $data);


        $view = $this->generateFile('template/header.php', array('t'=> $this->titlePage, 'content' => $content));
    }

    public function generateFile($viewFile,$data){
        if (file_exists($viewFile)) {
            var_dump($data);
            extract($data);
            ob_start();
            require $viewFile;
            return ob_get_clean();
        } else {
            echo "page introuvable";
        }
        
    }

}


?>