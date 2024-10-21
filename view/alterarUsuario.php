<?php
require_once "../model/DAO/UsuarioDAO.php";
require_once "../model/DTO/UsuarioDTO.php";
 $id_usuario = $_GET["id_usuario"];
//  var_dump($id_usuario);

$usuarioDAO = new UsuarioDAO();

$retorno = $usuarioDAO->buscarUsuarioPorID($id_usuario);
// var_dump($retorno);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/alterar.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
        <h1>Alterar Dados do Usuário</h1>
        <form action="../control/alterarUsuarioControl.php" method="post">
            <input type="hidden" name="id" value="<?php echo $retorno["id_usuario"]; ?>">
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo $retorno["nome"]; ?>">
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="<?php echo $retorno["email"]; ?>">
            </div>

            <div class="input-group">
                <label for="telefone">Telefone</label>
                <input type="tel" name="tel" value="<?php echo $retorno["telefone"]; ?>">
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" value="<?php echo $retorno["senha"]; ?>">
            </div>

            <button input type="submit">Salvar Alterações</button>
        </form>
    </div>
</body>

</html>
    
        