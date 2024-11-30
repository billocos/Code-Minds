<?php
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $titulo = $_POST["nome"];
    $conteudo = $_POST["tutorial"];
    $descricao = $_POST["descricao"];
    $id_usuario = $_POST["id_usuario"];

    // var_dump($_GET);

    $tutorialDTO = new TutorialDTO();
    $tutorialDAO = new TutorialDAO();

    
    

   

    $tutorialDTO->setTitulo($titulo);
    $tutorialDTO->setConteudo($conteudo);
    $tutorialDTO->setDescricao($descricao);
    $tutorialDTO->setIdUsuario($id_usuario);


    $sucesso = $tutorialDAO->salvarTutorial($tutorialDTO);

    // var_dump($sucesso);

    if($sucesso){
        header("Location:../view/tutoriaisProfessor.php?status=sucesso");
    }else{
        header("Location:../view/inicio.php?status=erro");
    }
    echo "{$msg}";
    var_dump($_POST);

?>