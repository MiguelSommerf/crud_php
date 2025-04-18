<?php
require_once 'db.php';
$nome_armadura = $_POST['nome_armadura'];

$query = "INSERT INTO armaduras (nome_armadura) VALUES (?)";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $nome_armadura);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=armaduras');
exit();
?>