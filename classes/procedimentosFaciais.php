 
 
 <?php

 

class procedimentosFaciais {

            

    public function cadastrarProcedimentoFacial($nome_proc, $desc_proc, $img_proc ){
         
        $c = new conexao();

        $conexao = $c->conectar();


        $sql = "INSERT INTO procedimentosfaciais (nome_proc, desc_proc, img_proc ) VALUES ('$nome_proc', '$desc_proc', '$img_proc' )";
    
        
        $result = mysqli_query($conexao, $sql);

        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }
         
        

    }

    public function atualizarProcFaciais($id_proc, $nome_proc, $desc_proc, $img_proc){

        $c = new conexao();
    
        $conexao = $c->conectar();
        
        $sql = "UPDATE procedimentosfaciais SET nome_proc = '$nome_proc', desc_proc = '$desc_proc', 
        img_proc = '$img_proc' where id_proc = '$id_proc'";

        $result = mysqli_query($conexao, $sql);

        if($result == 1){
            return true;
    
        }
    
        else {
            return false;
        }

    }

    public function excluirProcFaciais($id_proc){

        $c = new conexao();

        $conexao = $c->conectar();

        $sql = "DELETE from procedimentosfaciais WHERE id_proc = '$id_proc'";

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