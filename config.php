<?php
// Definindo variaveis de conexao com o banco

$servername = "localhost:3309";
$username = "root";
$password = "";
$db_name = "inventario";

// Criando uma conexao

$conn = new mysqli($servername, $username, $password, $db_name);

// Verifica erro

if($conn->connect_error){
    die("Connection failed: " . $conn->conect_error);
}

?>