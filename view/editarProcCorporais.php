<?php

require_once "../classes/conexao.php";
require_once "../classes/procedimentosCorporais.php";

$c= new conexao();

$conexao = $c->conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icone_sem_fundo.png" type="image/x-icon">

    <title>Editar procedimentos corporais</title>


    <link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/login.css">
<?php

include "scriptsecss.php";


?>

</head>
<body>

<?php

include "menu.php";
?>

<?php
        if (isset($_GET["id_proc"]) && !empty($_GET["id_proc"])){

          

          $c = new conexao();

          $conexao = $c->conectar();
          $p = new procedimentosCorporais();

          $sql = "SELECT * from procedimentoscorporais where id_proc = ".$_GET["id_proc"];
         
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
            <form action="../sub-rotinas/salvarEdicaoCorporais.php" style="margin-top: 5%;" method="post" enctype="multipart/form-data">
                <div class="col-12" id="title">
                <h2 >Procedimento Corporal</h2>
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


          < <div class="form-group" style="margin-left: 12%; ">
               <a style="color: black;" href="ambiente.php">voltar</a>
            
            </div>
            </form>
            </div>

          
        </div>    
      </div>
    </div>


    
</body>
</html>