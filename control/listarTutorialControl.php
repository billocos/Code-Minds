<?php 
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $tutorialDAO = new TutorialDAO();
    // $id_usuario = $_POST['id_usuario'];
    

    $todos = $tutorialDAO->listarTutoriais();
    

    // echo "<pre>";
    //  var_dump($todos);


?>