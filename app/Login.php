<?php

namespace App;
class Login extends Koneksi{
    public function __construct(){
        Parent::__construct();
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function setPassword($password){
        return $this->password = $password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function proses(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
        $stmt = $this->db->prepare($sql);   

        $stmt->execute();
        $row = $stmt->fetch();

        if(!empty($row)){
            $_SESSION['username'] = $row['username'];
            return header('location: layouts/index.php');
        }else{
            return header('location: layouts/auth.php');
        }
    }

    public function logout(){
        session_destroy();
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        return header('location: ../index.php');
    }
}