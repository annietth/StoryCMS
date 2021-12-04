<?php

namespace App\model;

class User extends Model{
    public function allUser(){
        $sql = $this->bdd->prepare("SELECT * FROM users");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($name, $email, $password){
        $sql = $this->bdd->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 0)");
        return $sql->execute(array($name, $email, $password));
    }

    public function delete($id){
        $sql = $this->bdd->prepare("DELETE FROM `users` WHERE `id` = $id");
        return $sql->execute([$id]);
    }

    public function login($email, $password){
        $sql = $this->bdd->prepare("SELECT * FROM `users` WHERE `email` = ? AND `password` = ?");
        $sql->execute([$email, $password]);
        $userexiste = $sql->rowCount();
        if ($userexiste == 1) {
            return $sql->fetch();
        }else {
            echo "info pas corect";
        }
        
    }

    public function logout(){
        $_SESSION = array();
        return session_destroy();
    }

    public function getNameUser($nameuser){
        $sql = $this->bdd->prepare("SELECT * FROM users WHERE `name` = $nameuser");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
}