<?php 
    include_once "../model/DTO/UsuarioDTO.php";
    include_once "../model/DAO/UsuarioDAO.php";

    $usuarioDAO = new UsuarioDAO ();

    $todos = $usuarioDAO->listarUsuarios();

    echo "<pre>";
    var_dump($todos);


?>