
<?php
session_start();

if(empty($_POST) or empty($_POST['usuario']) or empty($_POST['senha'])){
    header('Location: index.php');

}

include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios 
WHERE usuario = '{$usuario}' 
AND senha = '{$senha}'";

$result = $conn->query($sql);

$row = $result->fetchObject();

$qtd = $result->rowCount();

if($qtd > 0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;
    header('Location: dashboard.php');
}else{
    header('Location: indexw.php');
}








?>