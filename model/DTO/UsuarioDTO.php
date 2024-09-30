<?php 

    class UsuarioDTO{
        private $nome;
        private $senha;
        private $id;
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id ;
        }
    }

?>