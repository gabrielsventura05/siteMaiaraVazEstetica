<?php


  include "../classes/conexao.php";
  include "../classes/ambiente.php";
include "../classes/usuarios.php";

  $c = new conexao();

  $conexao = $c->conectar();

  

  
  
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente</title>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/ambiente.css">
    
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
      
      <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
     
    </head>
    <body>
       
        
  <?php
include "menu.php";
  ?>
     <!--sessão sobre a empresa-->
     <div id="services-area">
      <div class="container-fluid">


        <div class="row">
          <div class="col-12">
            <h1 class="main-title-ambiente" style="margin-top: 10%;">Ambiente</h1>



  

<?php
if (isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
  ?>
 <div class="alert alert-success " role="alert">
 
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
 <?php
  echo $_GET["mensagem"];
  
  
  ?>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
</button>



</div>

  <?php
}
?>



            <div style="justify-content: left; margin-bottom: 5%;">

            <form action="../sub-rotinas/cadastrarAmbiente.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <input id="file" type="file" class="form-control-file" name="arquivo2" >
        
            </div>
            <div class="form-group">
            <input type="submit" value="Adicionar" class="btn btn-success">
            </div>
            </form>
      
         </div>
          </div>
            
         
          <?php

$sql = "SELECT id_amb, img_amb from ambiente ORDER BY id_amb desc  ";

  $result = mysqli_query($conexao, $sql);
while($rows=mysqli_fetch_assoc($result)):
?>
         


          <div class="col-md-3 project-box dev">
 
 

 <img src=" <?php echo $rows["img_amb"]; ?>" class="img-fluid" alt="" srcset="">

 <?php

if(isset($_SESSION['usuario'])){
$sessao = $_SESSION['usuario'];
  
  $sql2 = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";
  $result2 = mysqli_query($conexao, $sql2);

  while($rows2=mysqli_fetch_assoc($result2)):
 if($rows2["email"] == "admin@hotmail.com"):

  ?>

  
  
  



 

 <div style="display: flex; justify-content: space-between; vertical-align: center">

              
              <a id="excluir" class="btn btn-warning disply: flex; vertical-align: middle;" href="editarAmbiente.php?id_amb=<?php echo $rows["id_amb"];?>">
            
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
            </a>

              <a id="excluir" class="btn btn-danger" href="../sub-rotinas/excluirAmbiente.php?id_amb=<?php echo $rows["id_amb"]?> " >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
            
            </a>

              
  


            
 </div>

          <?php
    
    endif; 
  endwhile;
  }

 ?>
 
 
 </div>       

<?php
endwhile;
?>


  
  </body>

</html>

