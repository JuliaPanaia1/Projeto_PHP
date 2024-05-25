<?php
//Inicio da conexão com o banco de dados utilizando PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zteste";

try {
      //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

  //Conexão sem a porta
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
echo "Connected successfully";

 //echo "Conexão com banco de dados realizado com sucesso.";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//Fim da conexão com o banco de dados utilizando PDO
?>
