<?php   

    class AreasComuns{
        private $id;
        private $ramal;
        private $senha;
        private $areacomum;
        private $condominiosid;

        public function __construct($ramal, $senha, $areacomum, $condominiosid){
            $this->ramal = $ramal;
            $this->senha = $senha;
            $this->areacomum = $areacomum;            
            $this->condominiosid = $condominiosid;
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
        public function getAreacomum(){
            return $this->areacomum;
        }
        public function setAreacomum($areacomum){
            $this->areacomum = $areacomum;
        }
        public function getCondominiosid(){
            return $this->condominiosid;
        }   
        public function setCondominiosid($condominiosid){
            $this->condominiosid = $condominiosid;
        }
    }
?>