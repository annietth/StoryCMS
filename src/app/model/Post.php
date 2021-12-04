<?php

namespace App\model;

class Post extends Model {
    public function all() {
        $sql = $this->bdd->prepare("SELECT * FROM posts");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $auteur){
        $sql = $this->bdd->prepare("INSERT INTO posts (title, content, auteur) VALUES (?, ?, ?)");
        return $sql->execute(array($title, $content, $auteur));
    }

    public function find($id){
        $sql = $this->bdd->prepare("SELECT * FROM posts WHERE id = '$id'");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($title, $content, $ids){
        $sql = $this->bdd->prepare("UPDATE `posts` SET `title`='$title',`content`='$content' WHERE `id` = '$ids'");
        return $sql->execute(array($title, $content, $ids));
    }

    public function delete($id){
        $sql = $this->bdd->prepare("DELETE FROM `posts` WHERE `id` = $id");
        return $sql->execute([$id]);
    }
}
