<?php
require_once 'db.php';

$id_bruxo = $_POST['id_bruxo'];
$nome_bruxo = $_POST['nome_bruxo'];

$query = "UPDATE bruxo SET nome_bruxo = ? WHERE id_bruxo = ?";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "si", $nome_bruxo, $id_bruxo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=bruxos');
exit();
?>