<?php

namespace App\Controller;

use App\model\User;

class UsersController {
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index(){
        $title = 'All users';
        $users = $this->user->allUser();
        return view('users/allusers', compact('title', 'users'));
    }

    public function create()
    {
        $title = 'Create users';

        return view('users/create', compact('title'));
    }

    public function createUsers(){
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($name && $email && $password) {
            $result = $this->user->create($name , $email , $password);

            if ($result) {
                session_set('success', 'Post created.');
                return redirect('users');
            }
        }
        return redirect('users/create');
    }

    public function delete($id){
        $result = $this->user->delete($id);

        if ($result) {
            session_set('success', 'users deleted.');
            return redirect('users');
        }
        return redirect('users');
    }

    public function login(){
        $title = 'Login';

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($email) && !empty($password)) {
                $result = $this->user->login($email,$password);
                if ($result != null) {
                    $_SESSION["id"] = $result["id"];
                    $_SESSION["name"] = $result["name"];
                    $_SESSION["email"] = $result["email"];
                    $_SESSION["password"] = $result["password"];
                    $_SESSION["role"] = $result["role"];
                    return header('Location: /public/');

                }
            }else {
                echo "manque des info";
            }
        }
        return view('users/login', compact('title'));
    }

    public function logout(){
        $logout = $this->user->logout();
        return header('Location: /public/');
    }

    public function getNameUser($nameuser){
        $infouser = $this->user->getNameUser($nameuser);
        return session_set('namelog','infouser');
    }
}