<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cadastroprof.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <title>Formulario responsivo com html e css</title>
</head>

<body>

    <div class="box">

        <div class="form-box">
            <h2>Cadastrar Professor</h2>
            <form action="../control/professorControl.php" method="POST">
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
                    <input type="hidden" name="tipo" value="professor">
                <div class="input-group">
                    <button onclick="alert()" type="submit" value="Cadastrar" >Cadastrar</button>
                </div>


            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script>
        function alert() {
            const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    // Exibe alerta simples de acordo com o status
    if (status === 'sucesso') {
        Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cadastro realizado com sucesso',
                showConfirmButton: false,
                timer: 1500
            })
        
    } else if (status === 'erro') {
        alert("Erro ao cadastrar.");
    }
           
        }
    </script>
</body>
</html>