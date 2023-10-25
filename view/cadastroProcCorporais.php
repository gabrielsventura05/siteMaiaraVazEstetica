
<?php
session_start();

  include "../classes/conexao.php";
  include "../classes/usuarios.php";

  $c = new conexao();

  $conexao = $c->conectar();

  
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Procedimentos</title>
        <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">
  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
     <link rel="stylesheet" href="../css/faciais.css">
     <link rel="stylesheet" href="../css/login.css">
     
     <?php

     include "scriptsecss.php";

     include "menu.php";
     ?>

<div class="container" >
        <div class="row">
        <div class="col-12">
    <h4 class="main-title">Cadastro</h4>

   </div>
          <div class="col-md-12" >
          

            <form action="../sub-rotinas/cadastrarProcCorporal.php" style="margin-top: -2%;" method="post" enctype="multipart/form-data" >
                <div class="col-12" id="title">
                <h2 >Procedimentos corporais</h2>
                </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Nome</label>
                <input type="text" class="form-control" name="nome_proc" id="tituloFacial">
               </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Descrição</label>
                <textarea class="form-control" name="desc_proc" id="tituloFacial" rows="3"></textarea>
               </div>
                
                

               <div class="form-group" style="margin-left: 12%;">
                <label for="exampleFormControlFile1">imagem do procedimento</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_proc">
                 </div>
  
              <div class="form-group" id="botao">
                 <input type="submit" class="btn btn-success" name="cadastrar" value="Enviar">
              </div>
              </form>
            </div>

          </div>
          
        </div>
      </div>
    </div>
    
</body>
</html>



