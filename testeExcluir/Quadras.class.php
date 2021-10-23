<?php

    class Quadras{
        private $id;
        private $quadra;
    
        public function __construct($quadra){
            $this->quadra = $quadra;            
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getQuadra(){
            return $this->quadra;
        }
        public function setQuadra($quadra){
            $this->quadra = $quadra;
        }  
    }
?>