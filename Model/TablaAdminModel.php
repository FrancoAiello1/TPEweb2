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

    function GetUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario");
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

    function DeleteUser($id){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($id));
    }

    function RemoveAdmin($id){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=0 WHERE id=?");
        $sentencia->execute(array($id));
    }

    function getIfAdmin($username){
        $sentencia = $this->db->prepare("SELECT admin FROM usuario WHERE username='".$username."'");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function AddAdmin($id){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=1 WHERE id=?");
        $sentencia->execute(array($id));
    }

    function GetToModify($id_auto){
        $sentencia = $this->db->prepare("SELECT * FROM automotor WHERE id_auto=$id_auto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetToModifyV($id_vend){
        $sentencia = $this->db->prepare("SELECT * FROM vendedor WHERE id_vendedor=$id_vend");
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