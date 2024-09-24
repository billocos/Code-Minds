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
            <h2>Cadastre-se!</h2>
            <p> Já é um membro? <a href="../view/login.php"> Login </a> </p>
            <form action="../control/UsuarioControl.php">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" id="nome" placeholder="--" required name="nome">
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="--" required name="email">
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" placeholder="--" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="--" required name="senha">
                </div>
                <div class="input-group">
                    <button submit>Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>