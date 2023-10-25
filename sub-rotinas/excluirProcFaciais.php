<?php

include_once  "../classes/conexao.php";
include_once "../classes/procedimentosFaciais.php";

$c=new conexao();

$conexao = $c->conectar();
 
 if(isset($_GET["id_proc"]) && !empty($_GET["id_proc"])){

  $p = new procedimentosFaciais();

  $id_proc = $_GET["id_proc"];

  if($p->excluirProcFaciais($id_proc) == true ){

    
    header("location: ../view/procedimentosFaciais.php?mensagem=Excluido com sucesso");
    exit();
   


   
  } else {

    echo "errrroou";
  }
 }
 
 ?>