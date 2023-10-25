<?php

include "../classes/conexao.php";

include "../classes/ambiente.php";

        $c= new conexao();

        $conexao = $c->conectar();
      //-------ATUALIZAR-------
    if(!empty($_POST["update"])){
 

 $a = new ambiente();
  
  
 
  $id_amb = $_POST["id_amb"];
  $img_ambU = $_FILES["img_ambU"];
 
  var_dump($img_ambU);
  $destino2 = "../img/maiara_estetica/ambiente_banco/".$img_ambU["name"];
  move_uploaded_file($img_ambU["tmp_name"], $destino2);

  
  if($a->atualizarAmbiente($id_amb, $destino2) == true) {

    header("location: ../view/ambiente.php?mensagem=Imagem atualizada com sucesso");
  } else {

    echo "erro";
  }
  
  }



?>
