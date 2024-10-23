<?php
include_once "Conexao.php";
include_once "../model/DTO/UsuarioDTO.php";

class UsuarioDAO{
    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            //var_dump($usuarioDTO);
            $sql = "INSERT INTO usuario (nome, email, telefone ,senha) VALUES (? ,? ,? , ?)";

            $stmt = $this->pdo->prepare($sql);

            $nome = $usuarioDTO->getNome();
            $email = $usuarioDTO->getEmail();
            $tel = $usuarioDTO->getTel();
            $senha = $usuarioDTO->getSenha();

            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $tel);
            $stmt->bindValue(4, $senha);

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
    public function buscarUsuarioPorID($id_usuario)
    {
        try {
            $sql = "SELECT*FROM USUARIO WHERE  id_usuario = {$id_usuario}";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }


    public function alterarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE USUARIO SET nome=?,senha=?,email=?,telefone=? WHERE id_usuario=?";
            $stmt = $this->pdo->prepare($sql);

            $id_usuario = $usuarioDTO->getId();
            $nome = $usuarioDTO->getNome();
            $senha = $usuarioDTO->getSenha();
            $email = $usuarioDTO->getEmail();
            $tel = $usuarioDTO->getTel();

            $stmt->bindValue(1, $id_usuario);
            $stmt->bindValue(2, $nome);
            $stmt->bindValue(3, $email);
            $stmt->bindValue(4, $tel);
            $stmt->bindValue(5, $senha);

            $retorno = $stmt->execute();
            var_dump($usuarioDTO);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function validarLogin($email,$senha){
        try{
            $sql = "SELECT * FROM USUARIO WHERE email = '{$email}' AND senha = '{$senha}'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $logado = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump($logado);
            return $logado;
        }catch (PDOException $exe){
            echo $exe->getMessage();
        }
    

    }
}
