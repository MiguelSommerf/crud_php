<?php
require_once 'db.php';

$nome_bruxo = $_POST['nome_bruxo'];

$query = "INSERT INTO bruxo (nome_bruxo) VALUES ('$nome_bruxo')";
mysqli_query($connect, $query);

header('Location: ../index.php?page=cadastro');
exit();
?>