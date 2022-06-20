<?php
include_once("../conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$password =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (fullname, email, created, cpf, userpassword) VALUES ('$nome', '$email', NOW(),'$cpf','$password')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
header("Location: ../index.html");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: ../index.html");
    }