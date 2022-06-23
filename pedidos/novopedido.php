<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
<link rel="stylesheet" href="novopedido.css">
</head>
<body>
<h1>Retirar pizza</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form class="form" method="POST" action="novopedido_action.php">

	<label class="label" >id_usuario: </label>
	<input class="input" type="numeber" name="id_usuario" placeholder="Digite o id do usuario" ><br><br>

	<label class="label">Id_sabor: </label>
	<input class="input" type="numeber" name="id_sabor" placeholder="Digite o id do sabor"><br><br>

	<label class="label">quantidade: </label>
	<input class="input" type="numeber" name="quantidade" placeholder="Digite a quantidade"><br><br>

	<input class="input" type="submit" value="Cadastrar">
</form>
</body>
</html>