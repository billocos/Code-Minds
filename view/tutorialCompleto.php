<?php 
include_once "../control/listarTutorialControl.php";
include_once "../model/DAO/TutorialDAO.php";
include_once "../model/DAO/ComentarioDAO.php";
include_once "../control/listarComentariosControl.php";
session_start();
$nome = $_SESSION["nome"];
$id_usuario = $_SESSION["id_usuario"];

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
    <link rel="stylesheet" href="../styles/comments.css"> <!-- Novo arquivo CSS -->
    <title><?php echo htmlspecialchars($tutorial['titulo']); ?></title>
    <style>
        /* Estilo da seção de comentários */
.comment-section {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.comment-section h2 {
    font-size: 24px;
    color: #6a11cb;
    margin-bottom: 20px;
    text-align: center;
}

.comment-section form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.comment-input {
    width: 100%;
    padding: 15px;
    border: 2px solid #ddd;
    border-radius: 10px;
    font-size: 16px;
    resize: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.comment-input:focus {
    border-color: #6a11cb;
    outline: none;
    box-shadow: 0 0 10px rgba(106, 17, 203, 0.3);
}

.comment-submit {
    padding: 12px 20px;
    background: #6a11cb;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s ease;
}

.comment-submit:hover {
    background: #2575fc;
    transform: scale(1.05);
}

/* Estilo da exibição de comentários */
.comments-display {
    margin-top: 30px;
}

.no-comments {
    text-align: center;
    font-size: 18px;
    color: #777;
}

.comment {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.comment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.comment-header h4 {
    margin: 0;
    font-size: 18px;
    color: #6a11cb;
}

.comment-header span {
    font-size: 14px;
    color: #999;
}

.comment p {
    margin: 0;
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

    </style>
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

<!-- Seção de comentários -->
<div class="comment-section">
    <h2>💬 Deixe seu Comentário</h2>
    <form action="../control/criarComentarioControl.php" method="get">
        <input type="hidden" name="id_tutorial" value="<?php echo $id_tutorial; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
        <textarea class="comment-input" name="comentario" placeholder="Escreva algo incrível..." required></textarea>
        <button type="submit" class="comment-submit">📤 Enviar Comentário</button>
    </form>
</div>

<!-- Exibição de comentários -->
<div class="comments-display">
    <?php if (empty($comentarios)) { ?>
        <p class="no-comments">Ainda não há comentários. Seja o primeiro! ✨</p>
    <?php } else { ?>
        <?php foreach ($comentarios as $comentario) { ?>
            <div class="comment">
                <div class="comment-header">
                    <h4><?php echo htmlspecialchars($comentario['nome']); ?></h4>
                    
                </div>
                <p><?php echo nl2br(htmlspecialchars($comentario['comentario'])); ?></p>
            </div>
        <?php } ?>
    <?php } ?>
</div>

</body>
</html>
