<?php
include 'conexao.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $conn->query("SELECT * FROM teste WHERE id = $id");
    $teste = $sql->fetch(PDO::FETCH_ASSOC);
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Editar | Projeto POO</title>
</head>

<style>
    * {
        font-size: 25px;
    }

    span {
        margin-right: 20px;
    }

    input {
        border-radius: 10px;
    }
</style>

<div style="
 justify-content: center;
 align-items: center;
 display: flex;">
                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                        class="bi bi-wrench-adjustable-circle-fill" viewBox="0 0 16 16" style="margin-right:10px;">
                        <path
                            d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27z" />
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.5 4.5 0 0 1-1.592-.29L4.747 14.2a7.03 7.03 0 0 1-2.949-2.951M12.496 8a4.5 4.5 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11q.04.3.04.61" />
                    </svg>
                    <h2 style="font-size: 40px">Projeto<span style="font-size:50px" class="primary">PHP</span></h2>
                </div>

                <span style="justify-content: center; align-items: center; display: flex; font-size:20px;height: 50vh; ">ID do Pedido:<span style="font-size:30px; font-weight: 500; margin-left:10px;"><?= $teste['id'] ?></span></span>

<div style="width: 100%;
 height: 0vh;
 justify-content: center;
 align-items: center;
 display: flex;">
    <form action="updateaction.php" method="POST"> <!-- adicionar em teste -->
        <span style=""><b>Teste 1</b></span>
        <input style="" type="text" name="teste1" id="nome" value=<?= $teste['teste1'] ?>><br><br>

        <span><b>Seletor teste</b></span>
        <!-- <input style="padding: 15px;" type="text" name="teste2" id="email" value=<?= $teste['teste2'] ?>><br><br> -->
        <select name="teste2" style="">
            <option value="opcao1">Boleto</option>
            <option value="opcao2">PIX</option>
            <option value="opcao3">Credito</option>
            <option value="opcao4">Debito</option>
            <option value="opcao5">Transferencia</option>
            <option value="opcao6">Dinheiro</option>
        </select><br><br>
        <span style=""><b>Teste 3</b></span>
        <input style="" type="text" name="teste3" id="endereco" value=<?= $teste['teste3'] ?>><br><br>

        <input type="hidden" name="id" value=<?= $teste['id'] ?>>

        <a class="btn btn-danger" type="button" href="dashboard.php"
            style="padding: 15px; padding-left: 40px; padding-right: 40px; margin-left: 25px; margin-top: 25px;">Cancelar</a>

        <button class="btn btn-outline-primary" type="submit"
            style="padding: 15px; padding-left: 50px; padding-right: 50px; margin-left: 25px; margin-top: 25px;">Editar</button>
    </form>
</div>