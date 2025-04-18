<?php
require_once 'db.php';

$nome_bruxo = $_POST['nome_bruxo'];

$query = "INSERT INTO bruxo (nome_bruxo) VALUES (?)";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $nome_bruxo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=cadastro');
exit();
?>