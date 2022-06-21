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
    
    if($row = $result->fetch_assoc()) {
        echo "id: = $row[id_sabor], sabor: $row[sabor], preço:$row[preco], data cadastro: $row[dataCadastro], data compra: $row[dataCompra], numero nota fiscal: $row[n_notaFiscal], quantidade em estoque: $row[quantidade_estoque], preco de compra(un): $row[preco_compra_un] <br>";
         while ($row = $result->fetch_assoc()) {
             echo "id: = $row[id_sabor], sabor: $row[sabor], preço:$row[preco], data cadastro: $row[dataCadastro], data compra: $row[dataCompra], numero nota fiscal: $row[n_notaFiscal], quantidade em estoque: $row[quantidade_estoque], preco de compra(un): $row[preco_compra_un] <br>";
        }
     
        } else {
             echo "Algo deu errado!";
        }     
} 

