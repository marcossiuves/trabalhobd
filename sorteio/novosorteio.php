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

<form method="POST" action="resultadosorteio.php">

<label>Quantidade: </label>
<input type="numeber" name="qtd" placeholder="Digite a quantidade de vencedores:" ><br><br>
<input type="submit" value="Enviar">

</form>

Numero de usuários cadastrado no sistema: 
<?php 
include_once("sorteio_actions.php");
echo get_max();
?>

</body>
</html>