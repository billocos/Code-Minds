<?php

include_once "Conexao.php";
include_once "../model/DTO/TutorialDTO.php";

    class TutorialDAO{
    public $pdo = null;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function salvarTutorial(TutorialDTO $tutorialDTO){
        try {
            //var_dump($usuarioDTO);
            $sql = "INSERT INTO tutoriais (titulo, conteudo, descricao) VALUES (? ,? ,?)";

            $stmt = $this->pdo->prepare($sql);

            $titulo = $tutorialDTO->getTitulo();
            $conteudo = $tutorialDTO->getConteudo();
            $descricao = $tutorialDTO->getDescricao();


            $stmt->bindValue(1, $titulo);
            $stmt->bindValue(2, $conteudo);
            $stmt->bindValue(3, $descricao);

            $retorno = $stmt->execute();

            return $retorno;

            //var_dump($retorno);

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }

    public function listarTutoriais(){

        try {
            $sql = "SELECT * FROM tutoriais ";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function buscarTutorialPorID($id_tutorial){
        try {
            $sql = "SELECT*FROM TUTORIAIS WHERE  id_tutorial = {$id_tutorial}";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function excluirTutorial($id_tutorial){
        try {
            $sql = "DELETE FROM tutoriais where id_tutorial = ?";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(1, $id_tutorial);

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function alterarTutorial(TutorialDTO $tutorialDTO){
        try {
            $sql = "UPDATE TUTORIAIS SET titulo=?,conteudo=? WHERE id_tutorial=?";
            $stmt = $this->pdo->prepare($sql);

            $id_tutorial = $tutorialDTO->getId();
            $titulo = $tutorialDTO->getTitulo();
            $conteudo = $tutorialDTO->getConteudo();
            
            
            

           
            $stmt->bindValue(1, $titulo);
            $stmt->bindValue(2, $conteudo);
            $stmt->bindValue(3, $id_tutorial);
            
            
            

            $retorno = $stmt->execute();
            // var_dump($tutorialDTO);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
}
