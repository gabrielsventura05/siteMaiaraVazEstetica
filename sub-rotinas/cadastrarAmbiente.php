<?php

include "../classes/conexao.php";
include "../classes/Ambiente.php";

$c =  new conexao();
$conexap = $c->conectar();


if (isset($_FILES["arquivo2"]) && !empty($_FILES["arquivo2"])){
    $a = new ambiente();

    $img_amb = $_FILES['arquivo2'];
    

  $destino = "../img/maiara_estetica/ambiente_banco/".$img_amb['name'];

  

  move_uploaded_file($img_amb["tmp_name"], $destino);

  if ($a->cadastrarAmbiente($destino) == true) {

 header("location: ../view/ambiente.php?mensagem=Imagem inserida com sucesso");
  } else {

    echo "imagem nao inserida";
  }

}
  