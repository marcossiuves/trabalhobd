<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
</head>
<body>
<h1>Retirar pizza</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="retirar_pedido.php">

<label>id_usuario: </label>
<input type="numeber" name="id_usuario" placeholder="Digite o id do usuario" ><br><br>

<label>Id_sabor: </label>
<input type="numeber" name="id_sabor" placeholder="Digite o id do sabor"><br><br>

<label>quantidade: </label>
<input type="numeber" name="quantidade" placeholder="Digite a quantidade"><br><br>

<input type="submit" value="Cadastrar">
</form>
</body>
</html>