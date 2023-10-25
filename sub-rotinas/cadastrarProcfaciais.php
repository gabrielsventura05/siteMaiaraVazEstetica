<?php

include "../classes/conexao.php";
include "../classes/procedimentosFaciais.php";

$c= new conexao();

$conexao = $c->conectar();


if(isset($_POST['cadastrar']) ){

    
      $p = new procedimentosFaciais();
    
      $nome_proc = addslashes($_POST['nome_proc']);
      $desc_proc = addslashes($_POST['desc_proc']);
      $img_proc = $_FILES['img_proc'];
      var_dump($img_proc);
      //destino da imagem
      $destino = "../img/maiara_estetica/procedimentos/faciais_banco/".$img_proc['name'];
  
      move_uploaded_file($img_proc['tmp_name'], $destino);
  
      if($p->cadastrarProcedimentoFacial($nome_proc, $desc_proc, $destino) == true){
  
        header("location: ../view/procedimentosfaciais.php?mensagem=Procedimento cadastrado com sucesso");
  
      } else {
  
        echo "erro";
      }
  
  
      
      
  
    }
  
?>