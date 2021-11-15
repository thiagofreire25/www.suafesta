<?php

session_start();

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname ="suafesta";

try {
     // Conexão BD
    
     $conexao = new PDO("mysql:host=$servername:3306;dbname=$dbname", $username, $password);
     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} 
catch(PDOException $e) {
    echo "ERROR NA CONXÃO" . $e-> getMessage();
}

 ?>