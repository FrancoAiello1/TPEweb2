<?php

class CommentModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_inventarioautos;charset=utf8', 'root', '');
        
    }

    function getAllComments(){
        $sentencia = $this->db->prepare("SELECT * FROM comentario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function get($id)
    {
        $sentencia = $this->db->prepare("SELECT comentario.id, comentario.comentario, comentario.puntaje, automotor.id_auto, usuario.username FROM comentario JOIN automotor JOIN usuario ON comentario.id_usuario = usuario.id AND comentario.id_auto = automotor.id_auto WHERE automotor.id_auto = ?");
        $sentencia->execute((array($id)));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteComment($id)
    {
        $sentencia = $this->db->prepare('DELETE FROM comentario WHERE id = ?');
        $sentencia->execute((array($id)));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function selectComment($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id = ?");
        $sentencia->execute((array($id)));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function insertComment($comentario, $puntaje, $id_usuario, $id_auto)
    {
        $sentencia = $this->db->prepare('INSERT INTO comentario (comentario, puntaje, id_usuario, id_auto) VALUES (?,?,?,?)');
        return $sentencia->execute([$comentario, $puntaje, $id_usuario, $id_auto]);
    }
}
