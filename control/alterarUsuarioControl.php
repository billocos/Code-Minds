<?php

require_once "../model/DTO/UsuarioDTO.php";

require_once "../model/DAO/UsuarioDAO.php";


$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$senha = $_POST["senha"];
$id_usuario = $_POST["id"];
//  var_dump($_POST);

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setId($id_usuario);
$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setEmail($email);
$usuarioDTO->setTel($tel);

var_dump($usuarioDTO); 

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);


if ($sucesso) {
    header("Location: ../view/listarUsuarios.php");
}else{
    echo "erro";
}
// d
