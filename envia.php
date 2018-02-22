<?php

// Conexao com banco
include "connectBD.php";

// Recebe os dados de entrada da pagina index.html

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// query de insercao dos dados do formulario 

$sql = "INSERT INTO tb_formulario (nome,email,mensagem) VALUES ('$nome', '$email', '$mensagem')";

$gravar = mysqli_query ($connect, $sql);

   // if ($gravar == true) {
   //     echo "Registro Gravado no banco <br>" ;  
   // } else {
   //     echo "Registro NAO   foi gravado no banco <br>";
   // }
