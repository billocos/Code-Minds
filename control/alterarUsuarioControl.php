<?php

require_once "../model/DTO/UsuarioDTO.php";

require_once "../model/DAO/UsuarioDAO.php";


$nome = $_POST["nome"];
$senha = $_POST["senha"];
$id_usuario = $_POST["id_usuario"];
// var_dump($_POST)

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setId($id_usuario);
$usuarioDTO->setNome($nome);
$usuarioDTO->setSenha($senha);

//var_dump($usuarioDTO); 

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);
if ($sucesso) {
    header("Location: ../view/listarUsuarios.php");
}else{
    echo "erro";
}
// d
