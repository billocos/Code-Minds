<?php
    include_once "../model/DTO/TutorialDTO.php";
    include_once "../model/DAO/TutorialDAO.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome_tutorial = $_POST['nome'];
        $conteudo_tutorial = $_POST['tutorial'];
    
        $arquivo_principal = './tutoriais.php';
        
        $conteudo_para_adicionar = "
        <h2>{$nome}</h2>
        <p><strong>Descrição:</strong> {$tutorial}</p>
        <p><strong>Conteúdo:</strong> <a href='conteudo_" . strtolower(str_replace(' ', '_', $nome)) . ".html'>Clique aqui para ver o conteúdo completo</a></p>
        <hr>
        ";
        
        file_put_contents($arquivo_principal, $conteudo_para_adicionar, FILE_APPEND);
    
        $nome_arquivo_conteudo = "conteudo_" . strtolower(str_replace(' ', '_', $nome)) . ".html";
        
        $conteudo_nova_pagina = "
        <html>
        <head>
            <title>Conteúdo do tutorial: {$nome}</title>
        </head>
        <body>
            <h1>{$nome}</h1>
            <p>{$tutorial}</p>
        </body>
        </html>
        ";
        
        file_put_contents($nome_arquivo_conteudo, $conteudo_nova_pagina);
    
        echo "Tutorial adicionado com sucesso! <a href='./tutoriais.php'>Voltar à página principal</a>";
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar Tutorial</title>
        <link rel="stylesheet" href="../styles/criar.css">
        <link rel="stylesheet" href="../styles/media.css">
        <link rel="stylesheet" href="../styles/fonts.css">
    </head>
    <body>
    
        <div class="form-container">
            <h2>ADICIONAR TUTORIAL</h2>
            <form action="../control/criarTutorialControl.php" method="post">
                <label for="nome">Nome do Tutorial:</label>
                <input type="text" id="nome" name="nome" required>
    
                <label for="tutorial">Conteúdo do Tutorial:</label>
                <textarea id="" name="tutorial"required></textarea>
    
                <button class="btn" type="submit">Enviar Tutorial</button>
            </form>
        </div>
    
    </body>
    
    </html>
    


