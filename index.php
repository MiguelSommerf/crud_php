<?php
require_once 'back/db.php';
require_once 'views/header.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

switch($page){
    case 'armas': require_once 'views/armas.php'; break;
    case 'armaduras': require_once 'views/armaduras.php'; break;
    case 'inserir_arma': require_once 'views/inserir_arma.php'; break;
    case 'inserir_armadura': require_once 'views/inserir_armadura.php'; break;
    case 'cadastro': require_once 'views/cadastro.php'; break;
    case 'posse': require_once 'views/inserir_posse.php'; break;
    case 'bruxos': require_once 'views/bruxos.php'; break;
    case 'home': require_once 'views/home.php'; break;
}

require_once 'views/footer.php';
?>