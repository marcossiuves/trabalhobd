<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
<link rel="stylesheet" href="novosorteio.css"/>
</head>
<body>
<h1>Sorteio</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form class="form" method="POST" action="resultadosorteio.php">

<label class="label">Quantidade: </label>
<input class="input" type="numeber" name="qtd" placeholder="Digite a quantidade de vencedores:" ><br><br>
<input class="input" type="submit" value="Enviar">

</form>

<h2>Numero de usuários cadastrado no sistema: 
<?php 
include_once("sorteio_actions.php");
echo get_max();
?>
</h2>
</body>
</html>