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

$id_arma = $_POST['id_arma'];
$nome_arma = $_POST['nome_arma'];

$query = "UPDATE armas SET nome_arma = ? WHERE id_arma = ?";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "si", $nome_arma, $id_arma);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=armas');
exit();
?>