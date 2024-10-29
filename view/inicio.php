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
    
    <title>Inicio</title>
</head>
<body>
    <style></style>
    <header>
        <div id="title">
            <h2>Code</h2>
            <h2>Minds</h2>
        </div>

        <ul>
            <a href="../index.php" id="acesso"><li>Sair</li></a>
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
                <button onclick="window.location.href='../view/listarUsuarios.php'">Acessar</button>
            </div>
            <div class="option">
                <h2 class="xebiu">Tutoriais</h2>
                <p>Gerencie os tutoriais para os usuários da plataforma.</p>
                <button onclick="window.location.href='tutoriais.php'">Acessar</button>
            </div>
        </div>
        <br>
    </div>
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
                    <a href="../view/tutoriais.php">
                        <li>Tutoriais</li>
                    </a>
                    <a href="../view/sobre.php">
                        <li>Sobre</li>
                    </a>
                    <a href="../view/contato.php">
                        <li>Contato</li>
                    </a>
                    <a id="acesso">
                        <li>acessar perfil</li>
                    </a>
                </ul>


                
                <div class="full-screen-container">
                    <div class="welcome-message">
                        <h1 class="princ">Bem-vindo, <span><?php echo $nome;  ?></span>!</h1>
                        <p>Prepare-se para explorar e expandir seus conhecimentos com todos esses conteúdos diversificados.</p>
                        <form action="../view/tutoriais.php"><input type="submit" class="button" value="Começar"></form>

                    </div>
                </div>
            </header>
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
</head>
<body>
    <div class="container">
        <h1>Seja bem-vindo, professor!</h1>
        <p>Pronto para mais um de seus tutoriais inovadores?</p>
        <button onclick="window.location.href='criarTutorial.php'">Criar</button>
    </div>
</body>
</html>

        <p>seja bem vindo <?php echo $nome;
                            echo '  ' . $tipo ?></p>
    </header>


<?php } ?>