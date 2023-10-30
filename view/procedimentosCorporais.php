<?php


include "../classes/conexao.php";
include "../classes/usuarios.php";
include "../classes/procedimentosCorporais.php";


$c = new conexao();

$conexao = $c->conectar();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">
    <title>Procedimentos corporais</title>
   

    <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/faciais.css">
  <link rel="stylesheet" href="../css/index.css">
  

  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="../js/scripts.js"></script>
</head>
<body>


<?php

include "menu.php";

?>
           
     <!--sessão sobre a empresa-->
     <div id="services-area" style="padding-top: 5%">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="main-title">Procedimentos corporais</h1>
</div>

<div class="col-12">
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
      </div>
      <?php
        if(isset($_SESSION['usuario'])){
    $sessao = $_SESSION['usuario'];
      
    $sql2 = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";

    $result2 = mysqli_query($conexao, $sql2);
  
    if($rows2=mysqli_fetch_assoc($result2)):

      if($rows2["email"] == "admin@hotmail.com"):
        ?>
         
          <div clas="col-md-2"style="padding-left: 5%; margin-top: 3%" >
              <div class="form-group"  >
              <a href="cadastroProcCorporais.php" class="btn btn-success"  >Adicionar</a>
              </div>
              </div>

              <?php

      endif;
    endif;
  }
              ?>
              </div>
         </div>

        </div>
     </div>

     <?php 

$sql = "SELECT * FROM procedimentoscorporais  order by id_proc desc";

$result = mysqli_query($conexao, $sql);

                while ($rows = mysqli_fetch_assoc($result)):  

                  
                            
            ?>

     
<div id="services-area" style="margin-top: 5%;" >
      <div class="container-fluid" style="padding-bottom: 5%">
        <div class="col-12">

        
        <p class="title-1"><?php echo $rows["nome_proc"]; ?></p>
        </div>
        

        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
               
          <img id="clear" src="<?php echo $rows["img_proc"];?>" style="width: 70%;"  class="img-fluid" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
      
        
        </div>


          
          
          <div class="col-md-7"  id="diamante"><!--numro de colunas para tela de tamanha medio-->
            <p class="clear" style="line-height: 40px;"><?php echo $rows["desc_proc"]; ?></p>

  
            
            <?php

$u = new usuarios();

if(isset($_SESSION['usuario'])){
$sessao = $_SESSION['usuario'];

$sql2 = "SELECT id_usuario,  email FROM usuarios where email ='$sessao'";

$result2 = mysqli_query($conexao, $sql2);

if($rows2=mysqli_fetch_assoc($result2)):

if($rows2["email"] == "admin@hotmail.com"):
  ?>

  <div style="display: flex; justify-content: space-around; ">

  <a id="excluir"  style="margin-right: 5%;" class="btn btn-warning"
   href="editarProcCorporais.php?id_proc=<?php echo $rows["id_proc"];?>">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
  </a>

  <a id="excluir" class="btn btn-danger"
   href="../sub-rotinas/excluirProcCorporais.php?id_proc=<?php echo $rows["id_proc"]?>">
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

    </div>
    
  </div>
    <?php

                endwhile;
    ?>

    <div id="services-area" >
      <div class="container-fluid" >
        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5" ><!--numro de colunas para tela de tamanha medio-->
            <h4 class="title-clear" >Massagem anti stress</h4>
            <p class="clear">combate sintomas como irritabilidade, falta de concentração, medo, tensões musculares
                 e má circulação sanguínea.</p>

          <img id="limpesa" src="../img/maiara_estetica/procedimentos/corporais/massagem_antistress.jpg" style="width: 80%;"  alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

          </div>

          <div class="col-md-2"></div>

          <div class="col-md-5" ><!--numro de colunas para tela de tamanha medio-->
            <h4 class="title-diamante" >Massagem modeladora</h4>
            <p class="diamante">Tem como objetivo modelar o corpo, reduzindo a circunferência e ativar a circulação 
                sanguínea.
                - Indicações: para quem busca reduzir medidas e melhorar o aspecto da celulite
                </p>
         
            <img id="micro"  src="../img/maiara_estetica/procedimentos/corporais/massagen_model.jpg" style="width: 70%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

          </div>
          </div>
        </div>
      </div>
    

    <div id="services-area" >
      <div class="container-fluid" >
        <div class="row"> <!--classe das linhas-->
          <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
            <h4 class="title-clear" >Massagem com pedras quentes</h4>
            <p class="clear">As pedras são utilizadas com a finalidade de proporcionar uma ação terapêutica para aliviar 
                a dor, relaxar a musculatura, proporcionar bem-estar e promover desintoxicação.</p>

          <img id="spa" src="../img/maiara_estetica/procedimentos/corporais/massagem_pedras.png"  style="width: 80%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
          </div>
          <div class="col-md-2"></div>

          <div class="col-md-5" ><!--numro de colunas para tela de tamanha medio-->
            <h4 class="title-diamante" >Shiatsu</h4>
            <p class="diamante">É uma terapia que se origina da medicina oriental e cuja finalidade principal é 
                restabelecer o equilíbrio do corpo, proporcionando saúde e bem-estar. A prática dessa terapia se 
                fundamenta na pressão, com as mãos e dedos, nos pontos vitais do corpo, ativando a energia interna 
                do corpo.
                - Indicações: desequilíbrios emocionais como fobias, depressão, estresse, preocupação em excesso 
                e TPM, insônia, ansiedade, auxilia no tratamento de problemas respiratórios, digestivos, 
                circulatórios, musculares, cardíacos, neurológicos, renais, dores de cabeça, lombalgia, nervo 
                ciático, melhora a concentração, ou seja, promove o equilíbrio do corpo e da mente de uma forma 
                geral. 
                </p>
         
            <img id="micro"  src="img/maiara_estetica/procedimentos/corporais/massagem_shiatsu.jpg" style="width: 70%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

          </div>
          </div>
          </div>
      </div>
    

      <div id="services-area" >
        <div class="container-fluid" >
          <div class="row"> <!--classe das linhas-->
            <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
              <h4 class="title-clear" >Massagem drenante</h4>
              <p class="clear">elimina líquidos e é uma aliada no estímulo do sistema linfático, no combate à 
                retenção de líquidos e à celulite</p>
  
            <img id="spa" src="img/maiara_estetica/procedimentos/corporais/massagem_drenante.jpg"  style="width: 70%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
            </div>
            <div class="col-md-2"></div>
  
            <div class="col-md-5" ><!--numro de colunas para tela de tamanha medio-->
              <h4 class="title-diamante" >Drenagem linfática</h4>
              <p class="diamante">tem como objetivo estimular o sistema linfático a eliminar o excesso de fluidos 
                do corpo. Apoiada em evidências científicas, a drenagem linfática é reconhecida e indicada para 
                auxiliar em vários tratamentos estéticos, além de promover relaxamento e bem-estar.
                </p>
           
              <img id="micro"  src="img/maiara_estetica/procedimentos/corporais/linfatica.png" style="width: 70%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
  
            </div>
            </div>
            </div>
        </div>

        <div id="services-area" >
            <div class="container-fluid" >
              <div class="row"> <!--classe das linhas-->
                <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
                  <h4 class="title-clear" >Reflexologia podal</h4>
                  <p class="clear">Visa estimular pontos específicos das plantas dos pés, que pode proporcionar 
                    alívio de dores, relaxamento e melhora na circulação sanguínea.
                    - Indicações: alívio do estresse, tensões físicas e mentais, combate ao nervosismo, ativação da circulação sanguínea e equilíbrio hormonal.
                    </p>
      
                <img id="spa" src="img/maiara_estetica/procedimentos/corporais/reflexologia.jpg"  style="width: 50%;" alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->
                </div>
                <div class="col-md-2"></div>
      
               
                </div>
            </div>
        </div>
            
    
    
    </body>

</html>