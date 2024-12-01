<?php

require_once "../model/DTO/TutorialDTO.php";

require_once "../model/DAO/TutorialDAO.php";


$titulo = $_POST["titulo"];
$conteudo = $_POST["tutorial"];
$id_tutorial = $_POST["id_tutorial"];
$descricao = $_POST["descricao"];
$id_usuario = $_POST["id_usuario"];

//  var_dump($_POST);

$tutorialDTO = new TutorialDTO();

$tutorialDTO->setId($id_tutorial);
$tutorialDTO->setTitulo($titulo);
$tutorialDTO->setConteudo($conteudo);
$tutorialDTO->setDescricao($descricao);
$tutorialDTO->setIdUsuario($id_usuario);



// var_dump($usuarioDTO); 

$tutorialDAO = new TutorialDAO();

$sucesso = $tutorialDAO->alterarTutorial($tutorialDTO);
// var_dump($usuarioDTO);

if ($sucesso) {
    header("Location: ../view/tutoriaisProfessor.php?status=sucesso");
}else{
    echo "erro";
}