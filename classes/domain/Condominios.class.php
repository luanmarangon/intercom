<?php

    class Condominios{
        private $id;
        private $nome;
        private $prefixo;
        private $contato;
        private $telefone;
        private $celular;
        private $anexo;
        private $ativo;

        public function __construct($nome, $prefixo, $contato, $telefone, $celular, $anexo, $ativo){
            $this->nome = $nome;
            $this->prefixo = $prefixo;
            $this->contato = $contato;
            $this->telefone = $telefone;
            $this->celular = $celular;
            $this->anexo = $anexo;          
            $this->ativo = $ativo;  
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPrefixo(){
            return $this->prefixo;
        }
        public function setPrefixo($prefixo){
            $this->prefixo = $prefixo;
        }
        public function getContato(){
            return $this->contato;
        }
        public function setContato($contato){
            $this->contato = $contato;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function getAnexo(){
            return $this->anexo;
        }
        public function setAnexo($anexo){
            $this->anexo = $anexo;
        }
        public function getAtivo(){
            return $this->ativo;
        }
        public function setAtivo($ativo){
            $this->ativo = $ativo;
        }
    }
?>