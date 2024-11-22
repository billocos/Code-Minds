<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tutorial</title>
    <link rel="stylesheet" href="../styles/criar.css">
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
</head>
<body>
    <h1>Seja bem-vindo ao painel de criação, feito para desenvolver seus tutoriais!</h1>
    <div class="form-container">
        <h2>ADICIONAR TUTORIAL</h2>
        <form action="../control/criarTutorialControl.php" method="post">
            <label for="nome">Nome do Tutorial:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="Descricao">Descrição do Tutorial:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <label for="tutorial">Conteúdo do Tutorial:</label>
            <textarea id="tutorial" name="tutorial" required></textarea>

            <button class="btn" type="submit">Enviar Tutorial</button>
        </form>
    </div>

    <!-- SweetAlert2 JS -->
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
                title: 'Tutorial enviado com sucesso!',
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
