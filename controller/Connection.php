<?php 

    function startConnection()
    {
        $con = new PDO("mysql:host=localhost;dbname=db_eventos", "root", "");
        return $con;
    }

