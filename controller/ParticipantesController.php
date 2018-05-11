<?php 

    include_once ("Connection.php");
    function Listar(){
        $conn= startConnection();

        $stmt = $conn->prepare("SELECT id,nome FROM Usuario");
        $stmt->execute();
        $usuarios = $stmt->fetchAll();

        return $usuarios;
    }
