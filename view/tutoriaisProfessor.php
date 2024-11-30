<?php
include_once('../model/DAO/TutorialDAO.php');

session_start();
$id_professor = $_SESSION['id_usuario']; // ou o ID do professor desejado
$tutorialDAO = new TutorialDAO();

// Passando o ID do professor como argumento
$todos = $tutorialDAO->listarTutoriaisPorProfessor($id_professor);

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <title>Tutoriais</title>
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
            padding: 30px 40px;
            align-items:center;
        }

        .search-form {
    display: flex;
    align-items: center;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 25px;
    padding: 5px 15px;
    max-width: 400px;
    width: 100%;
    height: 40px;
    transition: box-shadow 0.3s ease;
}

.search-form:hover,
.search-form:focus-within {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.search-input {
    flex: 1;
    border: none;
    outline: none;
    background: transparent;
    font-size: 16px;
    padding: 10px;
    color: #333;
}

.search-input::placeholder {
    color: #aaa;
}

.search-button {
    background: none;
    border: none;
    padding: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;

}

.search-button img {
    width: 40px;
    height: 40px;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
}

.search-button:hover img {
    filter: none;
}

.bloquinho{
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
        <div class="bloquinho">
        <form action="resultadodapesquisa.php" method="get" class="search-form">
    <input type="text" name="pesquisa" id="pesquisa" class="search-input" placeholder="O que você está procurando?" 
    required>
    <button type="submit" class="search-button">
        <img src="../components/images/lupa.png" alt="Pesquisar">
    </button>
</form>
   </div>
        <ul>
            <a href="./inicio.php" id="acesso">
                <li>Home</li>
            </a>
        </ul>
</header>
<br><br>

 <div class="bloco">

    <h1>Veja seus tutoriais<br> adicionados recentemente!</h1>

<br>
    <div class="container">
        <?php foreach ($todos as $tutorial) { ?>
            <div class='tutorial-card'>
                <div class='tutorial-header'><?php echo $tutorial['titulo'] ?>
                </div>
                <div class='tutorial-body'>
                    <p><?php echo $tutorial['descricao'] ?> </p>

                    <a class='tutorial-link' href='tutorialCompleto.php?id=<?php echo $tutorial['id_tutorial'] ?>'>Ver Tutorial</a>
                    
                        <a class='tutorial-link2' href=' alterarTutorialProf.php?id=<?php echo $tutorial['id_tutorial'] ?>'>Alterar</a>
                    <a class='tutorial-link3' href='../control/excluirTutorialControlProf.php?id=<?php echo $tutorial['id_tutorial'] ?>' >Excluir</a>
                   
                </div>
                </div>
        <?php } ?>
        <br>
        <input type="submit" onclick="window.location.href='alltutoriais.php'" class="btn" value="Ver todos">
 </div>
 <div id="customAlert" class="alert"></div>
    </div>
	
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script>
        // Captura o valor do parâmetro `status` na URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        // Exibe alerta com base no status
        if (status === 'sucesso') {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Tutorial cadastrado com sucesso!',
                showConfirmButton: false,
                timer: 1500
            });
        } else if (status === 'erro') {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Houve um erro ao realizar a ação. Tente novamente.',
                showConfirmButton: true
            });
        }
    </script>

                    

</body>

</html>