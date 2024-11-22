<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cadastrouser.css">
    <title>Formulario responsivo com html e css</title>
    <!-- SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="box">
        <div class="form-box">
            <h2>Cadastre-se!</h2>
            <p> Já é um membro? <a href="../view/login.php"> Login </a> </p>
            <form action="../control/UsuarioControl.php" method="POST">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" name="nome" id="nome" placeholder="" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="" required>
                </div>
                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="" required>
                </div>
                <input type="hidden" name="tipo" value="aluno">
                <div class="input-group">
                    <button type="submit" value="Cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Captura o valor do parâmetro `status` na URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        // Exibe o alerta SweetAlert com base no status do cadastro
        if (status === 'sucesso') {
            Swal.fire({
                title: "Cadastrado com sucesso!",
                text: "Seu cadastro foi realizado.",
                icon: "success"
            });
        } else if (status === 'erro') {
            Swal.fire({
                title: "Erro ao cadastrar",
                text: "Houve um problema ao tentar se cadastrar.",
                icon: "error"
            });
        }
    </script>
</body>
</html>
