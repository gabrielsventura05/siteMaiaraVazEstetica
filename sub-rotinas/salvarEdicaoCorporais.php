<?php
include "../classes/conexao.php";
include "../classes/procedimentosCorporais.php";

$c= new conexao();

$conexao = $c->conectar();

if(!empty($_POST["update"])){

    $p = new procedimentosCorporais();


    $id_proc = $_POST["id_proc"];
    $nome_proc = $_POST["nome_procU"];
    $desc_proc= $_POST["desc_procU"];

    $img_procU = $_FILES["img_procU"];
    $destino2 = "../img/maiara_estetica/procedimentos/corporais_banco/".$img_procU['name'];

   
    move_uploaded_file($img_procU['tmp_name'], $destino2);

   
    if($p->atualizarProcCorporais($id_proc, $nome_proc, $desc_proc, $destino2) == true){

        header("location: ../view/procedimentosCorporais.php?mensagem=Procedimento atualizado com sucesso");
    }

}




?>