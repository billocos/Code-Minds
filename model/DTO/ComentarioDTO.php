<?php


    class ComentarioDTO{
        private $comentario;
        private $id;
    
        

        public function setComentario($comentario){
            $this->comentario = $comentario;
        }
        public function getComentario(){
            return $this->comentario ;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id ;
        }
    }
        
?>