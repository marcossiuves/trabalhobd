<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
</head>
<body>
<h1>Sorteio</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="sorteio.php">

<label>Quantidade: </label>
<input type="numeber" name="qtd" placeholder="Digite a quantidade de vencedores:" ><br><br>
<input type="submit" value="Enviar">
</form>


</body>
</html>