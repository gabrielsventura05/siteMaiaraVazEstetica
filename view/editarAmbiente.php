<?php

session_start();
require_once "../classes/conexao.php";
require_once "../classes/ambiente.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
 <header>
        <div class="container" id="nav-container" >
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" >
                <a id="logo" href="" class="navbar-brand"> 
                    <img id="logo" src="../img/maiara_estetica/logo2.png" alt="not found">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                  <a class="nav-item nav-link "   id="home-menu" href="#">Sobre mim</a>
                        
                        
                        
                  <a class="nav-item nav-link"   id="about-menu" style="color: rgb(238, 94, 10);" href="#" >Sobre a empresa</a>
                  
                 
                  
                  <a class="nav-item nav-link "    id="services-menu"  style="color: rgb(219, 207, 32)" href="#">Ambiente e procedimentos</a>
                
                  
                
                
          
                  
                  <a class="nav-item nav-link "   style="font-size: 18px; color: rgb(90, 160, 90)" href="login.html">Login </a>
            </div>
                

                
            </nav>
        </div>
        </header>

      
    <div id="login">
      <div class="container" style="padding-bottom: 10%; justify-content: center;">

      <!--BUSCA O ID PARA RETORNAR OS DADOS NO FORMULARIO DE ATUALIZAÇÃO-->
        <?php

        if (isset($_GET["id_amb"]) && !empty($_GET["id_amb"])){

          echo "encontrado";

          $c = new conexao();

          $conexao = $c->conectar();
          $a = new ambiente();

          $sql = "SELECT * from ambiente where id_amb = ".$_GET["id_amb"];
         
          $result = mysqli_query($conexao, $sql);

          $row = mysqli_fetch_assoc($result);
          $id_amb = $row["id_amb"];

          $img_amb = $row["img_amb"];

        }
        
?>



        

        

        <div class="row">
          <div class="col-sm-12 ">
            <form action="../sub-rotinas/atualizarAmbiente.php"  method="post" enctype="multipart/form-data">
                <div class="col-12" id="title">
                <h2 >Ambiente</h2>
                </div>
                
                <div class="form-group form-outline form-white mb-4" id="input1" >
                  <label for="exampleFormControlInput1" >imagem</label>
              
                 
                </div>
                <div class="form-group" id="input2" >
                <input type="file" name="img_ambU" id="">
                </div>
 
 
  
      
  
              <div class="form-group" id="botao">
                <input type="hidden" name="id_amb" value="<?php echo $id_amb; ?>">
                 <input type="submit" class="btn btn-success" name="update" value="enviar">
              </div>


          <div class="form-group">
               <a style="margin-left: 11%; padding-top: 10%; color: black;" href="ambiente.php">voltar</a>
            
            </div>
            </form>
            </div>

          
        </div>
      </div>
    </div>



   
      
                 
</body>
</html>

