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

if(!empty($_GET['id_bruxo'])){
    $id_bruxo = $_GET['id_bruxo'];

    $query = "DELETE FROM bruxo WHERE id_bruxo = ?";
    $stmt = mysqli_prepare($connect, $query);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "i", $id_bruxo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header('Location: ../?page=bruxos');
    exit();
}else if(!empty($_GET['id_arma'])){
    $id_arma = $_GET['id_arma'];

    $query = "DELETE FROM armas WHERE id_arma = ?";
    $stmt = mysqli_prepare($connect, $query);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "i", $id_arma);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header('Location: ../?page=armas');
    exit();
}else if(!empty($_GET['id_armadura'])){
    $id_armadura = $_GET['id_armadura'];

    $query = "DELETE FROM armaduras WHERE id_armadura = ?";
    $stmt = mysqli_prepare($connect, $query);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "i", $id_armadura);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header('Location: ../?page=armaduras');
    exit();
}else{
    echo "error";
}
?>