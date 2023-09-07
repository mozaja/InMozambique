<?php
// Configurações do banco de dados
$servername = "db4free.net"; // Nome do servidor
$username = "noticias_mu_user"; // Nome de usuário do banco de dados
$password = "n0ticias_mu_456"; // Senha do banco de dados
$dbname = "noticias_municip"; // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para recuperar notícias
$sql = "SELECT * FROM Noticias";

$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // Loop através dos resultados e exibe as notícias
    while ($row = $result->fetch_assoc()) {
        echo "Título: " . $row["Titulo"] . "<br>";
        echo "Conteúdo: " . $row["Conteudo"] . "<br>";
        echo "Data de Publicação: " . $row["DataPublicacao"] . "<br>";
        echo "Categoria: " . $row["Categoria"] . "<br>";
        // Você pode exibir mais informações conforme necessário
        echo "<hr>";
    }
} else {
    echo "Nenhuma notícia encontrada.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
