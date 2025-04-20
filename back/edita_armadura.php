<?php
require_once 'db.php';

if(session_status() === PHP_SESSION_NONE){
    session_start();

    if(!$_SESSION['id_usuario']){
        session_destroy();
        echo "<script>alert('Você precisa estar logado para alterar os dados!')</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }
}

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