<?php

include_once("../conexao.php");
$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$id_sabor = filter_input(INPUT_POST, 'id_sabor', FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);


$stmt = $conn -> prepare("CALL retira_pizza(?,?,?)");
$stmt->bind_Param('sss', $id_usuario , $id_sabor, $quantidade);

$stmt->execute();

header('location:../index.html');
