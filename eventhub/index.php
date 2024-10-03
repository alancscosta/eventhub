<?php include("header.php"); ?>

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
$query = "SELECT dataEvento, horaEvento FROM eventos";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Armazena a data, hora e duração do evento
        $dataEvento = $row['dataEvento'];
        $horaEvento = $row['horaEvento'];
        
        // Cria um objeto DateTime para a data
        $dateData = new DateTime($dataEvento);
        $dataFormatada = $dateData->format('d/m/Y');
        
        // Cria um objeto DateTime para a hora de início e formata sem segundos
        $dateHora = new DateTime($horaEvento);
        $horaFormatada = $dateHora->format('H:i');
    }
} else {
    echo "Nenhum evento encontrado.";
}

// Puxando os dados
$query = "SELECT * FROM eventos"; 
$result = $mysqli->query($query);

echo '<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Alinha os itens ao centro */
        padding: 20px; /* Adiciona um pouco de espaçamento ao redor */
    }
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 15px;
        padding: 15px;
        width: 750px; /* Ajuste a largura aqui */
        display: flex;
        flex-direction: column; /* Alinha o conteúdo verticalmente */
    }
    .card-img-top {
        max-width: 100%;
        height: auto;
    }
    .card-body {
        padding: 10px;
        flex-grow: 1; /* Permite que o conteúdo ocupe o espaço restante */
    }

    .coracaoLike {
        font-size: 20px;
    }
    
    .balaoComentarios {
        font-size: 20px;
    }
</style>';


// Exibindo os dados
if ($result->num_rows > 0) {
    echo '<div class="container">'; // Adiciona a div container
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="' . $row['fotoEvento'] . '" alt="Evento" class="card-img-top">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['tituloEvento'] . '</h5>';
        echo '<p class="card-text">' . $row['descricaoEvento'] . '</p>';
        echo '<p class="card-category">Categoria: ' . $row['categoriaEvento'] . '</p>';
        echo '<p class="card-date">Data: ' . $dataFormatada . '</p>';
        echo '<p class="card-time">Hora: ' . $horaFormatada . '</p>';
        echo '<p class="card-duration">Duração: ' . $row['duracaoEvento'] . '</p>'; // Exibe a duração formatada nos cards
        echo '<p class="card-location">Local: ' . $row['enderecoEvento'] . ', ' . $row['cidadeEvento'] . '</p>';
        echo '<p class="card-owner">Organizador: ' . $row['proprietarioEvento'] . '</p>';
        echo '<p class="card-contact">Email: ' . $row['emailEvento'] . ' | Telefone: ' . $row['telefoneEvento'] . '</p>';
        // Adicionando o botão de participar e os ícones
        echo '<div style="margin-top: auto;">'; // Para empurrar para baixo
        echo '<button style="background-color: #007BFF; color: white; border: none; border-radius: 5px; padding: 10px; cursor: pointer;">Participar</button>';
        echo '<div style="margin-top: 10px;">';
        echo '<span class="coracaoLike" style="cursor: pointer; margin-right: 15px;">❤️</span>'; // Ícone de coração
        echo '<span class="balaoComentarios" style="cursor: pointer;">💬</span>'; // Ícone de balão de comentários
        echo '</div>';
        echo '</div>'; 

        echo '</div>'; // Fecha card-body
        echo '</div>'; // Fecha card

    }   
    echo '</div>'; // Fecha a div container
     

} else {
    echo "Nenhum evento encontrado.";
}
$mysqli->close();
?>



<?php include("footer.php"); ?>
