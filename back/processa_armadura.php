<?php
require_once 'db.php';
$nome_armadura = $_POST['nome_armadura'];

$query = "INSERT INTO armaduras (nome_armadura) VALUES ('$nome_armadura')";
mysqli_query($connect, $query);

header('Location: ../index.php?page=armaduras');
exit();
?>