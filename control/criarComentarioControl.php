<?php 

    include_once "../model/DAO/ComentarioDAO.php";    
    include_once "../model/DTO/ComentarioDTO.php";

    $comentario = $_GET["comentario"];
    $id_tutorial = $_GET["id_tutorial"];
    $id_usuario = $_GET["id_usuario"];

    // var_dump($_GET);

    $comentarioDAO = new ComentarioDAO();
    $comentarioDTO = new ComentarioDTO();

    $comentarioDTO->setComentario($comentario);
    $comentarioDTO->setIdTutorial($id_tutorial);
    $comentarioDTO->setIdUsuario($id_usuario);

    $sucesso = $comentarioDAO->salvarComentario($comentarioDTO);
    
    if($sucesso){
        header("Location: ../view/tutorialCompleto.php?id={$id_tutorial}&status=sucesso");
    }else{
        $msg = "deu erro";
    }
    echo "{$msg}";



?>