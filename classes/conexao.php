<?php

class conexao {

	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "maiaraestetica";

	public function conectar(){

		//a palavra this serve para deixar as variaveis privadas serem reconhecidas pelas funcoes que estao na mesma classe, se uma variavel externa for passada, a funcao nao reconhece
		//obs: na funcao nao precisa nao precisa o cifrao antes da variavel, porque o this ja identifica
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;

		echo $conexao;

       
		
	}

}

?>
