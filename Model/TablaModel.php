<?php

class TablaModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_inventarioautos;charset=utf8', 'root', '');
    }

    function GetInventario(){
        $sentencia = $this->db->prepare("SELECT * FROM automotor");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function InsertAutomovil($modelo,$anio,$kilometraje,$potencia,$peso, $consumo){
        $sentencia = $this->db->prepare("INSERT INTO automotor(modelo, anio, kilometraje, potencia, peso, consumo) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($modelo,$anio,$kilometraje,$potencia,$peso, $consumo));
    }

    function DeleteAutoDelModelo($id_auto){
        $sentencia = $this->db->prepare("DELETE FROM automotor WHERE id=?");
        $sentencia->execute(array($id_auto));
    }

    function MarcarAutoComoVendido(id_auto){
        $sentencia = $this->db->prepare("UPDATE automotor SET vendido=1 WHERE id=?");
        $sentencia->execute(array($id_auto));
    }




?>