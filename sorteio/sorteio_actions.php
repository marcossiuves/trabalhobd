<?php
include_once("../conexao.php");

    function sortear($quantidade){
        global $conn; 

        $stmt = $conn -> prepare("CALL sorteio(?)");
        $stmt->bind_Param('s', $quantidade);
        $stmt->execute();
        $result = $stmt->get_result();

        if($row = $result->fetch_assoc()) {
    
            echo "id: = $row[id_usuario], nome: $row[fullname]. <br>";
             
             while ($row = $result->fetch_assoc()) {
                 echo "id: = $row[id_usuario], nome: $row[fullname]. <br>";
            }
         
            } else {
                 echo "Algo deu errado!";
            }     
        } 
    
    
    function get_max(){

        global $conn; 

        $con = $conn -> prepare("SELECT COUNT(id_usuario) FROM usuarios;");
        $con->execute();
        $result = $con->get_result();
    
        if ($row = $result->fetch_assoc()) {
            $max = $row['COUNT(id_usuario)'];
        }
        
        return $max;
    
    }

