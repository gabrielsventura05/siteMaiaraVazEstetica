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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimentos</title>
    <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">
    
     <!--estilos-->

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/index.css">
     <link rel="stylesheet" href="../css/faciais.css">
     
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

<?php
include_once "menu.php";
?>
 
                    
  
     <!--sessão sobre a empresa-->
     <div id="services-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12" style="margin-top: -5%;">
            
            <h1 class="main-title">Procedimentos faciais</h1>
            
            <!--ALERTA DE CONFIRMAÇÃO-->
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
        <div style="justify-content: left; margin-top: 5%;">

            
              <div class="form-group">
              <a href="cadastroProcFaciais.php" class="btn btn-success"  >Adicionar</a>
              </div>
              
        
           </div>
          </div>

          
         
         
          <div class="container">
            <div class="col-md-12" >
            <strong><p class="title-1">Hidratação facial</p></strong>
            <p>Deixa a pele maisiluminada e vistosa, , menos ressecada, protege contra poluição do dia a dia,
              evita o envelhecimento precoce, previne manchas, controle do brilho e oleosidade. </p>
          </div>
        </div>
         
            <div class="col-md-3 project-box seo">
              <img src="../img/maiara_estetica/procedimentos/faciais/procedimento5.jpg" class="img-fluid" alt="projeto 1">
            </div>
            
            <div class="col-md-3 project-box seo">
              <img src="../img/maiara_estetica/procedimentos/faciais/procedimento1.jpg" class="img-fluid" alt="projeto 1">
            </div>
            <div class="col-md-3 project-box seo">
              <img src="../img/maiara_estetica/procedimentos/faciais/procedimento11.jpg" class="img-fluid" alt="projeto 1" >
            </div>
            <div class="col-md-3 project-box seo">
              <img src="../img/maiara_estetica/procedimentos/faciais/procedimento15.jpg" class="img-fluid" alt="projeto 1">
            </div>
            
            
            
            
          </div>

        </div>
     </div>
     <?php 

$sql = "SELECT * FROM procedimentosfaciais  order by id_proc desc";

$result = mysqli_query($conexao, $sql);

                while ($rows = mysqli_fetch_assoc($result)):  

                  
                            
            ?>
     

     <div id="services-area" style="margin-top: 5%;" >
      <div class="container-fluid" >
        <div class="col-12">

        
        <p class="title-1"><?php echo $rows["nome_proc"]; ?></p>
        </div>
        

        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
               
          <img id="clear" src="<?php echo $rows["img_proc"];?>" style="width: 50%;"  class="img-fluid" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
      
        
        </div>


          
          
          <div class="col-md-7"  id="diamante"><!--numro de colunas para tela de tamanha medio-->
            <p class="clear" style="line-height: 40px; margin-right: 7%;"><?php echo $rows["desc_proc"]; ?></p>

            <?php

            $a = new usuarios();

  if(isset($_SESSION['usuario'])){
    $sessao = $_SESSION['usuario'];
      
    $sql2 = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";

    $result2 = mysqli_query($conexao, $sql2);
  
    if($rows2=mysqli_fetch_assoc($result2)):

      if($rows2["email"] == "admin@hotmail.com"):
     

?>


         
            <div style="display: flex; justify-content: space-around;  ">

            <a id="excluir"  style="margin-right: 5%;" class="btn btn-warning"
             href="editarProcFaciais.php?id_proc=<?php echo $rows["id_proc"];?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
          
          </a>


              <a id="excluir" class="btn btn-danger"
               href="../sub-rotinas/excluirProcFaciais.php?id_proc=<?php echo $rows["id_proc"]?>">
              
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor"
                class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 
  0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 
  1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 
  4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
              </a>

             
              
        </div>
<?php
endif;
endif;

  }


?>
  
           </div>

        <?php  
        endwhile;
        
        ?>
        
         
        
          

        </div>

      </div>

    </div>

    <div id="services-area" >
      <div class="container-fluid" >
       
          <div class="col-12">
            <h4 class="title-diamante" >Microgulhamento</h4>
          </div>

            <div class="row"> <!--classe das linhas-->
              <div class="col-md-5" style="margin-top: 5%;"><!--numro de colunas para tela de tamanha medio-->
                <img id="micro"  src="../img/maiara_estetica/procedimentos/faciais/procedimento18.jpg"  alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
          </div>


          <div class="col-md-7" style="margin-top: 5%;"><!--numro de colunas para tela de tamanha medio-->
                 <p class="diamante">Promove o rejuvenescimento da pele, melhorando o aspecto das rugas, flacidez, 
              cicatrizes de acne e estrias.</p>
         
           
          </div>
          </div>
        </div>
      </div>
    </div>

    <div id="services-area" >
      <div class="container-fluid" >
        <div class="col-12">
          <h4 class="title-clear" >Spa facial</h4>
          </div>
        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
            <img id="spa" src="../img/maiara_estetica/procedimentos/faciais/procedimento7.jpg"   alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
          </div>

          <div class="col-md-7">
               <p class="clear">Reúne diversos procedimentos, como massagens, esfoliações e hidratações,
               para combater os danos causados na pele do rosto e evitar o envelhecimento precoce, 
               o inchaço e o excesso de oleosidade ou ressecamento.</p>

         
              </div>
          </div>
      </div>
    </div>

    <div id="services-area" >
      <div class="container-fluid" >
        <h5 class="title-clear" style="font-size: 40px;" >Alguns conceitos</h5>
        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5" ><!--numro de colunas para tela de tamanha medio-->
            <h4 class="title-clear" >Celulite</h4>
            <p class="clear">aumento da temperatura e da circulação sanguínea no local, a melhora na oxigenação 
              dos tecidos, na quebra e na diminuição do tamanho das células de gordura e no aumento das fibras de 
              colágeno, contribuindo para uma pele mais lisinha e firme.</p>

         </div>
         <div class="col-md-2" ></div>
         
         <div class="col-md-5" >

          <h4 class="title-clear">Redução de medidas</h4>
            <p class="clear">aumento da temperatura e da circulação sanguínea no local, a melhora na oxigenação 
              dos tecidos, na quebra e na diminuição do tamanho das células de gordura e no aumento das fibras de 
              colágeno, contribuindo para uma pele mais lisinha e firme.</p>

          </div>
        </div>
        </div>
        </div>




    
    </body>

</html>