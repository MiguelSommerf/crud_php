<?php
require_once 'db.php';

if(session_status() === PHP_SESSION_NONE){
    session_start();

    if($_SESSION['id_usuario']){
        session_destroy();
        header('Location: ../index.php?page=home');
        exit();
    }

    session_destroy();
}

$nome_usuario = strtolower($_POST['nome_usuario']);
$senha_usuario = $_POST['senha_usuario'];

$query = "SELECT * FROM usuario WHERE nome_usuario = ?";
$stmt = mysqli_prepare($connect, $query);

if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $nome_usuario);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if(mysqli_stmt_num_rows($stmt) == 1){

        mysqli_stmt_bind_result($stmt, $id_usuario, $nome_usuario, $hash);
        mysqli_stmt_fetch($stmt);

        if(password_verify($senha_usuario, $hash)){
            session_start();

            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nome_usuario'] = $nome_usuario;

            header('Location: ../index.php?page=home');
            exit();
        }else{
            echo "<script>alert('Usuário ou senha incorretos.')</script>";
            echo "<script>window.history.back()</script>";
            exit();
        }
    }else{
        echo "<script>alert('Usuário ou senha incorretos.')</script>";
        echo "<script>window.history.back()</script>";
        exit();
    }
}

exit();