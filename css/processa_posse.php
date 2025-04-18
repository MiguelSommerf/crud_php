<?php
require_once 'db.php';

$id_arma = $_POST['escolha_arma'];
$id_bruxo = $_POST['escolha_bruxo'];

$query = "UPDATE bruxo set arma_bruxo = $id_arma WHERE id_bruxo = $id_bruxo";
mysqli_query($connect, $query);

header('Location: ../index.php?page=posse');
?>