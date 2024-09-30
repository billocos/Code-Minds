<?php
include "../control/listarUsuariocontrol.php";











?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1></h1>
    <table border="1px">
        <tr>
            <th> id</th>
            <th> nome</th>
            <th> senha</th>
            <th colspan="2"> operaçoes</th>
        </tr>
        <?php foreach ($todos as $t) { ?>
            <tr>
                <td><?php echo $t["id_usuario"] ?></td>
                <td><?php echo $t["nome"] ?></td>
                <td><?php echo $t["senha"] ?></td>
                <td>
                    <a href="../control/excluirUsuarioControl.php?id_usuario=<?php echo $t["id_usuario"] ?>">
                        <button>excluir</button>
                    </a>
                </td>
                <td>
                    <button>alterar</button>
                </td>



            </tr>




        <?php } ?>
    </table>
</body>

</html>