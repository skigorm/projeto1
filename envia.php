<?php

// Conexao com banco

include "connectBD.php";

$conn = getConnection();


// Recebe os dados de entrada da pagina index.html

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// query de insercao dos dados do formulario 

$sql = "INSERT INTO tb_formulario (nome,email,mensagem) VALUES ('$nome', '$email', '$mensagem')";

// gravando no banco e exibindo a mensagem

if ($conn -> exec($sql)){

  echo   'Gravado com sucesso!';

} else {

  echo 'Nao foi salvo';

}


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">


        <div class="col-sm-2">
        <form action="index.html">
          <div class="form-group">
            <label for="buttonVoltar"></label>
            <div>
              <button id="buttoVoltar" name="buttonVoltar" class="btn btn-default">Voltar ao Cadastro</button>
            </div>
          </div>
        </form>

      </div>


    </body>
</html>

<?php

