
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
<link rel="stylesheet" href="novousuario.css">
</head>
<body>
<h1>Cadastrar Usuário</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form class="form" method="POST" action="usuario_actions.php">

<label class="label">Nome: </label>
<input class="input" type="text" name="nome" placeholder="Digite o nome completo"><br><br>

<label class="label">Cpf: </label>
<input class="input" type="text" name="cpf" placeholder="Digite o seu cpf"><br><br>

<label class="label">E-mail: </label>
<input class="input" type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

<label class="label">Senha: </label>
<input class="input" type="password" name="senha" placeholder="Cadastre uma senha"><br><br>


<input class="input" type="submit" value="Cadastrar">
</form>
</body>
</html>