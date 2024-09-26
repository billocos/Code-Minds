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
    public function listarUsuarios(){
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // var_dump($retorno);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }

    public function excluirUsuario($id_usuario){
        try {
            $sql = "DELETE FROM usuario where id = ?";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(1, $id_usuario);

            $retorno = $stmt->execute();
            return $retorno;
            
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function buscarUsuarioPorID($id_usuario){
        try{
            $sql = "SELECT*FROM USUARIO WHERE  id = {$id_usuario}";
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        }catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function alterarUsuario( UsuarioDTO $usuarioDTO){
        try{
            $sql = "UPDATE USUARIO SET NOME=?,SENHA=? WHERE id=?";
            $stmt = $this->pdo->prepare($sql);

            $id=$usuarioDTO->getId();
            $nome=$usuarioDTO->getNome();
            $senha=$usuarioDTO->getSenha();
            

            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$senha);
            $stmt->bindValue(3,$id);

            $retorno = $stmt->execute();

            return $retorno;
        }catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
}
