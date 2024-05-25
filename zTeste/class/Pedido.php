<?php

class Pedido {
    private $conn;
    private $nome;
    private $valor;

    public function __construct() {
        // Estabelecer conexão com o banco de dados
        $this->conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco");
        
        // Verificar se houve algum erro na conexão
        if ($this->conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $this->conn->connect_error);
        }
    }

    public function criarPedido($dados) {
        // Inserir o pedido no banco de dados
        $sql = "INSERT INTO pedidos (campo1, campo2, campo3, nome, valor) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $dados['campo1'], $dados['campo2'], $dados['campo3'], $this->nome, $this->valor);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Outros métodos da classe...

    public function __destruct() {
        // Fechar a conexão com o banco de dados
        $this->conn->close();
    }
}
