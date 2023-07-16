<?php





     $servidor = "localhost";
	 $usuario = "root";
	 $senha = "";
	 $bd = "maiaraesteticista";

     global $pdo;


        try {
            $conn = new PDO("mysql:dbname=".$bd.";host=".$servidor,$usuario,$senha);
            
            echo "conectado.";
    
        } catch (PDOException $e) {
            echo "Não foi possível conectar";
            exit;
        }
    
    

?>
