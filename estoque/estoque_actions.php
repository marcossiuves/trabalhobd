<?php
include_once("../conexao.php");

function adicionar_estoque($id_sabor, $quantidade, $notaFiscal, $valorUnitario, $dataCompra){

    global $conn;
    
    $stmt = $conn -> prepare("CALL adiciona_pizza(?,?,?,?,?)");
    $stmt->bind_Param('sssss', $id_sabor, $quantidade, $notaFiscal, $valorUnitario, $dataCompra);
    
    $stmt->execute();
    
    header('location:../index.html');
}

function consultar_estoque(){

    global $conn; 

    $stmt = $conn -> prepare("select * from estoquePizza right join saboresPizza on estoquePizza.id_sabor = saboresPizza.id_sabor");
    $stmt->execute();
    $result = $stmt->get_result();   
       
         while ($row = $result->fetch_assoc()) {
            echo "<tr><td>$row[id_sabor]</td> 
            <td>$row[sabor]</td> 
            <td>$row[lote]</td>
            <td>$row[preco]</td> 
            <td>$row[dataCadastro]</td>
            <td>$row[dataCompra]</td>
            <td>$row[n_notaFiscal]</td>
            <td>$row[quantidade_estoque]</td>
            <td>$row[preco_compra_un] </td></tr>";
        }
        
}

