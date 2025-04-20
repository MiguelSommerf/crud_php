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

$nome_bruxo = $_POST['nome_bruxo'];

$query = "INSERT INTO bruxo (nome_bruxo) VALUES (?)";
$stmt = mysqli_prepare($connect, $query);
if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $nome_bruxo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

header('Location: ../index.php?page=bruxos');
exit();
?>