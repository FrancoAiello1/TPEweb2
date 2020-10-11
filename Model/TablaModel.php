<?php

class TablaModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_inventarioautos;charset=utf8', 'root', '');
    }

    function GetInventario(){
        $sentencia = $this->db->prepare("SELECT * FROM automotor a, vendedor v WHERE a.id_vendedor=v.id_vendedor");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetVendedores(){
        $sentencia = $this->db->prepare("SELECT * FROM vendedor");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetAutosVendedor($id_vendedor){
        $sentencia = $this->db->prepare("SELECT * FROM automotor WHERE id_vendedor=$id_vendedor");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetAuto($id_auto){
        $sentencia = $this->db->prepare("SELECT * FROM automotor WHERE id_auto=$id_auto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
?>