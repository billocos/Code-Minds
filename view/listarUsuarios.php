<?php
include "../control/listarUsuariocontrol.php";


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
    <link rel="stylesheet" href="../styles/listar.css">
</head>
<body>
    <h1 class="prin">Controle de usuários</h1>
    <div class="bloco">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Senha</th>
                <th>Tipo</th>
                <th colspan="2"> </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($todos as $t) { ?>
            <tr>
                <td><?php echo $t["id_usuario"] ?></td>
                <td><?php echo $t["nome"] ?></td>
                <td><?php echo $t["email"] ?></td>
                <td><?php echo $t["telefone"] ?></td>
                <td><?php echo $t["senha"] ?></td>
                <td><?php echo $t["tipo"] ?></td>
                <td>
                    <a class="btn.excluir" href="../control/excluirUsuarioControl.php?id_usuario=<?php echo $t["id_usuario"] ?>">
                        <button style="background-color: red;"  class="btn">Desativar</button>
                    </a>
                </td>
                <td>
                    <a class="btn.alterar" href="alterarUsuario.php?id_usuario=<?php echo $t["id_usuario"] ;?>">
                        <button style="background-color: yellow;" class="btn">Alterar</button>
                    </a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
