<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if($_SESSION['id_usuario']){
    session_destroy();
    header('Location: ../index.php?page=home');
    exit();
}

header('Location ../index.php?page=home');