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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../styles/comments.css"> 
    <title><?php echo htmlspecialchars($tutorial['titulo']); ?></title>
</head>
<body>
<header>
    <div id="title">
        <h1>Code</h1>
        <h1>Minds</h1>
    </div>
    <ul>
            <a href="./tutoriais.php" id="acesso">
                <li>Home</li>
            </a>
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
<div id="customAlert" class="alert"></div>
    </div>
	
    <!-- SweetAlert2 JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script>
        // Captura o valor do parâmetro `status` na URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        // Exibe alerta com base no status
        if (status === 'sucesso') {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Ação realizada com sucesso!',
                showConfirmButton: false,
                timer: 1500
            });
        } else if (status === 'erro') {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Houve um erro ao realizar a ação. Tente novamente.',
                showConfirmButton: true
            });
        }
    </script> -->

</body>
</html>
