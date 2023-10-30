<?php


include "classes/conexao.php";
include "classes/usuarios.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/icone_sem_fundo.png" type="image/x-icon">

      <title>Login</title>
     
     <!--estilos-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/login.css">


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
 <header>
        <div class="container" id="nav-container" >
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" >
                <a id="logo" href="index.php" class="navbar-brand"> 
                    <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                  <a class="nav-item nav-link "   id="home-menu" href="#">Sobre mim</a>
                        
                        
                        
                  <a class="nav-item nav-link"   id="about-menu" style="color: rgb(238, 94, 10);" href="ambiente.php" >Ambiente</a>
                  
                 
                  <div class="dropdown">
                                  
                  <a class="nav-item nav-link   dropdown-toggle"    id="services-menu" data-toggle="dropdown" style="color: rgb(219, 207, 32)" href="#"> Procedimentos</a>
                
                  
                  <div class="dropdown-menu">
                  <a class="dropdown-item"  style="color: rgb(219, 207, 32)"  href="">Procedimentos Faciais</a>
                  <a class="dropdown-item" style="color: rgb(219, 207, 32)" href="sair.php">Procedimentos Corporais</a>
                  </div>
              </div>
                
          
                  
                  <a class="nav-item nav-link "   style="font-size: 18px; color: rgb(90, 160, 90)" href="login.html">Login </a>
            </div>
                

                
            </nav>
        </div>
        </header>

      
    <div id="login">
      <div class="container" style="padding-bottom: 10%; justify-content: center;">

        <?php

        if (!empty($_POST{"email"}) && !empty($_POST["senha"])){

          $u = new usuarios();
          $email = addslashes($_POST["email"]);
          $senha = md5(addslashes($_POST["senha"]));

          
          
          if($u->login($email, $senha) == true) {
            
            
            header("location: index.php");
          }

          else {

            echo "email ou senha errados";
          }
        }

        ?>

        <div class="row">
          <div class="col-sm-12 ">
            <form action="login.php"  method="post" enctype="multipart/form-data">
                <div class="col-12" id="title">
                <h2 >LOGIN</h2>
                </div>
                <div class="form-group form-outline form-white mb-4" id="input1" >
                  <label for="exampleFormControlInput1" >Email</label>
              
                  <input type="text" class="form-control" name="email" id="tituloFacial" placeholder="email">
               
                 
                </div>
                <div class="form-group" id="input2" >
                <label for="exampleFormControlInput1" >Senha</label>
                <input type="password" class="form-control" name="senha" id="tituloFacial" placeholder="senha">
               </div>
             
  
             
  
              <div class="form-group" id="botao">
                 <input type="submit" class="btn btn-success" value="Entrar">
              </div>


          <div class="form-group" id="texto">
              <p>Se não tiver cadastro, <a style="margin-left:; padding-top: 10%; color: black;"
               href="cadastrarUsuario.php">clique aqui</a>
            </div>

              </form>
            </div>

          
        </div>
      </div>
    </div>



   
      
                 
</body>
</html>