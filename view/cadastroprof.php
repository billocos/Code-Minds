<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cadastrouser.css">
    <title>Formulario responsivo com html e css</title>
</head>

<body>

    <div class="box">

        <div class="form-box">
            <h2>Cadastrar Professor</h2>
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
</body>
</html>