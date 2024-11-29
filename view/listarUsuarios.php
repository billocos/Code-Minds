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
    <div class="bloco">
        <header>
        <ul>
            <a href="../view/inicio.php" id="acesso"><li>Voltar</li></a>
        </ul>
        
    </header>
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
                    <a class="btn.excluir" href="../control/excluirUsuarioControl.php?id_usuario=<?php echo $t["id_usuario"] ?>"
                    >
                        <button onclick="confirmChoicee()" style="background-color: red;"  class="btn">Desativar</button>
                        <script>
                        function confirmChoicee() {
                            if (confirm("Confirmar escolha?")) {
                                alert("Ação confirmada!");
                            
                            } else {
                                alert("Ação cancelada.");
                            }
                        }
                    </script>
                    </a>
                    
                </td>
                <td>
                    <a class="btn.alterar" href="alterarUsuario.php?id_usuario=<?php echo $t["id_usuario"] ;?>">
                        <button onclick="confirmChoice()" style="background-color: yellow;" class="btn">Alterar</button>
                        <script>
                        function confirmChoice() {
                            if (confirm("Configurar?")) {
                            } else {
                                alert("Ação cancelada.");
                            }
                        }
                    </script>
                    </a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
