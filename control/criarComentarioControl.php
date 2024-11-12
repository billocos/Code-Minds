<?php 

    include_once "../model/DAO/ComentarioDAO.php";    
    include_once "../model/DTO/ComentarioDTO.php";

    $comentario = $_POST["comentario"];

    $comentarioDAO = new ComentarioDAO();
    $comentarioDTO = new ComentarioDTO();

    $comentarioDTO->setComentario($comentario);

    $sucesso = $comentarioDAO->salvarComentario($comentarioDTO);
    
    if($sucesso){
        $msg = "suxesso";
    }else{
        $msg = "deu erro";
    }
    echo "{$msg}";



?>