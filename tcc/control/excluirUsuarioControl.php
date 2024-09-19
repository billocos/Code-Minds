<?php 
    include_once "../model/DTO/UsuarioDTO.php";
    include_once "../model/DAO/UsuarioDAO.php";
    $id_usuario = $_GET["id_usuario"];

    //var_dump($id_usuario);

    $usuarioDAO = new UsuarioDAO();

    $sucesso = $usuarioDAO->excluirUsuario($id_usuario);

    if($sucesso){
        header("Location:../view/listarUsuarios.php");
    }
?>