<?php
$servername = "localhost";
$database = "portalbooks";
$username = "root";
$password = "";

// Cria conexão
$conectadb = mysqli_connect($servername, $username, $password, $database);

// Verifica se conectou
if (!$conectadb) {
    die("Impossivel conectar: " . mysqli_connect_error());
}
// echo "Conectado com sucesso";
// mysqli_close($conectadb);
?>