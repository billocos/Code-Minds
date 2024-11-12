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
            $sql = "INSERT INTO comentario (comentario) VALUES (?)";

            $stmt = $this->pdo->prepare($sql);



            $comentario = $comentarioDTO->getComentario();

            $stmt->bindValue(1, $comentario);

            $retorno = $stmt->execute();

            return $retorno;

            //var_dump($retorno);

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }

}
?>