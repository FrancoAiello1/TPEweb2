<?php

class UserModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_inventarioautos;charset=utf8', 'root', '');
    }

    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE username=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function NewUser($user,$pw){
        $sentencia = $this->db->prepare("INSERT INTO usuario(username, password, admin) VALUES (?, ?, 0)");
        $sentencia->execute(array($user,$pw));
    }

    function UserTaken($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE username=$user");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}
?>