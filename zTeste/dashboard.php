<?php include 'conexao.php';
session_start();
if (empty($_SESSION)) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>Painel | Projeto POO</title>
</head>

<body>

    <div class="containeer">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-wrench-adjustable-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27z" />
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.5 4.5 0 0 1-1.592-.29L4.747 14.2a7.03 7.03 0 0 1-2.949-2.951M12.496 8a4.5 4.5 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11q.04.3.04.61" />
                    </svg>
                    <h2>Projeto<span class="primary">PHP</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a>
                    <h1><b>Painel</b></h1>
                </a>
                <a href="dashboard.php" class="">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Geral</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Historico</h3>
                </a>
                <a href="">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuarios</h3>
                </a>
                <!-- <a href="#">
                    <span class="message-count">0</span>
                    <h3>Mensagens</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Vendas</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Relatorios</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Config</h3>
                </a> -->
                <a href="#">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Adicionar<br>Usuario</h3>
                </a>
                <a href="logout.php" style="background-color: transparent; margin-top:12px" type="submit">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3 style="margin-top: 8px">Sair</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analise</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Vendas</h3>
                            <h1>R$ 1.234,00</h1>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Pedidos Concluidos</h3>
                            <h1>123</h1>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Pedidos em Andamento</h3>
                            <h1>6</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Funcionarios</h2>
                <span>T</span>
                <div class="user-list">
                    <div class="user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16"></svg>
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <h2>Exemplo #1</h2>
                        <p>Cargo/Setor</p>
                    </div>
                    <div class="user"></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16"></svg>
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <h2>Exemplo #2</h2>
                        <p>Cargo/Setor</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->

            <div class="recent-orders">
                <!-- Botão para abrir o pop-up -->
                <h2>Pedidos Recentes<button id="openFormButton" class="btn btn-outline-primary" type="button"
                        style="margin-left: 15px; margin-bottom: 2px;">Adicionar</button></h2>

                <!-- O pop-up (inicialmente oculto com display: none) -->
                <div id="opentesteform" class="popup" style="display: none;
                    position: fixed;
                    width: 425px;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
                    height: 425px;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    padding: 25px;
                    border-radius: 25px;
                    background-color: #fff;">
                    <div>
                        <div>
                            <form id="testeform" action="addteste.php" method="POST">
                                <h1>Adicionar um novo teste</h1>
                                <span style="margin-left: 25px;"><b>Teste 1</b></span>
                                <input type="text" name="teste1" placeholder="Teste 1" style="padding: 15px;"><br>
                                <span style="margin-left: 25px;"><b>Seletor teste</b></span>
                                <select id="menuOptions" name="teste2" style="padding: 15px;">
                                    <option value="opcao1">Boleto</option>
                                    <option value="opcao2">PIX</option>
                                    <option value="opcao3">Credito</option>
                                    <option value="opcao4">Debito</option>
                                    <option value="opcao5">Transferencia</option>
                                    <option value="opcao6">Dinheiro</option>
                                </select><br>
                                <span style="margin-left: 25px;"><b>Teste 3</b></span>
                                <input type="text" name="teste3" placeholder="Teste 3" style="padding: 15px;"><br>
                                <button class="btn btn-danger" id="closeFormButton" type="button"
                                    style="padding: 10px; margin-left: 25px; margin-top: 25px;">Cancelar</button>
                                <button id="adicionarButton" class="btn btn-outline-primary" type="submit"
                                    style="padding:10px; margin-left: 25px; margin-top: 25px;">Adicionar</button>
                            </form>
                            <!-- <form action="addteste.php" method="post">
                                <h1>Adicionar um novo pedido</h1>
                                <span style="margin-left: 25px;"><b>Cliente</b></span>
                                <input type="text" x-model="nomeCliente" placeholder="Nome do Cliente"
                                    style="padding: 15px;"><br>
                                <span style="margin-left: 25px;"><b>Forma de Pagamento</b></span>
                                <input type="text" x-model="pagamentoPedido" placeholder="Pagamento"
                                    style="padding: 15px;"><br>
                                <select id="menuOptions" x-model="pagamentoPedido" name="mOption"
                                    style="padding: 15px;">
                                    <option value="opcao1">Boleto</option>
                                    <option value="opcao2">PIX</option>
                                    <option value="opcao3">Credito</option>
                                    <option value="opcao4">Debito</option>
                                    <option value="opcao5">Transferencia</option>
                                    <option value="opcao6">Dinheiro</option>
                                </select><br>
                                <span style="margin-left: 25px;"><b>Valor</b></span><span
                                    style="margin-left: 25px;">R$</span>
                                <input type="number" step="0.01" x-model="valorPedido" name="number"
                                    style="padding: 15px" initial-value="2"><br>
                                <span style="margin-left: 25px;"><b>Status inicial</b></span>
                                <select id="menuOptions" name="menu-options" style="padding: 15px;">
                                    <option value="opcao1">Espera</option>
                                    <option value="opcao2">Producao</option>
                                    <option value="opcao3">Concluido</option>
                                </select><br>
                                <span style="margin-left: 25px;"><b>Observacoes</b></span><span
                                    style="margin-left: 25px;"></span>
                                <input type="text" placeholder="..." style="padding: 15px;"><br>
                                <button class="btn btn-danger" id="closeFormButton" type="button"
                                    style="padding: 10px; margin-left: 25px; margin-top: 25px;">Cancelar</button>
                                <button id="adicionarButton" class="btn btn-outline-primary" type="submit"
                                    style="padding:10px; margin-left: 25px; margin-top: 25px;">Adicionar</button>
                            </form> -->

                        </div>

                    </div>
                </div>
                <script>
                    document.getElementById('openFormButton').addEventListener('click', function () {
                        document.getElementById('opentesteform').style.display = 'block'; // Mostra o pop-up
                    });
                    document.getElementById('closeFormButton').addEventListener('click', function () {
                        document.getElementById('opentesteform').style.display = 'none'; // Esconde o pop-up
                    });
                    document.getElementById('adicionarButton').addEventListener('click', function () {
                        document.getElementById('opentesteform').style.display = 'none'; // Esconde o pop-up
                    });
                </script>
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
                    <div>
                        <?php $teste = $conn->query("SELECT * FROM teste")->fetchAll();
                        foreach ($teste as $test): ?>
                            <div>
                                <td><?= $test["id"] ?> </td>
                                <td><?= $test["teste1"] ?> </td>
                                <td><?= $test["teste2"] ?> </td>
                                <td><?= $test["teste3"] ?> </td>
                                <td><a href="removeteste.php?id=<?= $test['id'] ?>">teste</td>
                                <td><a href="updateteste.php?id=<?= $test['id'] ?>">teste2</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    document.getElementById('openFormButton2').addEventListener('click', function () {
                        document.getElementById('opentesteform2').style.display = 'block'; // Mostra o pop-up
                    });
                    document.getElementById('closeFormButton2').addEventListener('click', function () {
                        document.getElementById('opentesteform2').style.display = 'none'; // Esconde o pop-up
                    });
                    document.getElementById('adicionarButton2').addEventListener('click', function () {
                        document.getElementById('opentesteform2').style.display = 'none'; // Esconde o pop-up
                    });
                </script>
                <!-- <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th>Cliente</th>
                            <th>ID do Pedido</th>
                            <th>Pagamento</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <?php include 'editarPedido.php' ?>
                                <span></span>
                            <td></td>
                            <td></td>
                            <td><span></span></td>
                            <td><span x-text="task.pagamento.toUpperCase()"></span></td>
                            <td>R$ </td>
                            <td style="color: rgb(5, 155, 0);">Concluido</td>
                        </tr>
                        </template>
                        <tr>
                            <td>[Config]</td>
                            <td>Exemplo #2</td>
                            <td>#124</td>
                            <td>#124</td>
                            <td>Boleto</td>
                            <td style="color: chocolate;">Producao</td>
                        </tr>
                        <tr>
                            <td>[Config]</td>
                            <td>Exemplo #3</td>
                            <td>#125</td>
                            <td>Cartao</td>
                            <td>R$ 125,00</td>
                            <td style="color: rgb(138, 3, 3);">Cancelado</td>
                        </tr>
                        <tr>
                            <td>[Config]</td>
                            <td>Exemplo #4</td>
                            <td>#126</td>
                            <td>PIX</td>
                            <td>R$ 126,00</td>
                            <td style="color: rgb(0, 74, 184);">Aguardando</td>
                        </tr>

                    </tbody>
                </table> -->
                <a href="#" style="text-decoration: none;">Mostrar tudo</a>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <div class="profile">
                    <div class="info">
                        <p>Ola, <b>
                        <?php echo $_SESSION["nome"] ?>
                            </b></p>
                        <small class="text-muted"><?php echo date("Y-m-d"); ?></small>
                    </div>
                </div>
            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="usuario-logado">
                    <h2>
                    <?php echo $_SESSION["nome"] ?>
                    </h2>
                    <p>[Descricao]</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Lembretes</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Exemplo #1</h3>
                            <small class="text_muted">
                                15/06/24 | 16:00 - 21:00
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Exemplo #2</h3>
                            <small class="text_muted">
                                15/06/24 | 08:00 - 12:00
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Adicionar Lembrete</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>
    </section>

</body>

</html>