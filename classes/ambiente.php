 <?php

class ambiente {

    public function cadastrarAmbiente($img_amb){


        $c = new conexao();
    
        $conexao = $c->conectar();
    
    
        $sql = "INSERT INTO ambiente (img_amb) VALUES ('$img_amb')";
    
        
        $result = mysqli_query($conexao, $sql);
    
        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }
         
    
    }
} 

 ?>