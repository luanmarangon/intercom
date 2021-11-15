<?php

// session_start();

class Conexao{
	
	private $con;
	
	public function __construct(){
		//adaptacao para o linux e xamp - conexao com o banco
		$linux = true;
		if ($linux == true) {
			$this->con = new PDO("mysql:host=localhost; dbname=intercom", "root", "M4r4ng0n");		
		} else {
			$this->con = new PDO("mysql:host=localhost; dbname=intercom", "root", "");		
		}
	}

	public function getCon(){
		return $this->con;
	}
	

}
//codigo original 
/*
class Conexao{
	
	private $con;
	
	public function __construct(){
		$this->con = new PDO("mysql:host=localhost; dbname=intercom", "root", "");		
	}

	public function getCon(){
		return $this->con;
	}
	

} */

?>