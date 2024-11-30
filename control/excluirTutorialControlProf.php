<?php 
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";
    $id_tutorial = $_GET["id"];

    //

    $tutorialDAO = new TutorialDAO();

    $sucesso = $tutorialDAO->excluirTutorial($id_tutorial);

    if($sucesso){
        header("Location:../view/tutoriaisProfessor.php?status=sucesso");
    }
?>