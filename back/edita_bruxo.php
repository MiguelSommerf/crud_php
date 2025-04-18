<?php
require_once 'db.php';

$id_bruxo = $_POST['id_bruxo'];
$nome_bruxo = $_POST['nome_bruxo'];

$query = "UPDATE bruxo SET nome_bruxo = '$nome_bruxo' WHERE id_bruxo = '$id_bruxo'";
mysqli_query($connect, $query);

header('Location: ../index.php?page=bruxos');
exit();
?>