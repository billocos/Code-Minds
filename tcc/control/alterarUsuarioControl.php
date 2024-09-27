<?php

require_once "../model/DTO/UsuarioDTO.php";

require_once "../model/DAO/UsuarioDAO.php";


$nome = $_POST["nome"];
$senha = $_POST["senha"];
$id = $_POST["id"];
// var_dump($_POST)

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setId($id);
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
