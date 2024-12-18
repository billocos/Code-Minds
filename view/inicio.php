<?php

session_start();
$nome = $_SESSION["nome"];
$id = $_SESSION["id_usuario"];
$tipo = $_SESSION["tipo"];



?>



</head>

<body>
    <style></style>

    <?php

    if ($tipo == 'administrador') { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/adm.css">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <title>Inicio</title>
    
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
    <br>

    <h1>Painel do Administrador - Bem-vindo!</h1>
    <br>
<div class="bloco">
    <header><br></header>
        <div class="menu-options">
            <div class="option">
                <h2 class="xebiu">Monitoramento</h2>
                <p>Acesse as ferramentas de monitoramento de usuários.</p>
                <button onclick="window.location.href='listarUsuarios.php'">Acessar</button>
            </div>
            <div class="option">
                <h2 class="xebiu">Tutoriais</h2>
                <p>Gerencie os tutoriais para os usuários da plataforma.</p>
                <button onclick="window.location.href='tutoriais.php'">Acessar</button>
            </div>
            <div class="option">
                <h2 class="xebiu">Professores</h2>
                <p>Gerencie o cadastro dos professores.</p>
                <button onclick="window.location.href='cadastroprof.php'">Acessar</button>
            </div>
        </div>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>

<script>
    // Captura o valor do parâmetro `status` na URL
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    // Exibe alerta SweetAlert com base no status de envio
    if (status === 'sucesso') {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Professor cadastrado com sucesso!',
            showConfirmButton: false,
            timer: 1500
        });
    } else if (status === 'erro') {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Erro ao enviar tutorial!',
            text: 'Por favor, verifique os campos e tente novamente.',
            showConfirmButton: true
        });
    }
</script>
    
</body>
</html>
       


    <?php } else if ($tipo == 'aluno') { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../styles/inicio.css">
            <link href="../styles/fonts.css" rel="stylesheet">
            <link href="../styles/media.css" rel="stylesheet">
            <title>Inicio</title>
            <header>
                <div id="title">
                    <h1>Code</h1>
                    <h1>Brain</h1>
                </div>

                <ul>
                    <a href="../view/sobre.php">
                        <li>Sobre</li>
                    </a>
                    <a href="../view/contato.php">
                        <li>Contato</li>
                    </a>
                    <a href="./logOff.php" id="acesso"><li>Sair</li></a>
                </ul>
            </header>
            <div class="full-screen-container">
                    <div class="welcome-message">
                        <h1 class="princ">Bem-vindo, <span><?php echo $nome;  ?></span>!</h1>
                        <p>Prepare-se para explorar e expandir seus conhecimentos com todos esses conteúdos diversificados.</p>
                        <form action="../view/tutoriais.php"><input type="submit" class="button" value="Começar"></form>

                    </div>
                </div>
</body>

</html>


<?php } else { ?>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-vindas, Professor!</title>
    <link rel="stylesheet" href="../styles/prof.css">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    
</head>
<body>
<header>
                <div id="title">
                    <h1>Code</h1>
                    <h1>Brain</h1>
                </div>

                <ul>
                    <a href="../view/sobre.php">
                        <li>Sobre</li>
                    </a>
                    <a href="../view/contato.php">
                        <li>Contato</li>
                    </a>
                    <a href="./logOff.php" id="acesso"><li>Sair</li></a>
                </ul>
            </header>
            <div class="full-screen-container">
                    <div class="welcome-message">
                        <h1 class="princ">Bem-vindo, <span>Professor</span>!</h1>
                        <p>Que bom que você chegou!<br> Pronto para mais um de seus tutoriais inovadores?</p>
                        <form action="./criarTutorial.php"><input type="submit" class="button" value="Criar"></form>
                        
                        <input type="submit" class="button" value="Ver Tutoriais" onclick="window.location.href='tutoriaisProfessor.php?id=<?php echo $id ?>'">

                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>


               
</body>
</html>

        
    </header>


<?php } ?>