<?php

session_start();
include_once "../classes/conexao.php";
include_once "../classes/usuarios.php";

$c = new conexao();

$conexao = $c->conectar();
?>

<link rel="stylesheet" href="../index.css">
  <header>
    <div class="container" id="nav-container" >
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <a id="logo" href="../index.php" class="navbar-brand"> 
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
                  <a class="dropdown-item" href="procedimentosFaciais.php" style="color: rgb(219, 207, 32)">Procedimentos Faciais</a>
                  <a class="dropdown-item" href="ProcedimentosCorporais.php" style="color: rgb(219, 207, 32)">Procedimentos corporais</a>
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
                    <a class="dropdown-item" href="../sair.php">Sair</a>
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