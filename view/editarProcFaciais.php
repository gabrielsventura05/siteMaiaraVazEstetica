<?php


require_once "../classes/conexao.php";
require_once "../classes/procedimentosFaciais.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar procedimentos faciais</title>
    <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">

       
     <!--estilos-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/login.css">


<!--fonts-->
  
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  

<!--scripts-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" 
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="js/scripts.js"></script>
  
</head>
<body >

  <?php
include "menu.php";
  ?>
      
    <div id="login">
      <div class="container" style="padding-bottom: 10%; justify-content: center;">

      

           
    <?php
        if (isset($_GET["id_proc"]) && !empty($_GET["id_proc"])){

         
          $c = new conexao();

          $conexao = $c->conectar();
          $p = new procedimentosFaciais();

          $sql = "SELECT * from procedimentosfaciais where id_proc = ".$_GET["id_proc"];
         
          $result = mysqli_query($conexao, $sql);

          $row = mysqli_fetch_assoc($result);

          $id_proc = $row["id_proc"];
          $nome = $row["nome_proc"];
          $desc_proc = $row["desc_proc"];

          $imagem = $row["img_proc"];
        }
          ?>

         

          <div class="row">
          <div class="col-sm-12 ">
            <form action="../sub-rotinas/salvarEdicaoFaciais.php"  method="post" enctype="multipart/form-data">
                <div class="col-12" id="title">
                <h2 >Procedimento Facial</h2>
                </div>
                
                <div class="form-group form-outline form-white mb-4" id="input1" >
                <label for="exampleFormControlInput1" >Nome</label>
                
                <input type="text" value="<?php  echo  $nome; ?>" class="form-control" name="nome_procU" id="tituloFacial">
           </div>
           <div class="form-group form-outline form-white mb-4" id="input1" >
                <label for="exampleFormControlInput1" >Descrição</label>
                <textarea  type="text" class="form-control"  name="desc_procU" id="tituloFacial" rows="5"><?php echo $desc_proc; ?></textarea>
             </div>
           <div class="form-group form-outline form-white mb-4" id="input1">
                <label for="exampleFormControlInput1" >imagem</label>
                <label style="display: flex; justify-content: center;" for=""><img src="<?php echo $imagem; ?>"style="width: 50%;" alt="" srcset=""></label>
           </div>

                <div class="form-group" id="input2" >
                <input type="file" name="img_procU" id="">
                </div>
 
 
  
      
  
              <div class="form-group" id="botao">
                <input type="hidden" name="id_proc" value="<?php echo $id_proc?>">
                 <input type="submit" class="btn btn-success" name="update"  value="enviar">
              </div>


          <div class="form-group" style="margin-left: 12%; ">
               <a style="color: black;" href="ambiente.php">voltar</a>
            
            </div>
            </form>
            </div>

          
        </div>    
      </div>
    </div>


    

        
      
                 
</body>
</html>

