<?php 
namespace App\model;

class Model
{
    protected $bdd;
    
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        try {
            $this->bdd = new \PDO('mysql:host=db;dbname=mvc2;charset=utf8', 'root', 'root', array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
            ));
        } catch (\PDOExeption $e) {
            echo "DB pas co";
        }
    }
}