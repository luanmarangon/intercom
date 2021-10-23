<?php
    class Ramais{
        private $id;
        private $ramal;
        private $senha;
        private $alocado;
        private $enderecogrupo;

        public function __construct($ramal, $senha, $alocado, $enderecogrupo){
            $this->ramal = $ramal;
            $this->senha = $senha;
            $this->alocado = $alocado;
            $this->enderecogrupo = $enderecogrupo;
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getRamal(){
            return $this->ramal;
        }
        public function setRamal($ramal){
            $this->ramal = $ramal;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getAlocado(){
            return $this->alocado;
        }
        public function setAlocado($alocado){
            $this->alocado = $alocado;
        }
        public function getEnderecogrupo(){
            return $this->enderecogrupo;
        }
        public function setEnderecogrupo($enderecogrupo){
            $this->enderecogrupo = $enderecogrupo;
        }
    }

?>