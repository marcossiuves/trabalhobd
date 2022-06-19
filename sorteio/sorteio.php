<?php

include_once("../conexao.php");
$quantidade = filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_NUMBER_INT);


$stmt = $conn -> prepare("CALL sorteio(?)");
$stmt->bind_Param('s', $quantidade);
$stmt->execute();

$result = $stmt->get_result();


if($row = $result->fetch_assoc()) {

   echo "id: = $row[id], nome: $row[nome]. <br>";
    
    while ($row = $result->fetch_assoc()) {
        echo "id: = $row[id], nome: $row[nome]. <br>";
}

} else {
    echo "Algo deu errado!";
}



