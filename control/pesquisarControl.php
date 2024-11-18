<!-- 
 <?php
 
 include("../model/DAO/TutorialDAO.php");
 // include("../model/DTO/TutorialDTO.php");
 
 $dao = new TutorialDAO();
 $pesquisa = $_GET['pesquisa'];
 $tutorial = $dao->pesquisarTutorial($pesquisa);
 // var_dump($tutorial);
 
 // Retorne os resultados da pesquisa
 return $tutorial;
 header("Location: ../view/resultadodapesquisa.php");
exit();
 
 ?>

// include("../model/DAO/TutorialDAO.php");
// // include("../model/DTO/TutorialDTO.php");

// $dao = new TutorialDAO();
// $pesquisa = $_GET['pesquisa'];
// $tutorial = $dao->pesquisarTutorial($pesquisa);
// // var_dump($tutorial);  
// // header("Location: ../view/resultadodapesquisa.php");
// return $tutorial;



