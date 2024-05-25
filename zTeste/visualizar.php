<?php

session_start(); // Iniciar a sessao

// Limpar o buffer de saida
ob_start();

// Incluir a conexao com BD
include_once "conexao.php";

// Receber o id do registro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Pedidos</title>
</head>

<body>
  <a href="index.php">Listar</a><br>

  <h2>Detalhes do Cliente</h2>

  <?php
  // Acessa o IF quando a variavel $id he diferente de vazio
  if (!empty($id)) {
    // Query recuperar os dados do cliente
    $query_cliente = "SELECT id, nome, email, cpfcnpj FROM cliente WHERE id=:id LIMIT 1";
    $result_cliente = $conn->prepare($query_cliente);
    $result_cliente->bindParam(':id', $id);
    $result_cliente->execute();

    if (($result_cliente) and ($result_usuario->rowCount() != 0)) {
      $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
      extract($row_usuario);
      echo "ID: $id <br>";
      echo "Nome: $nome <br>";
      echo "E-mail: $email <br>";
      echo "Cpf/Cnpj: $cpfcnpj <br>";

      echo "<h2>Pedidos</h2>";

      // Query recuperar os pedidos do usuario
      $query_historico = "SELECT id, created 
                        FROM historico
                        WHERE idcliente=:idcliente
                        ORDER BY id DESC";
      $result_historico = $conn->prepare($query_historico);
      $result_historico->bindParam(':usuario_id', $id);
      $result_historico->execute();

      if (($result_historico) and ($result_historico->rowCount() != 0)) {
        while ($row_historico = $result_historico->fetch(PDO::FETCH_ASSOC)) {
          //var_dump($row_historico);
          extract($row_historico;
          echo "ID: $id <br>";
          echo "Data da compra: " . date('d/m/Y H:i:s', strtotime($created)) . " <br>";
          //echo "<a href='visualizar.php?id=$id'>Visualizar</a> <br>";
          echo "<hr>";
        }
      } else {
        echo "<p style='color: #f00;'>Nenhuma pedido encontrado para o Cliente!</p>";
      }
    } else {
      $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Cliente não encontrado!</p>";
      header("Location: index.php");
    }
  } else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Cliente não encontrado!</p>";
    header("Location: index.php");
  }
  ?>

</body>

</html>