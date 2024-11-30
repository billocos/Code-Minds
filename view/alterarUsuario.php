<?php
require_once "../model/DAO/UsuarioDAO.php";
require_once "../model/DTO/UsuarioDTO.php";
$id_usuario = $_GET["id_usuario"];
// var_dump($id_usuario);

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <h2>Alterar Usuário</h2>
        <form action="../control/alterarUsuarioControl.php" method="POST" id="alterarForm">
            <input type="hidden" name="id" value="<?php echo $retorno["id_usuario"]; ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $retorno["nome"]; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $retorno["email"]; ?>" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="tel" value="<?php echo $retorno["telefone"]; ?>" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?php echo $retorno["senha"]; ?>" required>

            <label for="tipo_usuario">Tipo de Usuário:</label>
            <select name="tipo" id="tipo_usuario">
                <option value="aluno" <?php echo ($retorno["tipo"] == 'aluno') ? 'selected' : ''; ?>>Aluno</option>
                <option value="professor" <?php echo ($retorno["tipo"] == 'professor') ? 'selected' : ''; ?>>Professor</option>
                <option value="administrador" <?php echo ($retorno["tipo"] == 'administrador') ? 'selected' : ''; ?>>Administrador</option>
            </select>

            <button type="submit" id="submitButton" style="background-color: #3085d6; color: white;">Salvar Alterações</button>
        </form>
    </div>

    <script>
        // Função de confirmação com SweetAlert2
        document.getElementById('alterarForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Previne o envio automático do formulário

            // Exibe a confirmação com SweetAlert2
            Swal.fire({
                title: 'Confirmar Alteração?',
                text: "Você realmente deseja salvar as alterações?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, salvar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Se confirmado, envia o formulário
                    e.target.submit(); // Submete o formulário
                } else {
                    // Caso o usuário cancele
                    Swal.fire(
                        'Alteração cancelada',
                        'Nenhuma alteração foi feita.',
                        'error'
                    );
                }
            });
        });
    </script>
</body>
</html>
