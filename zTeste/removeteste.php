<?php 
include 'conexao.php';

$id = filter_input(INPUT_GET, 'id');

echo $id;

$sql = "DELETE FROM teste WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

// Execute the statement
if ($stmt->execute()) {
    echo "Fornecedor removido com sucesso!";
} else {
    echo "Erro ao remover fornecedor.";
}

header('Location: dashboard.php')

?>