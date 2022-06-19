<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
</head>
<body>
<h1>Cadastrar produto</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="adicionar_estoque.php">

<label>Id_sabor: </label>
<input type="numeber" name="id_sabor" placeholder="Digite o id do sabor"><br><br>

<label>quantidade: </label>
<input type="numeber" name="quantidade" placeholder="Digite a quantidade"><br><br>

<label>notaFiscal: </label>
<input type="numeber" name="notaFiscal" placeholder="Digite o numero da nota fiscal"><br><br>

<label>valorUnitario: </label>
<input type="numeber" name="valorUnitario" placeholder="Digite o valor unitário"><br><br>

<label>dataCompra: </label>
<input type="date" name="dataCompra" placeholder="Digite a data de compra"><br><br>

<input type="submit" value="Cadastrar">
</form>
</body>
</html>