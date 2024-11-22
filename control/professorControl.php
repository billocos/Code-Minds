<?php
include_once "../model/DTO/UsuarioDTO.php";
include_once "../model/DAO/UsuarioDAO.php";

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$tel = $_POST["telefone"];
$tipo = $_POST["tipo"];
//  var_dump($_POST);


$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setEmail($email);
$usuarioDTO->setTel($tel);
$usuarioDTO->setTipo($tipo);
//  var_dump($usuarioDTO);

$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

var_dump($sucesso);

if ($sucesso) {
    header("Location:../view/inicio.php?status=sucesso");
} else {
    header("Location:../view/inicio.php?status=erro");
}
// echo "{$msg}";
?>