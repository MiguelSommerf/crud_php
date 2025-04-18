<?php
require_once 'db.php';

$id_armadura = $_POST['id_armadura'];
$nome_armadura = $_POST['nome_armadura'];

$query = "UPDATE armaduras SET nome_armadura = ? WHERE id_armadura = ?";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "si", $nome_armadura, $id_armadura);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=armaduras');
?>