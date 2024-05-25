<?php include 'conexao.php';
session_start();
if (empty($_SESSION)) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <link rel="stylesheet" href="css/style.css">
    <script>
        $(document).ready(function () {
            // Function to submit the form using AJAX
            function submitForm() {
                $.ajax({
                    url: 'addteste.php',
                    type: 'POST',
                    data: $('#testeform').serialize(),
                    success: function (response) {
                        // Refresh the table with the updated data
                        $('#testetable').load(' #testetable');
                    }
                });
            }

            // Submit the form when it's submitted
            $('#testeform').submit(function (e) {
                e.preventDefault();
                submitForm();
            });
        });
        $(document).ready(function () {
            // Function to submit the form using AJAX
            function submitForm() {
                $.ajax({
                    url: 'addteste.php',
                    type: 'GET',
                    data: $('#removeJs').serialize(),
                    success: function (response) {
                        // Refresh the table with the updated data
                        $('#testetable').load(' #testetable');
                    }
                });
            }

            // Submit the form when it's submitted
            $('#testeform').submit(function (e) {
                e.preventDefault();
                submitForm();
            });
        });
    </script>
    <form id="testeform"> <!-- adicionar em teste -->

        <?php echo "Ola, " . $_SESSION["nome"] ?>
        <a href="logout.php" class="btn btn-danger">Sair</a>
        <label for="nome">Teste1:</label>
        <input type="text" name="teste1" id="nome" required><br><br>

        <label for="email">Teste2:</label>
        <input type="text" name="teste2" id="email" required><br><br>

        <label for="endereco">Teste3:</label>
        <input type="text" name="teste3" id="endereco" required><br><br>

        

        <input type="submit" value="adicionar">
    </form>
    <!-- table da tabela teste -->
    <table border="1" id="testetable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Teste1</th>
                <th>Teste2</th>
                <th>Teste3</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php $teste = $conn->query("SELECT * FROM teste")->fetchAll();
            foreach ($teste as $test): ?>
                <tr>
                    <td><?= $test["id"]?> </td>
                    <td><?= $test["teste1"] ?> </td>
                    <td><?= $test["teste2"] ?> </td>
                    <td><?= $test["teste3"] ?> </td>
                    <td><a id ="removeJs" href="removeteste.php?id=<?= $test['id'] ?>">teste</td>
                    <td><a href="updateteste.php?id=<?= $test['id'] ?>">teste2</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>