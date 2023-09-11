<?php

include_once "classes/conexao.php";
include_once "classes/Procedimentos.php";

?>






<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Procedimentos</title>
        <link rel="shortcut icon" href="img/icone_sem_fundo.png" type="image/x-icon">
    
    
        <!-- Fonte -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
      <!-- Estilos -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/faciais.css">
    
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
      <script src="js/scripts.js"></script>

</head>
<body>
    <header>
        <div class="container" id="nav-container" >
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" >
                <a id="logo" href="" class="navbar-brand"> 
                    <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <?php

                    ?>
                        <a class="nav-item nav-link "   id="home-menu" href="#">Sobre mim</a>
                        <div class=" navbar-nav  dropdown">
                        <a class="nav-item nav-link dropdlink" data-toggle="dropdown"  id="about-menu"  href="#" >Sobre a empresa</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Link 1</a>
                          <a class="dropdown-item" href="#">Link 2</a>
                          <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                      </div>
                        <a class="nav-item nav-link"  id="services-menu" style="color: rgb(219, 207, 32)" href="#">Ambiente e procedimentos</a>
                        
                        <a class="nav-item nav-link"  id="portfolio-menu"  style="color: rgb(90, 160, 90)" href="#">Contato</a>
                  </div>
                

                
            </nav>
        </div>
    </header>

    <div id="services-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="main-title"> Cadastros de Procedimentos</h1>
          </div>
          
        </div>
      </div>
    </div>

   
   
      <div class="container">
        <div class="row">
          <div class="col-md-12" >
          <?php

if(isset($_POST['nome_proc']) && isset($_POST['desc_proc']) ){

  if(!empty($_POST['nome_proc']) && !empty($_POST['desc_proc'])){

    var_dump($_POST['nome_proc'], $_POST['desc_proc']);

    $nome_proc = addslashes($_POST['nome_proc']);
    $desc_proc = addslashes($_POST['desc_proc']);
    $arquivo = $_FILES['arquivo'];
    var_dump($arquivo);
    //destino da imagem
    $destino = "./img/maiara_estetica/procedimentos/corporais_teste/".$arquivo['name'];

    move_uploaded_file($arquivo['tmp_name'], $destino);

    
    

    $sql = "INSERT INTO procedimentos (nome_proc, desc_proc, img_proc) VALUES (:nome_proc, :desc_proc, :img_proc)";

    $cad = $conn->prepare($sql);
    $cad->bindValue(':nome_proc', $nome_proc );
    $cad->bindValue(':desc_proc', $desc_proc);
    $cad->bindValue(':img_proc', $destino);//valor do destino na referencia


    $cad ->execute();

    if($cad->rowCount() > 0){
        echo "Cadastrado";

    } else {

      echo "erro";
    }



    
  }
  else {

    echo "peencha todos os campos";
  }
}

    ?>


            <form action ="cadastroProc.php" method="post" enctype="multipart/form-data" >
              <div class="form-group" >
                <label for="exampleFormControlSelect1" >Tipo de procedimento</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Selecione</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              <div class="form-group">
              <label for="exampleFormControlInput1">titulo</label>
              <input type="text" class="form-control" name="nome_proc" id="tituloFacial">
             </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
              <textarea class="form-control" name= "desc_proc" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Subir arquivo</label>
              <input type="file" class="form-control-file" name="arquivo" >
              
            </div>

            <div class="form-group">
               <input type="submit" class="btn btn-success">
            </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
</body>
</html>



