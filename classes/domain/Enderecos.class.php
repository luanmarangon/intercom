<?php

    class Enderecos{
        private $grupo;
        private $logradouro;
        private $numero;
        private $complemento;
        private $cidade;
        private $moradoresid;
        private $condominiosid;

        public function __construct($grupo, $logradouro, $numero, $complemento, $cidade, $moradoresid, $condominiosid){
            $this->grupo = $grupo;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->cidade = $cidade; 
            $this->moradoresid = $moradoresid;
            $this->condominiosid = $condominiosid;
        }

        public function getGrupo(){
            return $this->grupo;
        }
        public function setGrupo($grupo){
            $this->grupo = $grupo;
        }
        public function getLogradouro(){
            return $this->logradouro;
        }
        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
            $this->numero = $numero;
        }
        public function getComplemento(){
            return $this->complemento;
        }
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function getMoradoresid(){
            return $this->moradoresid;
        }
        public function setMoradoresid($moradoresid){
            $this->moradoresid = $moradoresid;
        }
        public function getCondominiosid(){
            return $this->condominiosid;
        }
        public function setCondominiosid($condominiosid){
            $this->condominiosid = $condominiosid;
        }
    }


?>