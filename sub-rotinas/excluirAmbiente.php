<?php

include_once  "../classes/conexao.php";
include_once "../classes/ambiente.php";

$c=new conexao();

$conexao = $c->conectar();
 
 if(isset($_GET["id_amb"]) && !empty($_GET["id_amb"])){

  $a = new ambiente();

  $id_amb = $_GET["id_amb"];

  if($a->excluirAmbiente($id_amb) == true ){

    
    header("location: ../view/ambiente.php?mensagem=Imagem excluida com sucesso");
    exit();
   


   
  } else {

    echo "errrroou";
  }
 }
 
 ?>