<?php

    class Users{
        private $id;
        private $login;
        private $senha;
        private $email;
        private $nome;
        private $perfil;
        private $ativo;

        public function __construct($login, $senha, $email, $nome, $perfil, $ativo){
            $this->login = $login;
            $this->senha = $senha;
            $this->email = $email;
            $this->nome = $nome;
            $this->perfil = $perfil;  
            $this->ativo = $ativo;          
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($login){
            $this->login = $login;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPerfil(){
            return $this->perfil;
        }
        public function setPerfil($perfil){
            $this->perfil = $perfil;
        }
        public function getAtivo(){
            return $this->ativo;
        }
        public function setAtivo($ativo){
            $this->ativo = $ativo;
        }
    }
?>