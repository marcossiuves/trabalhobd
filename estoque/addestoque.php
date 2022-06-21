<?php
include_once("estoque_actions.php");

$id_sabor = filter_input(INPUT_POST, 'id_sabor', FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$notaFiscal = filter_input(INPUT_POST, 'notaFiscal', FILTER_SANITIZE_NUMBER_INT);
$valorUnitario = filter_input(INPUT_POST, 'valorUnitario', FILTER_SANITIZE_NUMBER_FLOAT	);
$dataCompra = filter_input(INPUT_POST, 'dataCompra');


adicionar_estoque($id_sabor, $quantidade, $notaFiscal, $valorUnitario, $dataCompra);
