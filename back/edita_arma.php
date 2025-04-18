<?php
require_once 'db.php';

$id_arma = $_POST['id_arma'];
$nome_arma = $_POST['nome_arma'];

$query = "UPDATE armas SET nome_arma = '$nome_arma' WHERE id_arma = '$id_arma'";
mysqli_query($connect, $query);

header('Location: ../index.php?page=armas');
exit();
?>