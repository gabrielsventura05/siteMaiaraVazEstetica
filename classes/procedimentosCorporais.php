 
 
 <?php

 

class procedimentosCorporais {

            

    public function cadastrarProcedimentoCorporal($nome_proc, $desc_proc, $img_proc ){
         
        $c = new conexao();

        $conexao = $c->conectar();


        $sql = "INSERT INTO procedimentoscorporais (nome_proc, desc_proc, img_proc ) VALUES ('$nome_proc', '$desc_proc', '$img_proc' )";
    
        
        $result = mysqli_query($conexao, $sql);

        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }
         
        

    }

    public function atualizarProcCorporais($id_proc, $nome_proc, $desc_proc, $img_proc){

        $c = new conexao();
    
        $conexao = $c->conectar();
        
        $sql = "UPDATE procedimentoscorporais SET nome_proc = '$nome_proc', desc_proc = '$desc_proc', 
        img_proc = '$img_proc' where id_proc = '$id_proc'";

        $result = mysqli_query($conexao, $sql);

        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }

    }

    public function excluirProcCorporais($id_proc){

        $c = new conexao();

        $conexao = $c->conectar();

        $sql = "DELETE from procedimentoscorporais WHERE id_proc = '$id_proc'";

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