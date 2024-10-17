<?php 

    include_once "Conexao.php";
    include_once "../model/DTO/TutorialDTO.php";

    class TutorialDAO{
        public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function salvarTutorial(TutorialDTO $tutorialDTO)
    {
        try {
            //var_dump($usuarioDTO);
            $sql = "INSERT INTO tutoriais (nome, tutorial) VALUES (? ,?)";

            $stmt = $this->pdo->prepare($sql);

            $nome = $tutorialDTO->getNome();
            $tutorial = $tutorialDTO->getTutorial();


            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $tutorial);
            
            $retorno = $stmt->execute();

            return $retorno;

            //var_dump($retorno);

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }

    }


?>