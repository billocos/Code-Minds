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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="../styles/alterar.css">
</head>
<body>
    <div class="container">
        <h2>Alterar Usuário</h2>
        <form action="../control/alterarUsuarioControl.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $retorno["id_usuario"]; ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $retorno["nome"]; ?>"required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $retorno["email"]; ?>"required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="tel" value="<?php echo $retorno["telefone"]; ?>"required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?php echo $retorno["senha"]; ?>"required>

            <label for="tipo_usuario">Tipo de Usuário:</label>
            <select name="tipo" id="" value = "<?php echo $retorno["tipo"]; ?>">
            <option value="aluno">aluno</option>
            <option value="professor">professor</option>
            <option value="administrador">administrador</option>
        </select>

            <button onclick="confirmChoice()" input type="submit">Salvar Alterações</button>
            <script>
                        function confirmChoice() {
                            if (confirm("Confirmar Alteração?")) {
                                
                                alert("Ação confirmada!");
                            } else {
                                alert("Alteração cancelada.");
                            }
                        }
                    </script>
        </form>
    </div>
</body>
</html>

    
        
    
        