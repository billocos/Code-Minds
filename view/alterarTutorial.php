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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar tutorial</title>
</head>
<body>
    <h1>alterar tutorial</h1>
    
    
    <form action="../control/alterarTutorialControl.php" method="post">
        <input type="hidden" name="id_tutorial" value="<?php echo $id_tutorial; ?>">
        <label for="nome">titulo:</label>
        <input type="text" name="titulo" id="nome" value="<?php echo $retorno['titulo']; ?>">
        <br>
        <textarea name="conteudo" id=""></textarea>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $retorno['descricao']; ?></textarea>
        <button type="submit">Salvar Alterações</button>
</body>
</html>