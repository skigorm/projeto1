<?php



function getConnection(){


    $dsn = 'mysql:host=localhost;dbname=projeto1;charset=utf8';
    $user = 'root';
    $pass = 'x';


    try {

    $pdo = new PDO ($dsn, $user, $pass);

    return $pdo;

    } catch (PDOException $ex) {

        echo 'Erro: ' .$ex->getMessage();

    }
}

//Conexao antiga do banco .


//$connect = mysqli_connect ('localhost','root','x', 'projeto1') ;

//if ($connect == true){
//    echo "A conexão ao banco de dados ocorreu normalmente!<br>";
//} else {    
//    echo "Nao foi possivel conectar ao banco MYSQL <br>";
//}