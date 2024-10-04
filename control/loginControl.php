<?php


    include_once "../model/DTO/UsuarioDTO.php";
    include_once "../model/DAO/UsuarioDAO.php";

    session_start();


    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // var_dump($_POST);


    $usuarioDAO = new UsuarioDAO();
    $logado = $usuarioDAO->validarLogin($email,$senha);
    if($logado){
        header("Location:../view/inicio.php");
        $_SESSION["id_usuario"] = $logado["id_usuario"];
        $_SESSION["nome"] = $logado["nome"];
    }else{
        header("Location:../view/login.php?msg=email ou senha invalidos");
    }
?>