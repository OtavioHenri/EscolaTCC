<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "escolateste";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 

?>