
<?php
// Include the database connection file
require_once 'conexao.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $nome = $_POST['teste1'];
    $email = $_POST['teste2'];
    $endereco = $_POST['teste3'];

    // Prepare the SQL statement
    $sql = "INSERT INTO teste (teste1, teste2, teste3) VALUES (:teste1, :teste2, :teste3)";

    // Prepare the PDO statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':teste1', $nome);
    $stmt->bindParam(':teste2', $email);
    $stmt->bindParam(':teste3', $endereco);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Fornecedor adicionado com sucesso!";
        header('Location: dashboard.php');
    } else {
        echo "Erro ao adicionar fornecedor.";
    }
}
?>















?>