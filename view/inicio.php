<?php 

session_start();
$nome = $_SESSION["nome"];
$id = $_SESSION["id_usuario"];
$tipo = $_SESSION["tipo"];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/inicio.css">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <style></style>

    <?php 

        if($tipo == 'administrador'){ ?>
            <header>
            <div id="title">
                <h1>Code</h1>
                <h1>Brain</h1>
            </div>
    
            <ul>
                <a href="../view/monitoriamento.php"><li>Monitoramento</li></a>
                <a href="../view/tutoriais.php"><li>Tutoriais</li></a>
                <a href="../view/sobre.php"><li>Sobre</li></a>
                <a href="../view/contato.php"><li>Contato</li></a>
                <a id="acesso"><li>acessar perfil</li></a>
            </ul>
       
       
        <p>seja bem vindo <?php echo $nome; echo '  '.$tipo ?></p>
     </header>


       <?php } else if ($tipo == 'aluno'){ ?>
        <header>
            <div id="title">
                <h1>Code</h1>
                <h1>Brain</h1>
            </div>
    
            <ul>
                <a href="../view/tutoriais.php"><li>Tutoriais</li></a>
                <a href="../view/sobre.php"><li>Sobre</li></a>
                <a href="../view/contato.php"><li>Contato</li></a>
                <a id="acesso"><li>acessar perfil</li></a>
            </ul>
       
       
        <p>seja bem vindo <?php echo $nome; echo '  '.$tipo ?></p>
        <div class="full-screen-container">
        <div class="welcome-message">
            <h1 class="princ">Bem-vindo, <span><?php echo $nome;  ?></span>!</h1>
            <p>Prepare-se para explorar e expandir seus conhecimentos com todos esses conteúdos diversificados.</p>
            <form action="../view/tutoriais.php"><input type="submit" class="button" value="Começar"></form>

        </div>
    </div>
     </header>

    
        <?php } else { ?>
            <header>
            <div id="title">
                <h1>Code</h1>
                <h1>Brain</h1>
            </div>
    
            <ul>
                <a href="../view/criarTutorial.php"><li>Criar Tutoriais</li></a>
                <a href="../view/sobre.php"><li>Sobre</li></a>
                <a href="../view/contato.php"><li>Contato</li></a>
                <a id="acesso"><li>acessar perfil</li></a>
            </ul>
       
       
        <p>seja bem vindo <?php echo $nome; echo '  '.$tipo ?></p>
     </header>


        <?php } ?>
    
   


    
   
   
    
 



</body>
</html>