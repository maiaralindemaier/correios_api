<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$recebendo_clientes = "INSERT INTO clientes ";
$recebendo_clientes .= "(cli_nome, cli_logradouro, cli_numero, cli_complemento, cli_bairro, cli_cidade, cli_uf, cli_cep) ";
$recebendo_clientes .= "VALUES ('$nome', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$cep')";

$query_clientes = mysqli_query($conex, $recebendo_clientes);

header('location:index.php');
?>