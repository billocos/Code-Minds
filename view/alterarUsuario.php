<?php
require_once "../model/DAO/UsuarioDAO.php";
require_once "../model/DTO/UsuarioDTO.php";
 $id_usuario = $_GET["id_usuario"];
 var_dump($id_usuario);

$usuarioDAO = new UsuarioDAO();

$retorno = $usuarioDAO->buscarUsuarioPorID($id_usuario);
var_dump($retorno);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1></h1>
    <form action="../control/alterarUsuarioControl.php" method="post">
        <input type="hidden" name="id" value="<?php echo $retorno["id_usuario"]; ?>">
        nome <input type="text" name="nome" value="<?php echo $retorno["nome"]; ?>">
        email <input type="text" name="email" value="<?php echo $retorno["email"]; ?>">
        telefone <input type="tel" name="tel" value="<?php echo $retorno["telefone"]; ?>">
        senha <input type="text" name="senha" value="<?php echo $retorno["senha"]; ?>">
        <input type="submit" value="atualizar">
    </form>
</body>

</html>