<?php
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $titulo = $_POST["nome"];
    $conteudo = $_POST["tutorial"];
    $descricao = $_POST["descricao"];

    $tutorialDTO =  new TutorialDTO();
    $tutorialDAO =  new TutorialDAO();

    $tutorialDTO->setTitulo($titulo);
    $tutorialDTO->setConteudo($conteudo);
    $tutorialDTO->setDescricao($descricao);


    $sucesso = $tutorialDAO->salvarTutorial($tutorialDTO);

    // var_dump($sucesso);

    if($sucesso){
        header("Location:../view/inicio.php");
    }else{
        $msg = "deu erro";
    }
    echo "{$msg}";
    // var_dump($_POST);

?>