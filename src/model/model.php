<?php
class model {
    private static $_bdd;

    //connexion a la bdd
    private static function setBdd(){
      self::$_bdd = new PDO('mysql:host=localhost;dbname=projetmvc;charset=utf8', 'root', '');
      //on utilise les constantes de PDO pour gérer les erreurs
      self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
  
    //fonction de connexion par defaut a la bdd
    protected function getBdd(){
      if (self::$_bdd == null) {
        self::setBdd();
        return self::$_bdd;
      }
    }

    protected function getAll($table, $obj){
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
          $var[] = new $obj($data);
        }
    
        return $var;
        $req->closeCursor();
    }

    

}

?>