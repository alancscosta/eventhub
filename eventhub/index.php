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

// Inicializando a consulta de eventos
$queryEventos = "SELECT * FROM eventos";

// Verifica se existe um filtro de categoria selecionado
if (isset($_GET["filtroEvento"])) {
    $filtroEvento = $_GET["filtroEvento"];
    
    // Ajusta a consulta com base no filtro de categoria
    if ($filtroEvento != "todos") {
        $queryEventos .= " WHERE categoriaEvento = '$filtroEvento'";
    }
}

// Executa a consulta
$resultEventos = $mysqli->query($queryEventos);
?>

<style>
    /* Estilos gerais */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

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

    .right-sidebar {
        width: 250px;
        background-color: #003366;
        height: 100vh;
        position: fixed;
        right: 0;
        top: 0;
    }

    .main-content {
        margin-left: 270px;
        margin-right: 270px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        width: 500px; /* Ajuste de largura */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
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

    .participar-btn {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        width: 100%;
        text-align: center;
    }

    .participar-btn:hover {
        background-color: #0056b3;
    }

    /* Ajuste para os cards ficarem um abaixo do outro */
    .row {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .col-sm-3 {
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        width: 100%;
    }
</style>

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

// Inicializa a consulta de eventos
$queryEventos = "SELECT * FROM eventos";

// Verifica se o filtro de categoria foi enviado
if (isset($_GET["filtroEvento"])) {
    $filtroEvento = $_GET["filtroEvento"];
    
    // Ajusta a consulta para filtrar eventos pela categoria selecionada
    if ($filtroEvento != "todos") {
        $queryEventos .= " WHERE categoriaEvento = '$filtroEvento'";
    }
}

// Executa a consulta
$resultEventos = $mysqli->query($queryEventos);
?>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

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

    .right-sidebar {
        width: 250px;
        background-color: #003366;
        height: 100vh;
        position: fixed;
        right: 0;
        top: 0;
    }

    .main-content {
        margin-left: 270px;
        margin-right: 270px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        width: 500px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
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

    .participar-btn {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        width: 100%;
        text-align: center;
    }

    .participar-btn:hover {
        background-color: #0056b3;
    }

    .row {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .col-sm-3 {
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        width: 100%;
    }
</style>

<div class="sidebar">
    <img src="img/eventhublogob.png" alt="Event Hub Logo">
    <a href="index.php">Início</a>
    <a href="#">Pesquisa</a>
    <a href="#">Notificações</a>
    <a href="#">Publicar</a>
</div>

<div class="right-sidebar"></div>

<div class="main-content">
    <!-- Formulário de Filtro (sem mostrar que está filtrado) -->
    <form name="formFiltro" action="index.php" method="GET" style="width:50%; margin:auto; padding-top: 20px;">
        <label for="filtroEvento">Filtrar por Categoria:</label>
        <select class="form-select" name="filtroEvento" required>
            <option value="todos">Visualizar todos os Eventos</option>
            <option value="artesVisuais" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'artesVisuais' ? 'selected' : ''; ?>>Artes Visuais</option>
            <option value="culinaria" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'culinaria' ? 'selected' : ''; ?>>Culinária</option>
            <option value="empreendedorismo" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'empreendedorismo' ? 'selected' : ''; ?>>Empreendedorismo</option>
            <option value="esportes" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'esportes' ? 'selected' : ''; ?>>Esportes</option>
            <option value="financas" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'financas' ? 'selected' : ''; ?>>Finanças</option>
            <option value="literatura" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'literatura' ? 'selected' : ''; ?>>Literatura</option>
            <option value="marketing" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'marketing' ? 'selected' : ''; ?>>Marketing</option>
            <option value="moda" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'moda' ? 'selected' : ''; ?>>Moda</option>
            <option value="recursosHumano" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'recursosHumano' ? 'selected' : ''; ?>>Recursos Humanos</option>
            <option value="saude" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'saude' ? 'selected' : ''; ?>>Saúde</option>
            <option value="sustentabilidade" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'sustentabilidade' ? 'selected' : ''; ?>>Sustentabilidade</option>
            <option value="tecnologia" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'tecnologia' ? 'selected' : ''; ?>>Tecnologia</option>
            <option value="outros" <?php echo isset($_GET['filtroEvento']) && $_GET['filtroEvento'] == 'outros' ? 'selected' : ''; ?>>Outros</option>
        </select><br>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top: 10px;">
            Filtrar Eventos
        </button>
    </form>

    <h3 style="text-align:center; margin-top:30px;">Eventos Filtrados</h3>

    <!-- Início da grid de eventos -->
    <div class="row mt-5">
        <?php
        // Conexão com o banco de dados
        include("conexaoBD.php");

        // Inicia a consulta SQL
        $queryEventos = "SELECT * FROM eventos";

        // Verifica se o filtro foi selecionado
        if (isset($_GET['filtroEvento']) && $_GET['filtroEvento'] != 'todos') {
            $filtroEvento = $_GET['filtroEvento'];
            $queryEventos .= " WHERE categoriaEvento = '$filtroEvento'";
        }

        // Executa a consulta
        $resultEventos = mysqli_query($conn, $queryEventos);

        // Exibe os eventos
        if (mysqli_num_rows($resultEventos) > 0) {
            while ($row = mysqli_fetch_assoc($resultEventos)) {
                // Extrai os dados dos eventos
                $tituloEvento = $row["tituloEvento"];
                $fotoEvento = $row["fotoEvento"];
                $dataEvento = $row["dataEvento"];
                $enderecoEvento = $row["enderecoEvento"];
                $categoriaEvento = $row["categoriaEvento"];

                // Exibe cada evento em um card, mantendo o layout original
                echo "
                    <div class='col-sm-3' style='margin-bottom:30px;'>
                        <div class='card' style='width:500px;'>
                            <img class='card-img-top' src='$fotoEvento' alt='Foto do Evento'>
                            <div class='card-body'>
                                <h5 class='card-title'>$tituloEvento</h5>
                                <p class='card-text'>$categoriaEvento</p>
                                <p class='card-text'>Data: $dataEvento</p>
                                <p class='card-text'>Local: $enderecoEvento</p>
                                <div class='d-grid'>
                                    <a href='#' class='btn btn-primary'>Participar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
        } else {
            echo "<p style='text-align:center;'>Nenhum evento encontrado.</p>";
        }
        ?>
    </div>

</div>

<?php include("footer.php"); ?>
