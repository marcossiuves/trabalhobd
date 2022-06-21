
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD - Cadastrar</title>
</head>
<body>
<h1>Cadastrar Usuário</h1>


<?php
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="usuario_actions.php">

<label>Nome: </label>
<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

<label>Cpf: </label>
<input type="text" name="cpf" placeholder="Digite o seu cpf"><br><br>

<label>E-mail: </label>
<input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

<label>Senha: </label>
<input type="password" name="senha" placeholder="Cadastre uma senha"><br><br>


<input type="submit" value="Cadastrar">
</form>
</body>
</html>