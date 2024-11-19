<?php 
   
    

     
     include_once "../model/DAO/TutorialDAO.php";
     include_once "../model/DTO/TutorialDTO.php";

    $dao = new TutorialDAO();
    $pesquisa = $_GET['pesquisa'];
    $tutorial = $dao->pesquisarTutorial($pesquisa);
    // var_dump($tutorial);
    
    ?>

    <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/media.css">
    <title>Resultado da busca</title>
    <style>
        body {
            background-color: #222;
            color: white;
            font-family: poppinsregular;
            max-width: 1200px;
            margin: 0 auto;
            font-weight: 600;
            padding: 15px;
            background-image: url(../components/images/introtuto.png);
            background-size: 100%;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        #title {
            flex-direction: column;
            line-height: 10px;
        }

        li {
            display: inline-block;
            margin: 18px;
            color: rgb(162, 162, 235);
        }

        a {
            color: rgb(16, 6, 160);
            border-color: rgb(162, 162, 235);
        }

        a:hover {
            color: rgb(16, 6, 160);
            transition: 0.3s all;
        }

        #acesso {
            border: 2px solid rgb(16, 6, 160);
            padding: 10px;
            border-radius: 15px;
        }

        #acesso:hover {
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
            background-color: rgb(196, 196, 255);
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

        .tutorial-link2 {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.5s ease;
        }

        .tutorial-link3 {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: yellow;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.5s ease;
        }

        .tutorial-link:hover {
            background-color: blue;
        }

        h1 {
            align-items: center;
            position: relative;
            text-align: center;
        }


        .btn {
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

        .btn:hover {
            background-position: right;
        }

        .bloquin {
            size: 50%;
            width: 50%;
            align-items: center;
            text-align: center;

        }
        .bloco{
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            color: #fff;
            border-radius: 27px;
            padding: 30px 40px
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
            <a href="./inicio.php" id="acesso">
                <li>Home</li>
            </a>
        </ul>
</header>
</form>
 <div class="bloco">
    <h1>resultados da busca</h1>
    <?php if ($tutorial){?>
    <div class="container">
        <?php foreach ($tutorial as $tutorial) { ?>
            <div class='tutorial-card'>
                <div class='tutorial-header'><?php echo $tutorial['titulo'] ?>
                </div>
                <div class='tutorial-body'>
                    <p><?php echo $tutorial['descricao'] ?> </p>

                    <a class='tutorial-link' href='tutorialCompleto.php?id=<?php echo $tutorial['id_tutorial'] ?>'>Ver Tutorial</a>
                     
                </div>
                </div>
        <?php }}else{echo "Nenhum tutorial encontrado";} ?>
        <br>
        <input type="submit" onclick="window.location.href='tutoriais.php'" class="btn" value="Voltar a busca">
 </div>

                    

</body>

</html>


