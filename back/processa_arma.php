<?php
require_once 'db.php';
$nome_arma = $_POST['nome_arma'];

$query = "INSERT INTO armas (nome_arma) VALUES ('$nome_arma')";
mysqli_query($connect, $query);

header('Location: ../index.php?page=armas');
exit();
?>