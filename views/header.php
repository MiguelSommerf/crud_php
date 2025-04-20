<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/5350f19675.js" crossorigin="anonymous"></script>
    <title>The Witcher</title>
</head>
<body>
    <header>
        <div class="container">
            <img id="imagem-logo" src="./img/witcher-logo.png" title="logo" alt="logo">
            <div id="menu">
                <a href="?page=armas" style="color:white;">Armas</a>
                <a href="?page=armaduras" style="color:white;">Armaduras</a>
                <a href="?page=bruxos" style="color:white;">Bruxos</a>
                <a href="?page=posse" style="color:white;">Posse</a>
                <a href="?page=cadastro_bruxo" style="color:white;">Aliste-se!</a>
                <?php
                if(session_start() === PHP_SESSION_NONE){
                    session_start();
                } 
                if(@$_SESSION['id_usuario']) { ?>
                    <a href="back/logout.php" style="color:white;">Logout</a>
                <?php } ?>
            </div>
        </div>
    </header>
    <div id="content" class="container">