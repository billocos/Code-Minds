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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<header>
    <div id="title">
        <h2>Code</h2>
        <h2>Minds</h2>
    </div>

    <ul>
        <a href="./logOff.php" id="acesso"><li>Sair</li></a>
    </ul>
</header>
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
                <td><?php echo $t["senha"] = str_repeat('*', 4); ?></td>
                <td><?php echo $t["tipo"] ?></td>
                <td>
                    <!-- Botão Excluir -->
                    <button 
                        style="background-color: red;" 
                        class="btn" 
                        onclick="confirmDelete(<?php echo $t['id_usuario']; ?>)">
                        Desativar
                    </button>
                </td>
                <td>
                    <!-- Botão Alterar -->
                    <button 
                        style="background-color: yellow;" 
                        class="btn" 
                        onclick="confirmUpdate(<?php echo $t['id_usuario']; ?>)">
                        Alterar
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Scripts SweetAlert2 -->
<script>
    // Função para confirmar exclusão
    function confirmDelete(id) {
        Swal.fire({
            title: 'Você tem certeza?',
            text: "Esta ação não poderá ser desfeita!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, desativar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redireciona para o controlador de exclusão
                window.location.href = `../control/excluirUsuarioControl.php?id_usuario=${id}`;
            }
        });
    }

    // Função para confirmar alteração
    function confirmUpdate(id) {
        Swal.fire({
            title: 'Alterar dados do usuário?',
            text: "Você será redirecionado para a página de edição.",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, alterar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redireciona para a página de alteração
                window.location.href = `alterarUsuario.php?id_usuario=${id}`;
            }
        });
    }
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
</script>

</body>
</html>
