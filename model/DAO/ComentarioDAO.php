<?php

    include_once "Conexao.php";
    include_once "../model/DTO/TutorialDTO.php";

    class ComentarioDAO{
    public $pdo = null;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function salvarComentario(ComentarioDTO $comentarioDTO){
        try {
            //var_dump($usuarioDTO);
            $sql = "INSERT INTO comentario (comentario, id_tutorial, id_usuario) VALUES (?, ?, ?)";

            $stmt = $this->pdo->prepare($sql);



            $comentario = $comentarioDTO->getComentario();
            $id_tutorial = $comentarioDTO->getIdTutorial();
            $id_usuario = $comentarioDTO->getIdUsuario();

            $stmt->bindValue(1, $comentario);
            $stmt->bindValue(2, $id_tutorial);
            $stmt->bindValue(3, $id_usuario);

            $retorno = $stmt->execute();

            return $retorno;

            //var_dump($retorno);

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    public function listarComentarios($id_tutorial){
        try {
            $sql = "SELECT c.comentario, u.nome FROM comentario 
                    AS c INNER JOIN usuario AS u ON c.id_usuario = u.id_usuario WHERE c.id_tutorial = '{$id_tutorial}' ;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
       }
    }
}


?>