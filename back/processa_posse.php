<?php
require_once 'db.php';

$id_arma = $_POST['escolha_arma'];
$id_bruxo = $_POST['escolha_bruxo'];

$query = "UPDATE bruxo SET arma_bruxo = ? WHERE id_bruxo = ?";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "ii", $id_arma, $id_bruxo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=bruxos');
exit();