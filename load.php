<?php
// Configurações do banco de dados
$servername = "www.db4free.net";
$port = 3306; // Porta do banco de dados (substitua pela porta correta, se necessário)
$username = "noticias_mu_user";
$password = "n0ticias_mu_456";
$dbname = "noticias_municip";

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Verifica a conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Consulta SQL para recuperar notícias
$sql = "SELECT * FROM Noticias";

$result = mysqli_query($conn, $sql);

// Verifica se há resultados
if (mysqli_num_rows($result) > 0) {
    // Loop através dos resultados e exibe as notícias
    while ($row = mysqli_fetch_assoc($result)) {
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
mysqli_close($conn);
?>
