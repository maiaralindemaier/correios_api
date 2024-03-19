<?php

include_once 'conexao.php';

$id = $_POST['id'];

$apagando_clientes = "DELETE FROM clientes WHERE cli_id='$id'";

$query_excluir = mysqli_query($conex, $apagando_clientes);

header('location:index.php');