<?php

class Article {
    private $_id;
    private $_titre;
    private $_contenue;
    private $_auteur;
    private $_date;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
    }

    public function setId($id){
        $this->_id = $id; 
    }

    public function setTitre($titre){
        $this->_titre = $titre; 
    }

    public function setContenue($contenue){
        $this->_contenue = $contenue; 
    }

    public function setImage($image){
        $this->_image = $image; 
    }

    public function setAuteur($auteur){
        $this->_auteur = $auteur; 
    }

    public function setDate($date){
        $this->_date = $date; 
    }


    public function getId(){
        return $this->_id;
    }

    public function getTitre(){
        return $this->_titre; 
    }

    public function getContenue(){
        return $this->_contenue; 
    }

    public function getAuteur(){
        return $this->_auteur; 
    }

    public function getDate(){
        return $this->_date; 
    }

}

?>