<?php
include_once("sorteio_actions.php");

$quantidade = filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_NUMBER_INT);
$max = get_max();

if($quantidade <= $max) {
    sortear($quantidade);
} else {
    echo "Não há tantos usuários no sistema!";
}