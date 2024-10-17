<?php
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $nome = $_POST["nome"];
    $tutorial = $_POST["tutorial"];

    $tutorialDTO =  new TutorialDTO();
    $tutorialDAO =  new TutorialDAO();

    $tutorialDTO->setNome($nome);
    $tutorialDTO->setTutorial($tutorial);

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