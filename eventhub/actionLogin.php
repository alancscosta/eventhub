<?php include("header.php"); ?>

<?php

    session_start();
    include 'conexaoBD.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailUsuario = $_POST['emailUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];

        // Prepare a consulta
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE emailUsuario = ? AND senhUsuario = ?");
        $stmt->bind_param("ss", $emailUsuario, $senhaUsuario);
        
        // Execute a consulta
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Login bem-sucedido
            echo "Logado com sucesso";
            // Você pode armazenar informações na sessão, se necessário
            // $_SESSION['usuario'] = $email;
        } else {
            // Login falhou
            echo "Erro ao tentar logar";
        }

        // Fechar a conexão
        $stmt->close();
        $conn->close();
}
?>

<?php include("footer.php");?>