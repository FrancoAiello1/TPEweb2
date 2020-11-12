<?php

class TablaAdminModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_inventarioautos;charset=utf8', 'root', '');
    }

    function GetInventario(){
        $sentencia = $this->db->prepare("SELECT * FROM automotor");
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

    function InsertAuto($modelo,$anio,$kilometraje,$potencia,$peso, $consumo,$detalles, $id_vendedor){
        $sentencia = $this->db->prepare("INSERT INTO automotor(modelo, anio, kilometraje, potencia, peso, consumo,detalles, id_vendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($modelo,$anio,$kilometraje,$potencia,$peso, $consumo,$detalles, $id_vendedor));
    }

    function DeleteAuto($id_auto){
        $sentencia = $this->db->prepare("DELETE FROM automotor WHERE id_auto=?");
        $sentencia->execute(array($id_auto));
    }

    function GetToModify($id_auto){
        $sentencia = $this->db->prepare("SELECT * FROM automotor WHERE id_auto=$id_auto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function ModificarAuto($modelo,$anio,$kilometraje,$potencia,$peso, $consumo,$detalle, $id_vendedor, $id_auto){
        $sentencia = $this->db->prepare("UPDATE automotor SET modelo=?, anio=?, kilometraje=?, potencia=?, peso=?, consumo=?,detalles=?, id_vendedor=?  WHERE id_auto=?");
        $sentencia->execute(array($modelo,$anio,$kilometraje,$potencia,$peso, $consumo,$detalle,$id_vendedor, $id_auto));
    }

    function InsertVendedor($nombre,$edad,$ciudad,$email){
        $sentencia = $this->db->prepare("INSERT INTO vendedor(nombre, edad, ciudad, email) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($nombre,$edad,$ciudad,$email));
    }

    function ModificarVendedor($nombre,$edad,$ciudad,$email, $id_vendedor){
        $sentencia = $this->db->prepare("UPDATE vendedor SET nombre=?, edad=?, ciudad=?, email=? WHERE id_vendedor=?");
        $sentencia->execute(array($nombre,$edad,$ciudad,$email, $id_vendedor));
    }

    function DeleteVendedor($id_vendedor){
        $sentencia = $this->db->prepare("DELETE FROM vendedor WHERE id_vendedor=?");
        $sentencia->execute(array($id_vendedor));
    }
}
?>