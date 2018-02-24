<?php

include "connectBD.php";

$conn = getConnection();

$sql = "SELECT id_nome,nome,email,mensagem FROM tb_formulario ORDER BY nome ASC";


$imprimerelatrio=$conn -> prepare($sql);
$imprimerelatrio->execute();


?> 



<!doctype html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        

<title>Projeto 1</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-condensed">
                            <theader>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Mensagem</th>
                                </tr>
                            </theader>
                            <tbody>
                                <?php  while ($linha=$imprimerelatrio->fetch(PDO::FETCH_ASSOC)){ ?>
                                <tr>
                                    <td><?=$linha["id_nome"]?></td>
                                    <td><?=$linha["nome"]?></td>
                                    <td><?=$linha["email"]?></td>
                                    <td><?=$linha["mensagem"]?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

    <div class="col-sm-2">
        <form action="index.html">
          <div class="form-group">
            <label for="buttonVoltar"></label>
            <div>
              <button id="buttoVoltar" name="buttonVoltar" class="btn btn-default">Voltar</button>
            </div>
          </div>
        </form>

      </div>


    </body>
</html>


