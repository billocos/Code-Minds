<?php 
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    $tutorialDAO = new TutorialDAO();
    

    $todos = $tutorialDAO->listarTutoriais();
    

    // echo "<pre>";
    //  var_dump($todos);


?>