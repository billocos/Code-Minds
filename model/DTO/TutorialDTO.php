<?php 

    class TutorialDTO{
        private $titulo;
        private $id;
        private $conteudo;
        private $descricao;
        private $id_usuario;

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
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao ;
        
        }
        public function setIdUsuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
        
        public function getIdUsuario(){
            return $this->id_usuario;
        }
        
    }








?>