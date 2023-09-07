<?php
// Configurações do banco de dados
$servername = "www.db4free.net";
$port = 3306; // Porta do banco de dados (substitua pela porta correta, se necessário)
$username = "noticias_mu_user";
$password = "n0ticias_mu_456";
$dbname = "noticias_municip";

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

echo $conn;
?>
