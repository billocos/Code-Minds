<?php


    class ComentarioDTO{
        private $comentario;
        private $id_comentario;
        private $id_tutorial;
        private $id_usuario;
    
        

        public function setComentario($comentario){
            $this->comentario = $comentario;
        }
        public function getComentario(){
            return $this->comentario ;
        }
        public function setIdComentario($id_comentario){
            $this->id_comentario = $id_comentario;
        }
        public function getIdComentario(){
            return $this->id_comentario ;
        }
        public function setIdTutorial($id_tutorial){
            $this->id_tutorial = $id_tutorial;
        }
        
        public function getIdTutorial(){
            return $this->id_tutorial;
        }
        
        public function setIdUsuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
        
        public function getIdUsuario(){
            return $this->id_usuario;
        }
    }
        
?>