<?php

include "connectBD.php";

$sql = "SELECT * FROM tb_formulario";

$consulta = mysqli_query ($connect, $sql);

mysqli_fetch_assoc($consulta);

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mensagem</th>
                                </tr>
                            </theader>
                            <tbody>
                                <?php  while ($linha=mysqli_fetch_assoc($consulta)) { ?>
                                <tr>
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
        
    </body>
</html>
