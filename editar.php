<?php

include_once 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$editando_clientes = "UPDATE clientes  ";
$editando_clientes .= "SET cli_nome = '$nome', cli_logradouro = '$logradouro', cli_numero = '$numero', cli_complemento = '$complemento', cli_bairro = '$bairro', cli_cidade = '$cidade', cli_uf = '$uf', cli_cep = '$cep' ";
$editando_clientes .= "WHERE cli_id ='$id'";

$query_editando = mysqli_query($conex, $editando_clientes);

header('location:index.php');