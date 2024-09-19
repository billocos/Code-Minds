<?php
include_once "Conexao.php";
include_once "../model/DTO/UsuarioDTO.php";

class UsuarioDAO
{
    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            //var_dump($usuarioDTO);
            $sql = "INSERT INTO usuario (nome, senha) VALUES (?,?)";

            $stmt = $this->pdo->prepare($sql);

            $nome = $usuarioDTO->getNome();
            $senha = $usuarioDTO->getSenha();

            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $senha);

            $retorno = $stmt->execute();

            return $retorno;

            //var_dump($retorno);

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            $retorno = $stmt->FetchALL(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }

    public function excluirUsuario($id_usuario)
    {
        try {
            $sql = "DELETE FROM usuario where id_usuario = ?";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(1, $id_usuario);

            $retorno = $stmt->execute();
            return $retorno;
            
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
}
