<?php 

    class UsuarioDTO{
        private $nome;
        private $senha;
        private $id;
        private $email;
        private $tel;
        private $tipo;

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
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setTel($tel){
            $this->tel = $tel;
        }
        public function getTel(){
            return $this->tel;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
    }

?>