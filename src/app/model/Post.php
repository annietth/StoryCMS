<?php

namespace App\model;

class Post extends Model
{
    public function all()
    {
        $sql = 'SELECT * FROM posts';
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function paginate($start = 0, $count = 10)
    {
        $sql = "SELECT * FROM posts limit $start, $count";
        $result = mysqli_query($this->conn, $sql);
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function count()
    {
        $sql = 'SELECT * FROM posts';
        $result = mysqli_query($this->conn, $sql);
        return mysqli_num_rows($result);
    }

    public function create($title, $content)
    {
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        return mysqli_query($this->conn, $sql);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM posts where id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function update($title, $content, $id)
    {
        var_dump($title);
        var_dump($content);
        var_dump($id);
        //$sql = "UPDATE posts SET title='$title', content='$content', where id= '$id' ";
        $sql = "UPDATE `posts` SET `title`='$title',`content`='$content' WHERE `id` = '$id'";
        return mysqli_query($this->conn, $sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `posts` WHERE `id` = $id";
        return mysqli_query($this->conn, $sql);
    }
}
