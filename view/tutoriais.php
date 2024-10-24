<?php   
    include("../control/listarTutorialControl.php");       
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/media.css">
    <title>Tutoriais</title>
    <style>
        body{
            background-color: #222;
            color: white;
            font-family: poppinsregular;
            max-width: 1200px;
            margin: 0 auto;
            font-weight: 600;
            padding: 15px;
        }
        header{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            }

        #title{
            flex-direction: column;
            line-height: 10px;
        }

        li{
            display: inline-block;
            margin: 18px;
            color: rgb(162, 162, 235);
        }

        a{
            color: rgb(16, 6, 160);
            border-color: rgb(162, 162, 235);
        }

        a:hover{
            color: rgb(16, 6, 160);
            transition: 0.3s all;
        }

        #acesso{
            border: 2px solid rgb(16, 6, 160);
            padding: 10px;
            border-radius: 15px;
        }

        #acesso:hover{
            background-color: rgb(16, 6, 160);
            color: rgb(98, 11, 170);
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            align-items: center;
        }
        .tutorial-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .tutorial-card:hover {
            transform: translateY(-5px);
        }
        .tutorial-header {
            background-color: #403de9;
            color: white;
            padding: 20px;
            font-size: 1.5rem;
        }
        .tutorial-body {
            padding: 20px;
        }
        .tutorial-body p {
            margin: 0 0 10px;
            font-size: 1rem;
            color: #555;
        }
        .tutorial-link {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #6462e2;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.5s ease;
        }
        .tutorial-link:hover {
            background-color: #4c49e2;
        }

        h1{
            align-items: center;
            position: relative;
            text-align: center;
        }

        
        .btn{
            display: block;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
            border: none;
            background-image: linear-gradient(to right, #0051ff, #7598e4, #c2cbf1);
            background-size: 200%;
            font-size: 1.2rem;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .btn:hover{
            background-position: right;
        }

        .bloquin{
            size: 50%;
            width: 50%;
            align-items: center;
            text-align: center;
            
        }



    </style>
</head>
<body>

<header>
<div id="title">
            <h1>Code</h1>
            <h1>Brain</h1>
        </div>

        <ul>
            <a href="./inicio.php" id="acesso"><li>Home</li></a>
        </ul>
</header>
 
  <h1>Tutoriais mais acessados!</h1>

<div class="container">
    <?php
    $tutoriais = [
        [
            "titulo" => "Como criar um site em HTML",
            "descricao" => "Neste tutorial, você aprenderá o básico de HTML para construir uma página web do zero.",
            "link" => "tutorial-html.php"
        ],
        [
            "titulo" => "Introdução ao CSS",
            "descricao" => "Veja como usar CSS para estilizar seu site e deixá-lo mais atraente.",
            "link" => "tutorial-css.php"
        ],
        [
            "titulo" => "PHP para Iniciantes",
            "descricao" => "Um guia introdutório sobre a linguagem PHP e como ela pode ser usada para criar sites dinâmicos.",
            "link" => "tutorial-php.php"
        ],
        [
            "titulo" => "Como criar um site em HTML",
            "descricao" => "Neste tutorial, você aprenderá o básico de HTML para construir uma página web do zero.",
            "link" => "tutorial-html.php"
        ],
        [
            "titulo" => "Introdução ao CSS",
            "descricao" => "Veja como usar CSS para estilizar seu site e deixá-lo mais atraente.",
            "link" => "tutorial-css.php"
        ],
        [
            "titulo" => "PHP para Iniciantes",
            "descricao" => "Um guia introdutório sobre a linguagem PHP e como ela pode ser usada para criar sites dinâmicos.",
            "link" => "tutorial-php.php"
        ]
    ];

    foreach ($todos as $tutorial) {
        echo "
        <div class='tutorial-card'>
            <div class='tutorial-header'>{$tutorial['titulo']}</div>
            <div class='tutorial-body'>
                <p>{$tutorial['descricao']}</p>
                <a class='tutorial-link' href='tutorialCompleto.php?id={$tutorial['id_tutorial']}'>Ver Tutorial</a>
            </div>
        </div>
        ";
    }
    ?>
</div>


</body>
</html>

