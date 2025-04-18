<?php
require_once 'db.php';

$id_armadura = $_POST['id_armadura'];
$nome_armadura = $_POST['nome_armadura'];

$query = "UPDATE armaduras SET nome_armadura = '$nome_armadura' WHERE id_armadura = '$id_armadura'";
mysqli_query($connect, $query);

header('Location: ../index.php?page=armaduras');
?>