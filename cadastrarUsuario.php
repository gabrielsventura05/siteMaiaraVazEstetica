<?php

include "classes/conexao.php";
include "classes/usuarios.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="img/icone_sem_fundo.png" type="image/x-icon">

       
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
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <a id="logo" href="../index.php" class="navbar-brand"> 
                <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
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
                  <a class="dropdown-item" href="view/procedimentosFaciais.php" style="color: rgb(219, 207, 32)">Procedimentos Faciais</a>
                  <a class="dropdown-item" href="view/ProcedimentosCorporais.php" style="color: rgb(219, 207, 32)">Procedimentos corporais</a>
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
                    <a class="dropdown-item" href="../sair .php">Sair</a>
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

      
    <div id="login">
      <div class="container" style="padding-top: 10%;">

<?php

if (!empty($_POST["nome_usuario"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){

  $u = new usuarios();

  
$nome_usuario = addslashes($_POST["nome_usuario"]);
$email = addslashes($_POST["email"]);
$senha = md5(addslashes($_POST["senha"]));


if($u->cadastrarUsuarios($nome_usuario, $email, $senha) == true){

  ?>
  <div style="width: 50%; margin: auto;" id="alerta" class="alert alert-success">
    Cadstrado!
  </div>

  <?php
}



}

?>
        
        <div class="row">
          <div class="col-sm-12 ">
            <form action="cadastrarUsuario.php" method="post" enctype="multipart/form-data">
                <div class="col-12" id="title">
                <h2 >cadastro</h2>
                </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Nome</label>
                <input type="text" class="form-control" name="nome_usuario" id="tituloFacial">
               </div>

                <div class="form-group form-outline form-white mb-4" id="input1" >
                  
                <label for="exampleFormControlInput1" >Email</label>
                <input type="text" class="form-control" name="email" id="tituloFacial">
               </div>
                
                   <div class="form-group" id="input1" >
                <label for="exampleFormControlInput1" >Senha</label>
                <input type="password" class="form-control" name="senha" id="tituloFacial">
               </div>

               
             
  
             
  
              <div class="form-group" id="botao">
                 <input type="submit" class="btn btn-success" value="Enviar">
              </div>
              </form>
            </div>

          
        </div>
      </div>
    </div>

   
      
                 
</body>
</html>