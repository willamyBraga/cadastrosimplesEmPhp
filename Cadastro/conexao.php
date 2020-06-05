<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'cadastro');

try{
    $conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    echo "Conexão feita com suceso";
}
catch(PDOException $e)
{
    echo"Erro" .$e->getMessage();
}
