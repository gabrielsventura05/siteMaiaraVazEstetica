<?php

include "../classes/conexao.php";
include "../classes/procedimentosCorporais.php";

$c= new conexao();

$conexao = $c->conectar();


if(isset($_POST['cadastrar']) ){

    
    $p = new procedimentosCorporais();
  
    $nome_proc = addslashes($_POST['nome_proc']);
    $desc_proc = addslashes($_POST['desc_proc']);
    $img_proc = $_FILES['img_proc'];
    var_dump($img_proc);
    //destino da imagem
    $destino = "../img/maiara_estetica/procedimentos/corporais_banco/".$img_proc['name'];

    move_uploaded_file($img_proc['tmp_name'], $destino);

    if($p->cadastrarProcedimentoCorporal($nome_proc, $desc_proc, $destino) == true){

      header("location: ../view/procedimentosCorporais.php?mensagem=Procedimento cadastrado com sucesso");

    } else {

      echo "erro";
    }


    
}


?>