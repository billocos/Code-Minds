<?php
require_once "../model/DAO/TutorialDAO.php";
require_once "../model/DTO/TutorialDTO.php";
 $id_tutorial = $_GET["id"];
//   var_dump($id_usuario);

$tutorialDAO = new TutorialDAO();

$retorno = $tutorialDAO->buscarTutorialPorID($id_tutorial);
//  var_dump($retorno);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tutorial</title>
    <link rel="stylesheet" href="../styles/alterartuto.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/fonts.css">
</head>
<body>
    <div class="form-container">
        <h2>ALTERAR TUTORIAL</h2>
        <form action="../control/alterarTutorialControl.php" method="post">
        <input type="hidden" name="id_tutorial" value="<?php echo $id_tutorial; ?>">
        <label for="nome">titulo:</label>
        <input type="text" name="titulo" id="nome" value="<?php echo $retorno['titulo']; ?>">

            <label for="Descricao">Descrição do Tutorial:</label>
            <textarea name="descricao" id="descricao" ><?php echo $retorno['descricao']; ?></textarea>

            <label for="tutorial">Conteúdo do Tutorial:</label>
            <textarea cols="10" rows="5" id="" name="tutorial"required></textarea required>

            <button class="btn" type="submit">Salvar Alterações</button>
        </form>
    </div>

</body>

</html>