<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tutorial</title>
    <link rel="stylesheet" href="../styles/criar.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/fonts.css">
</head>
<body>
    <div class="form-container">
        <h2>ADICIONAR TUTORIAL</h2>
        <form action="../control/criarTutorialControl.php" method="post">
            <label for="nome">Nome do Tutorial:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="Descricao">Descrição do Tutorial:</label>
            <textarea id="" name="tutorial"required></textarea required>

            <label for="tutorial">Conteúdo do Tutorial:</label>
            <textarea id="" name="tutorial"required></textarea required>

            

            <button class="btn" type="submit">Enviar Tutorial</button>
        </form>
    </div>

</body>

</html>