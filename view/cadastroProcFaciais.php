<?php

include_once "../classes/conexao.php";
include_once "../classes/procedimentosFaciais.php";
include_once "../classes/usuarios.php";

$c = new conexao();

$conexao = $c->conectar();



?>






<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar procedimentos faciais</title>
        <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">
  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link rel="stylesheet" href="../css/index.css">
          <link rel="stylesheet" href="../css/faciais.css">
          <link rel="stylesheet" href="../css/login.css">
          
     <!--fonts-->
  
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  

    <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
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
<body>

  <header>
    <div class="container" id="nav-container" >
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <a id="logo" href="index.html" class="navbar-brand"> 
                <img id="logo" src="../img/maiara_estetica/logo2.png" alt="not found">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <div class="collapse navbar-collapse justify-content-end" style="float: left;"id="navbar-links" style="margin-right: 5%;">
                
            <a class="nav-item nav-link"   id="about-menu" style="color: rgb(238, 94, 10);" href="ambiente.php" >Ambiente</a>
                    
                    <div class="dropdown">
                    
                    <a class="nav-item nav-link dropdown-toggle"  data-toggle="dropdown"  id="services-menu"  style="color: rgb(219, 207, 32)" href="#">Procedimentos</a>
              
                    <div class="dropdown-menu">
                  <a class="dropdown-item" href="procedimentosFaciais.php">Procedimentos Faciais</a>
                  <a class="dropdown-item" href="ProcedimentosCorporais.php">Procedimentos corporais</a>
                      </div>
                    </div>
                   
                   <?php

                    $u = new usuarios();
                    if(isset($_SESSION['usuario'])){
              $sessao = $_SESSION['usuario'];

              $sql = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";
              $result = mysqli_query($conexao, $sql);

              while($rows =mysqli_fetch_assoc($result)):

                if($rows["email"] == $sessao):
              
              ?>
                
                                
                  <div class="dropdown">
                                  
                  <a class="nav-item nav-link dropdown-toggle "  data-toggle="dropdown"  style="font-size: 18px; color: rgb(90, 160, 90)" href="login.html">Login </a>
                  
                  
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">Sair</a>
                  </div>
              </div>
              <?php

                endif;
              endwhile;

              } else {

              ?>
                <a class="nav-item nav-link"  style="font-size: 18px; color: rgb(90, 160, 90)" href="../login.php">Login </a>
                  
              <?php
              }


              ?>
            </div>
            
        </nav>
        </div>
    </header>


   
      <div class="container" >
        <div class="row">
        <div class="col-12" style="padding-top: 2%;">
    <h4 class="main-title">Cadastro</h4>

   </div>
          <div class="col-md-12" >
          

            <form action="../sub-rotinas/cadastrarProcfaciais.php" style="margin-top: -2%;" method="post" enctype="multipart/form-data" >
                <div class="col-12" id="title">
                <h2 >Procedimentos Faciais</h2>
                </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Nome</label>
                <input type="text" class="form-control" name="nome_proc" id="tituloFacial">
               </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Descrição</label>
                <textarea class="form-control" name="desc_proc" id="tituloFacial" rows="5"></textarea>
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



