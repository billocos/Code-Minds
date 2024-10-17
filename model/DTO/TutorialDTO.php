<?php 

    class TutorialDTO{
        private $nome;
        private $id;
        private $tutorial;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id ;
        }

        public function setTutorial($tutorial){
            $this->tutorial = $tutorial;
        }
        public function getTutorial(){
            return $this->tutorial ;
        
        }

    }








?>