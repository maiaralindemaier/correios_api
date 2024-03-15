<?php

include_once 'conexao.php';

$buscar_clientes = "SELECT * FROM clientes";
$query_clientes = mysqli_query($conex, $buscar_clientes);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">   
      <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>CEP</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($receber_clientes = mysqli_fetch_array($query_clientes)){
                    $id = $receber_clientes['cli_id'];
                    $nome = $receber_clientes['cli_nome'];
                    $logradouro = $receber_clientes['cli_logradouro'];
                    $numero = $receber_clientes['cli_numero'];
                    $complemento = $receber_clientes['cli_complemento'];
                    $bairro = $receber_clientes['cli_bairro'];
                    $cidade = $receber_clientes['cli_cidade'];
                    $uf = $receber_clientes['cli_uf'];
                    $cep = $receber_clientes['cli_cep'];
            ?>
              <tr>
                  <td scope="row"><?php echo $id ?></td>
                  <td><?php echo $nome ?></td>
                  <td><?php echo $logradouro ?></td>
                  <td><?php echo $numero ?></td>
                  <td><?php echo $complemento ?></td>
                  <td><?php echo $bairro ?></td>
                  <td><?php echo $cidade ?></td>
                  <td><?php echo $uf ?></td>
                  <td><?php echo $cep ?></td>
              </tr>

              <?php }; ?>
    </tbody>
  </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>