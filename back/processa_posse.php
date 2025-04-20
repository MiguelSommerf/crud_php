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