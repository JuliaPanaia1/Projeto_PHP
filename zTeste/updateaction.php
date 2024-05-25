
<?php include 'conexao.php';

$id = filter_input(INPUT_POST, 'id');
$teste1 = filter_input(INPUT_POST, 'teste1');
$teste2 = filter_input(INPUT_POST, 'teste2');
$teste3 = filter_input(INPUT_POST, 'teste3');

echo $id;
echo $teste1;
echo $teste2;
echo $teste3;

$sql = $conn ->prepare("UPDATE teste SET teste1 = :teste1, teste2 = :teste2, teste3 = :teste3 WHERE id = :id");
$sql ->bindParam(':teste1', $teste1);
$sql ->bindParam(':teste2', $teste2);
$sql ->bindParam(':teste3', $teste3);
$sql ->bindParam(':id', $id);


$sql -> execute();

header('Location: dashboard.php');















?>
