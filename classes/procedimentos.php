 
 
 <?php

 

 
class procedimentos {

            private $conn;
            public $msgErro="";
            
 

    public function cadastrarProcedimento($nome_proc, $desc_proc, $imagem_proc ){
        global $conn;

        $sql = "SELECT id_proc  FROM  procedimentos WHERE nome_proc = :nome_proc";
        $sql = $conn->prepare($sql);

        

        $sql->bindValue(':nome_proc', $nome_proc);

        $sql->execute();

        if ($sql->rowCount() > 0){
            $total = $sql->fetch();
            
            return false;
        }

        else {

           

            $sql = "INSERT INTO procedimentos (nome_proc, desc_proc, imagem_proc) VALUES (:nome_proc, :desc_proc, 
            :imagem_proc)";



            $sql = $conn->prepare($sql);

           
            $sql->bindValue(":nome_proc", $nome_proc);
            $sql->bindValue(":desc_proc", $desc_proc);
           
                  
        }


            
        
    }

    public function listarRegistros(){


        global $conn;
        $sql = "SELECT nome_proc FROM procedimentos where id_proc = 1";
        $sql = $conn->prepare($sql);//prepara a consulta para executar
        
        $sql->execute();//executa

        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);//exibe todos os registros do banco em um array
        return $dados;
    }


}

?>