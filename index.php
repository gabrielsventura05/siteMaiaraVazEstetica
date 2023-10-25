<?php

session_start();
include_once "classes/conexao.php";
include_once "classes/usuarios.php";

$c = new conexao();

  $conexao = $c->conectar();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiara Vaz Esteticista</title>
    
     <link rel="shortcut icon" href="img/icone_sem_fundo.png" type="image/x-icon">
    
     <!--estilos-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
 integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="css/index.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,700&display=swap" rel="stylesheet">

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
   
    
    <header>
    <div class="container" id="nav-container" >
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <a id="logo" href="index.html" class="navbar-brand"> 
                <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <div class="collapse navbar-collapse justify-content-end" style="float: left;"id="navbar-links" style="margin-right: 5%;">
                
                    <a class="nav-item nav-link "   id="home-menu" href="#">Sobre mim</a>
                    
                    
                    
                    <a class="nav-item nav-link"   id="about-menu" style="color: rgb(238, 94, 10);" href="#" >Sobre a empresa</a>
                    
                   
                    
                    <a class="nav-item nav-link "    id="services-menu"  style="color: rgb(219, 207, 32)" href="#">Ambiente e procedimentos</a>
                  
                    <?php
                  
                    $u = new usuarios();

                    
                    if(isset($_SESSION['usuario'])){
              $sessao = $_SESSION['usuario'];

              $sql = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";
              $result = mysqli_query($conexao, $sql);

              if($rows =mysqli_fetch_assoc($result)):

                if($rows["email"] == $sessao):
              
              ?>
                
                                
                  <div class="dropdown">
                                  
                  <a class="nav-item nav-link dropdown-toggle "  data-toggle="dropdown"  style="font-size: 18px; color: rgb(90, 160, 90)" href="login.html">Login </a>
                  
                  
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="sair.php">Sair</a>
                  </div>
              </div>
              <?php

                endif;
              endif;

              } else {

?>
  <a class="nav-item nav-link"  style="font-size: 18px; color: rgb(90, 160, 90)" href="login.php">Login </a>
    
<?php
}


?>
            </div>
            
        </nav>
    </div>
    </header>
    <main>
        

            <!--sessão sobre a empresa-->
            <div id="about-area" >
              <div class="container">
                <div class="row"> <!--classe das linhas-->
                  <div class="col-12"><!--numro de colunas-->

                    <h3 class="main-title">Sobre mim</h3>
                  </div>
                  <div class="col-md-6" ><!--numro de colunas para tela de tamanha medio, define da div interna-->
                    <img class="img-fluid" src="img/maiara_estetica/maiara1.png"  alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

                  </div>
                  <div class="col-md-6" style="margin-left: -3%;"><!--numro de colunas para tela de tamanha medio-->
                    <h2 class="about-title" style="text-align: center;">Maiara Vaz</h2>
                    <p style="text-align: justify; line-height: 2; font-size: 18px; margin-top: 5%;">Olá, Meu nome é Maiara, tenho 28 anos, sou bacharel em em Estética e Cosmetologia pela
                    Fundação Hermínio Ometto Uniararas. <br><br>Especialista em massagens terapêuticas, limpeza de 
                    pele e demais tratamentos faciais não invasivos.</p>
                    
                    
                    
                  </div>

                </div>

              </div>

            </div>

           <!--margin-top: positivo mais longe do topo , negativo mais perto do topo-->
            <div id="about-area2">
              <div class="container" id="section" >
                <div class="row"> <!--classe das linhas-->
                
                  
                  <div class="col-md-6" id="section" ><!--numro de colunas para tela de tamanha medio-->
                    <h4 >Como você se identificou com a área?</h4>
                    <p  style="font-family: 'Playfair Display', serif;">Me apaixonei pelas massagens terapêuticas no 
                      primeiro contatocom as terapias manuais, daí em diante, descobri que meu propósito de vida
                      é levar mais cuidado, saúde e bem-estar, proporcionando assim, uma vida melhor para as pessoas.
                     </p>
                   
                    </div>
                  
                  <!--ajustes da imagem, lateral: padding, posição altura: margin e tamanho: width-->
                  <div class="col-md-6" style=" padding-left: 15%; margin-top: -4%;"><!--numro de colunas para tela de tamanha medio, define da div interna-->
                    <img class="img-fluid"  id="img1" src="img/maiara_estetica/maiara2.png" style="width: 75%;"  alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

                  </div>
                  

                </div>

              </div>

            </div>

            

           <!--serviços da empresa-->

            <div id="services-area">
              <div class="container" >
                <div class="row">
                  <div class="col-12" id="title">
                    <h1 class="main-title">Ambiente e procedimentos</h1>
                  </div>
                  <div class="col-md-4 project-box dev" >
                  
                    <img src="img/maiara_estetica/ambiente/ambiente2 (2).jpg"  style=" max-width: 90%;  width: 250px; height: 330px;" class="img-fluid" alt="projeto 1">
                    <p  id="p1">Ambiente espaçoso, totalmente confortável.<br>
                      <a id="link" href="view/ambiente.php">veja mais >>></a></p>
                    
                  </div>
                  <div class="col-md-4 project-box dsg" >
                    
                    <img src="img/maiara_estetica/procedimentos/faciais/procedimento1.jpg" style=" width: 80%; width: 250px; height: 330px;" class="img-fluid" alt="projeto 1">
                    <p id="p1">Nossos procedimentos faciais<br>
                    <a id="link" href="view/procedimentosfaciais.php">veja mais >>></a></p>
                  </div>
                  <div class="col-md-4 project-box seo">
                    <img src="img/bambu4.jpg" style="width: 80%; width: 250px; height: 330px;"  class="img-fluid" alt="projeto 1">
                    <p id="p1"> Nossos procedimentos coporais<br>
                    <a id="link" href="view/procedimentosCorporais.php">veja mais >>></a></p>
                  </div>
                 
                 
                </div>
              </div>

              <div id="services-area" >
                <div class="container" >
                  <div class="row">
                    <div class="col-12">
                      <h1 class="main-title" style="margin-top: -5%;" >Valores</h1>
                    </div>
                    <div class="col-md-6 project-box dev"  >
         
                   
  
                      <p style="text-align: center; padding: 5% ;">Massagens</p>
                     
                      <table  class="table table-striped" >
                      
                        
                        <tr>
                           <td id="col1">Massagem comm Bambu</td>
                          <td id="col2">R$ 100,00 </td>
                        </div>
                        </tr>
                        <tr>
                          <td  id="col1">Massagem Relaxante</td>
                          <td id="col2">R$ 90,00 </td>
                        </tr>
                        <tr>
                          <td id="col1">Massagem Anti-Stress</td>
                          <td id="col2">R$ 90,00 </td>
                        </tr>
                        <tr>
                          <td id="col1">Massagem Modeladora</td>
                          <td id="col2">R$ 150,00 </td>
                        </tr>

                        <tr>
                          <td id="col1" >Massagem c/ pedras quentes</td>
                          <td id="col2">R$ 100,00 </td>
                        </tr>

                        <tr>
                          <td id="col1" >Massagem Shiatsu</td>
                          <td id="col2">R$ 100,00 </td>
                        </tr>

                        <tr>
                          <td id="col1" >Massagem Drenante</td>
                          <td id="col2">R$ 90,00 </td>
                        </tr>

                        <tr>
                          <td  id="col1">Massagem Linfática</td>
                          <td id="col2">R$ 100,00 </td>
                        </tr>

                        <tr>
                          <td  id="col1">Reflexologia Podal</td>
                          <td id="col2">R$ 80,00 </td>
                        </tr>

                        <tr>
                          <td id="col1">Spa Facial</td>
                          <td id="col2">R$ 80,00 </td>
                        </tr>




                      </table>
                    
                      
                    </div>
                    <div class="col-md-6 project-box dev">
                    
                      <p style="text-align: center; padding: 5% ;">Procedimentos</p>
                     
                      <table  class="table table-striped" >
                      
                        
                        <tr>
                           <td id="col1">Limpeza de Pele</td>
                          <td id="col2">R$ 110,00 </td>
                        </div>
                        </tr>
                        <tr>
                          <td  id="col1">Hidratção Facial</td>
                          <td id="col2">R$ 70,00 </td>
                        </tr>
                        <tr>
                          <td id="col1">Peeling de Diamante</td>
                          <td id="col2">R$ 100,00 </td>
                        </tr>
                        <tr>
                          <td id="col1">Dermaplaning</td>
                          <td id="col2">R$ 100,00 </td>
                        </tr>

                        <tr>
                          <td id="col1">Microagulhamento </td>
                          <td id="col2">R$ 250,00 </td>
                        </tr>

                        <tr>
                          <td id="col1" >Celulite</td>
                          <td id="col2">Pacote </td>
                        </tr>

                        <tr>
                          <td id="col1" >Redução de Medidas</td>
                          <td id="col2">Pacote </td>
                        </tr>

                        <tr>
                          <td  id="col1">Depilação</td>
                          <td id="col2">R$ 20,00 a R$ 100,00 </td>
                        </tr>

                        <tr>
                          <td  id="col1">Design de Sobrancelha</td>
                          <td id="col2">R$ 40,00 </td>
                        </tr>

                       



                      </table>
                    </div>

                    </div>
                  </div>
                  </div>
             

                 

    
        

      

      
        
    </main>

    
      <div id="contact-area" >
        <div class="container-fluid">
          <div class="row" >
            <div class="col-md-12">


              <h3 class="main-title">Área externa</h3>

            </div>
            <div class="col-md-3 project-box seo" style="margin-left: 12%;" >
            <img src="img/local/clinicaFora.jpeg" class="img-fluid" alt="projeto 1">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/local/clinicaFora2.jpg" class="img-fluid" alt="projeto 1">
          </div>
         
          <div class="col-md-3 project-box seo">
            <img src="img/local/clinicaFora4.jpg" class="img-fluid" alt="projeto 1">
          </div>

</div>
</div>
</div>


    <div id="contact-area">
        <div class="container-fluid">
          <div class="row" >
          <div class="col-md-12">


              <h3 class="main-title">Localização</h3>

            </div>

          <div class="col-md-12">


          <p style="font-size: 40px; color: red;"><i class="fas fa-map-marker-alt"></i></p><p style="font-size: 30px;">  R. Ângelo Trindade - Centro, Araras - SP, 13600-340</p>
            </div>

            <div class="col-md-12">
           
        
        <a  href="https://www.google.com/maps/place/Cl%C3%ADnica+Maiara+Vaz/@-22.3526674,-47.3806914,15z/data=!4m6!3m5!1s0x94c87775031152a3:0xcd26ae33afc79aaa!8m2!3d-22.3526674!4d-47.3806914!16s%2Fg%2F11rrpc6qhb?entry=ttu" 
        target="_blank"><img src="img/local/mapaMaiara.png"  alt="" srcset=""></a><br>
         </div>
      </div>
          </div>
        </div>
      
        <div id="contact-area" style="padding-bottom: 5%;">
        <div class="container-fluid" >
          <div class="row " >
            
      <div class="col-12">
           <h3 class="main-title">Contatos</h3>

      </div>
        
  <div class="col-6 " >

  
  <a href="https://wa.me//5519996765382"  target="_blank" > <p style="font-size: 30px; ">
    <i style="color: green" class="fa fa-whatsapp"></i>  +55 19 99676-5382</p></a>
  
</div>

<div class="col-6 ">
   <a href=""><p style="font-size: 30px;"><i class="fa fa-envelope" style="font-size: 30px; color: rgb(12, 73, 124);"></i>  
  maiaravaz46@gmail.com</p></a>

  </div>
 


</div>
</div>
</div>

          
            
            

        <!--RODAPÉ-->
      <div id="copy-area" style="padding-bottom: 5%;">
        <div class="container">
        <div class="row">
          
            <div class="col-12" style="margin-top: 2.5%; ">
              <p style=" font-size: 20px;">Desenvolvido por <a href="https://www.VenturaFazSite.com.br" target="_blank">Ventura sites</a> &copy; 2023</p>

            </div>
          </div>
        </div>
        </div>

      
    </footer>
    
</body>
</html>



