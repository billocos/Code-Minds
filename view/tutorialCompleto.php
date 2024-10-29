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
    <link rel="stylesheet" href="../styles/clashtuto.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <title><?php echo htmlspecialchars($tutorial['titulo']); ?></title>
</head>
<body>
<header>
        <div id="title">
            <h1>Code</h1>
            <h1>Minds</h1>
        </div>

        <ul>
            <a href="../index.php"><li>Home</li></a>
            <a href="../view/contato.php"><li>Contato</li></a>
            <a href="../view/login.php" id="acesso"><li>Sair</li></a>
        </ul>
    </header>
    <br>
    <div class="bloco">
        <h1 class="prin"><?php echo htmlspecialchars($tutorial['titulo']); ?></h1>
        
        <div>
            <?php echo nl2br(htmlspecialchars($tutorial['conteudo'])); ?>
        </div>
        <button class="btn" onclick="window.location.href='tutoriais.html'">Voltar a lista</button>
    </div>
    
</body>
</html>



