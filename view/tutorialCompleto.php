<?php 
    include_once "../control/listarTutorialControl.php";
    include_once "../model/DAO/TutorialDAO.php";
    include_once "../model/DAO/ComentarioDAO.php";
    include_once "../control/listarComentariosControl.php";
    session_start();
    $nome = $_SESSION["nome"];
    $id = $_SESSION["id_usuario"];

    $tutorialDAO = new TutorialDAO();
    $id_tutorial = $_GET['id'];
    $tutorial = $tutorialDAO->buscarTutorialPorID($id_tutorial);


   
    
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
    </div>
    <form action="../control/criarComentarioControl.php" method="get">
        <textarea name="comentario" id=""></textarea>
        <input type="hidden" name="id_tutorial" value="<?php echo $id_tutorial; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
        <button type="submit">Comentar</button>
    </form>

    <div class="comentarios">
        <?php foreach ($comentarios as $comentario) { ?>
            <div class="comentario">
                <p>Por: <?php echo $comentario['nome']; ?></p>
                <p><?php echo $comentario['comentario']; ?></p>
                
            </div>
        <?php } ?>
    
    
</body>
</html>



