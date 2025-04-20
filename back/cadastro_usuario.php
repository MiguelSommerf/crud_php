<?php
require_once 'db.php';

//Usuário que tentar acessar esse arquivo pela URL, sempre vai cair nesse if, porque a sessão ainda não foi iniciada
if(session_status() === PHP_SESSION_NONE){
    session_start();

    if(isset($_SESSION['id_usuario'])){
        session_destroy();
        header('Location: ../index.php?page=home');
        exit();
    }

    session_destroy();
}

$nome_usuario = strtolower($_POST['nome_usuario']);
$senha_usuario = $_POST['senha_usuario'];

if(isset($nome_usuario) && isset($senha_usuario)){
    if(strlen($nome_usuario) > 5 && strlen($senha_usuario) > 5){
        $query = "INSERT INTO usuario (nome_usuario, senha_usuario) VALUES (?, ?)";
        $stmt = mysqli_prepare($connect, $query);
        if($stmt){
            $hash = password_hash($senha_usuario, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ss", $nome_usuario, $hash);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            
            header('Location: ../index.php?page=home');
            exit();
        }
    }else{
        echo "<script>alert('O nome de usuário e a senha precisa ser maior do que 5 caracteres.')</script>";
        echo "<script>window.history.back()</script>";
        exit();
    }
}else{
    echo "<script>alert('Preencha todos os campos.')</script>";
    echo "<script>window.history.back()</script>";
    exit();
}

exit();