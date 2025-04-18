<?php
require_once 'db.php';

if(!empty($_GET['id_bruxo'])){
    $id_bruxo = $_GET['id_bruxo'];

    $query = "DELETE FROM bruxo WHERE id_bruxo = $id_bruxo";
    mysqli_query($connect, $query);
    header('Location: ../?page=bruxos');
    exit();
}else if(!empty($_GET['id_arma'])){
    $id_arma = $_GET['id_arma'];

    $query = "DELETE FROM armas WHERE id_arma = $id_arma";
    mysqli_query($connect, $query);
    header('Location: ../?page=armas');
    exit();
}else if(!empty($_GET['id_armadura'])){
    $id_armadura = $_GET['id_armadura'];

    $query = "DELETE FROM armaduras WHERE id_armadura = $id_armadura";
    mysqli_query($connect, $query);
    header('Location: ../?page=armaduras');
    exit();
}else{
    echo "error";
}
?>