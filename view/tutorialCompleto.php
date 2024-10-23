<?php 
    include_once "../control/listarTutorialControl.php";
    include_once "../model/DAO/TutorialDAO.php";

    $tutorialDAO = new TutorialDAO();
    $id = $_GET['id'];
    $tutorial = $tutorialDAO->buscarTutorialPorID($id);


   
    
?>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tutorial['titulo']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($tutorial['titulo']); ?></h1>
    
    <div>
        <?php echo nl2br(htmlspecialchars($tutorial['conteudo'])); ?>
    </div>
    <a href="index.php">Voltar para a lista</a>
</body>
</html>



