<?php
// Conexão com o banco de dados
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'eventhub';

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Puxando os dados
$query = "SELECT * FROM eventos";
$result = $mysqli->query($query);
?>

<style>
    /* Estilos gerais */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    
    /* Estilo da barra lateral esquerda */
    .sidebar {
        width: 250px;
        background-color: #003366;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .sidebar img {
        max-width: 80%;
        margin-bottom: 30px;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        margin: 20px 0;
        font-size: 18px;
    }

    .sidebar a:hover {
        text-decoration: underline;
    }

    /* Estilo da barra lateral direita */
    .right-sidebar {
        width: 250px;
        background-color: #003366;
        height: 100vh;
        position: fixed;
        right: 0;
        top: 0;
    }

    /* Estilo da área principal */
    .main-content {
        margin-left: 270px; /* Espaço para a barra lateral esquerda */
        margin-right: 270px; /* Espaço para a barra lateral direita */
        padding: 20px;
        display: flex;
        flex-direction: column; /* Alinha os cards em uma coluna */
        align-items: center;    /* Centraliza os cards na página */
    }

    .card {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        width: 500px; /* Ajuste de largura para que caiba na tela */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card img {
        width: 100%;
        border-radius: 10px;
    }

    .card h5 {
        margin-top: 10px;
        font-size: 20px;
    }

    .card p {
        font-size: 14px;
        color: #555;
    }

    .card .like-comment {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
    }

    .like-comment span {
        font-size: 18px;
        cursor: pointer;
    }

    /* Ícones de coração e comentários */
    .coracaoLike {
        color: red;
    }

    /* Estilo do botão Participar */
    .participar-btn {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        width: 100%; /* Faz o botão ocupar toda a largura do card */
        text-align: center;
    }

    .participar-btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="sidebar">
    <img src="img/eventhublogob.png" alt="Event Hub Logo">
    <a href="index.php">Início</a>
    <a href="#">Pesquisa</a>
    <a href="#">Notificações</a>
    <a href="#">Publicar</a>
</div>

<!-- Barra lateral direita sem conteúdo -->
<div class="right-sidebar"></div>

<div class="main-content">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['fotoEvento'] . '" alt="Imagem do Evento">';
            echo '<h5>' . $row['tituloEvento'] . '</h5>';
            echo '<p>Café Empreendedores<br>Data: ' . $row['dataEvento'] . '<br>Local: ' . $row['enderecoEvento'] . '</p>';
            echo '<div class="like-comment">';
            echo '<span class="coracaoLike">❤️</span>';
            echo '<span class="balaoComentarios">💬</span>';
            echo '</div>';
            echo '<button class="participar-btn">Participar</button>'; // Botão de Participar
            echo '</div>';
        }
    } else {
        echo "Nenhum evento encontrado.";
    }
    $mysqli->close();
    ?>
</div>

<?php include("footer.php"); ?>
