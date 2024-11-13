<?php 

    include_once '../model/DAO/ComentarioDAO.php';
    include_once '../model/DTO/ComentarioDTO.php';

    $comentarioDAO = new ComentarioDAO();
    $id_tutorial = $_GET["id"];
    $comentarios = $comentarioDAO->listarComentarios($id_tutorial);

    










?>