<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
<link rel="stylesheet" href="novoestoque.css">
</head>
<body>
<h1>Cadastrar produto</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form class="form" method="POST" action="addestoque.php">

	<label class="label">Id_sabor: </label>
	<input class="input" type="number" name="id_sabor" placeholder="Digite o id do sabor"><br><br>

	<label class="label">quantidade: </label>
	<input class="input" type="number" name="quantidade" placeholder="Digite a quantidade"><br><br>

	<label class="label">notaFiscal: </label>
	<input class="input" type="number" name="notaFiscal" placeholder="Digite o numero da nota fiscal"><br><br>

	<label class="label">valorUnitario: </label>
	<input class="input" type="number" name="valorUnitario" placeholder="Digite o valor unitário"><br><br>

	<label class="label">dataCompra: </label>
	<input class="input" type="date" name="dataCompra" placeholder="Digite a data de compra"><br><br>

	<input class="input-submit" type="submit" value="Cadastrar">
</form>
</body>
</html>