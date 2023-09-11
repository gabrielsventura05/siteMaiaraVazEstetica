<?php

class usuarios {

    public function cadastrarUsuarios($nome_usuario, $email, $senha){


    $c = new conexao();

    $conexao = $c->conectar();


    $sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('$nome_usuario', '$email', '$senha')";

    
    $result = mysqli_query($conexao, $sql);

    if($result == 1){
        return true;

    }

    else {
        return false;
    }
     

}

public function login($email, $senha) {

    $c = new conexao();

    $conexao = $c->conectar();

    $sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";

    $_SESSION['usuario'] = $email;
    $_SESSION['iduser'] = self::trazerId($email, $senha);

    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result)){

        return 1;
    }
    else {

        return 0;
    }
  }




public function trazerId($email, $senha) {

    $c = new conexao();

    $conexao = $c->conectar();

    $sql = "SELECT id from usuarios where email = '$email' and senha = '$senha'";

    $result = mysqli_query($conexao, $sql);

   
   
}

}

?>