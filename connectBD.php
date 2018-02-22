<?php

$connect = mysqli_connect ('localhost','root','x', 'projeto1') ;

if ($connect == true){
    echo "A conexão ao banco de dados ocorreu normalmente!<br>";
} else {    
    echo "Nao foi possivel conectar ao banco MYSQL <br>";
}