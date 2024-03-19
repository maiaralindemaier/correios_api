<?php

include_once 'conexao.php';

$buscar_clientes = "SELECT * FROM clientes";
$query_clientes = mysqli_query($conex, $buscar_clientes);

if($_POST){
  $logradouro = $_POST['logradouro'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];
  $cep = $_Post['cep'];
}
?>


<!doctype html>
<html lang="pt-br">
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
                  <form action="editar.php" method="post">
                      <td scope="row"><?php echo $id ?></td>
                      <td><input type="text" name="nome" value="<?php echo $nome; ?>" size="15"></td>
                      <td><input type="text" name="logradouro" value="<?php echo $logradouro; ?>" size="25"></td>
                      <td><input type="text" name="numero" value="<?php echo $numero; ?>" size="4"></td>
                      <td><input type="text" name="complemento" value="<?php echo $complemento; ?>" size="8"></td>
                      <td><input type="text" name="bairro" value="<?php echo $bairro; ?>" size="10"></td>
                      <td><input type="text" name="cidade" value="<?php echo $cidade; ?>" size="15"></td>
                      <td><input type="text" name="uf" value="<?php echo $uf; ?>" size="3"></td>
                      <td><input type="text" name="cep" value="<?php echo $cep; ?>" size="8"></td>
                      <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="Editar"> 
                      </td>   
                  </form>
                  <td> 
                    <form action="excluir.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id?>" size="4">
                      <input type="submit" value="Excluir">
                    </form>
                  </td>
              </tr>

              <?php }; ?>
              <tr>
                <form action=" cadastro.php" method="post" id="cadastroForm">
                  <td></td>
                  <td><input type="text" name="nome" size="15"></td>
                  <td><input type="text" name="logradouro" id="logradouro" size="25"></td>
                  <td><input type="text" name="numero" size="4"></td>
                  <td><input type="text" name="complemento" size="8"></td>
                  <td><input type="text" name="bairro" id="bairro" size="10"></td>
                  <td><input type="text" name="cidade" id="cidade" size="15"></td>
                  <td><input type="text" name="uf" id="uf" size="3"></td>
                  <td><input type="text" name="cep" id="cep" size="8"></td>
                  <td><input type="submit" value="Cadastro"></td>
                </form>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="text" name="cepConsulta" id="cepConsulta" size="8"></td>
                <td><input type="submit" value="Buscar CEP" id="buscarCep"></td>
              </tr>
    </tbody>
  </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
     
    <script src="JQuery.js"></script>
    <script src="Javascript.js"></script>

</html>
