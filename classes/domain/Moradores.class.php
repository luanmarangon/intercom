<?php

	class Moradores{
		private $id;
		private $nome;
		private $cpf;
		private $telefone;
		private $celular;
		private $email;
		private $senha;
		private $ativo;

		public function __construct($nome, $cpf, $telefone, $celular, $email, $senha, $ativo){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->celular = $celular;
			$this->email = $email;
			$this->senha = $senha;
			$this->ativo = $ativo;
		}

		public function getId(){
			return $this->id;
		}
		public function setID($id){
			$this->id = $id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function setCpf($cpf){
			$this->cpf = $cpf;
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
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		public function getativo(){
			return $this->ativo;
		}
		public function setAtivo($ativo){
			$this->ativo = $ativo;
		}
	}
?>
