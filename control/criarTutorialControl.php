<?php
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $titulo = $_POST["nome"];
    $conteudo = $_POST["tutorial"];

    $tutorialDTO =  new TutorialDTO();
    $tutorialDAO =  new TutorialDAO();

    $tutorialDTO->setTitulo($titulo);
    $tutorialDTO->setConteudo($conteudo);

    $sucesso = $tutorialDAO->salvarTutorial($tutorialDTO);

    var_dump($sucesso);

    if($sucesso){
        $msg = "suxesso";
    }else{
        $msg = "deu erro";
    }
    echo "{$msg}";
    // var_dump($_POST);

?>