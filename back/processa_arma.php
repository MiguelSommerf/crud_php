<?php
require_once 'db.php';
$nome_arma = $_POST['nome_arma'];

$query = "INSERT INTO armas (nome_arma) VALUES (?)";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $nome_arma);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=armas');
exit();
?>