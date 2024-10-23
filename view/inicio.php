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
    <header>
        <div id="title">
            <h1 class="prin">Code</h1>
            <h1 class="prin">Brain</h1>
        </div>

        <ul>
            <a href="../view/tutoriais.php"><li>Tutoriais</li></a>
            <a href="../view/sobre.php"><li>Sobre</li></a>
            <a href="../view/contato.php"><li>Contato</li></a>
        </ul>
    </header>
    <?php 

    session_start();
    $nome = $_SESSION["nome"];
    $id = $_SESSION["id_usuario"];
?>
<div class="full-screen-container">
        <div class="welcome-message">
            <h1 class="princ">Bem-vindo, <span><?php echo $nome;  ?></span>!</h1>
            <p>Prepare-se para explorar e expandir seus conhecimentos com todos esses conteúdos diversificados.</p>
            <form action="../view/tutoriais.php"><input type="submit" class="button" value="Começar"></form>

        </div>
    </div>
    
</body>
</html>