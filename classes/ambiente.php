 <?php

class ambiente {

    public function cadastrarAmbiente($img_amb){


        $c = new conexao();
    
        $conexao = $c->conectar();
    
    
        $sql = "INSERT INTO ambiente (img_amb) VALUES ('$img_amb')";
    
        
        return $result = mysqli_query($conexao, $sql);
    
        
         
    
    }

    public function pegarDados($id_amb){

        $c = new conexao();
    
        $conexao = $c->conectar();

        $sql  = "SELECT id_amb, img_amb FROM ambiente WHERE id_amb = '$id_amb'";

        
        return $result = mysqli_query($conexao, $sql);
        
       


    }

    public function atualizarAmbiente($id_amb, $img_amb){

        $c = new conexao();
    
        $conexao = $c->conectar();
        
        $sql = "UPDATE ambiente SET img_amb = '$img_amb' where id_amb = '$id_amb'";

        $result = mysqli_query($conexao, $sql);

        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }

    }

        public function excluirAmbiente($id_amb){

            $c = new conexao();
    
            $conexao = $c->conectar();

            $sql = "DELETE from ambiente WHERE id_amb = '$id_amb'";

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