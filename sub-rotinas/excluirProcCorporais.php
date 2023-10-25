<?php

include_once  "../classes/conexao.php";
include_once "../classes/procedimentosCorporais.php";

$c=new conexao();

$conexao = $c->conectar();
 
 if(isset($_GET["id_proc"]) && !empty($_GET["id_proc"])){

  $p = new procedimentosCorporais();

  $id_proc = $_GET["id_proc"];

  if($p->excluirProcCorporais($id_proc) == true ){

    
    header("location: ../view/procedimentosCorporais.php?mensagem=Procedimento excluído com sucesso");
    exit();
   


   
  } else {

    echo "errrroou";
  }
 }
 
 ?>