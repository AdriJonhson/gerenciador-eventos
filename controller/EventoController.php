<?php
    session_start();

    include_once 'Connection.php';

    $acao  = filter_input(INPUT_POST,'acao');

    $con  = startConnection();

    if($acao == null){
        header("Location:../index.php");
    }

    switch($acao){

        case "compra":

            //Cadastrar o usuário no banco
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');

            $stmt = $con->prepare("INSERT INTO Usuario(nome, email, telefone) VALUES(?, ?, ?)");
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $telefone);

            $_SESSION['usuario']['nome'] = $nome;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['usuario']['telefone'] = $telefone;
                        

            if($stmt->execute())
                $_SESSION['msg_success'] = "Ingresso reservado com sucesso";
            else
                $_SESSION['msg_error'] = "Erro ao fazer a reserva";
                
            header("Location: ../views/Bilhete.php");

        break;

        case "print":
            unset($_SESSION['usuario']);
            header("Location: ../index.php");
        break;


    }