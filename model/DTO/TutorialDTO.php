<?php 

    class TutorialDTO{
        private $titulo;
        private $id;
        private $conteudo;

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id ;
        }

        public function setConteudo($conteudo){
            $this->conteudo = $conteudo;
        }
        public function getConteudo(){
            return $this->conteudo ;
        
        }

    }








?>