<?php

    session_start();
    require_once('../model/Pagante.php');

    $pagante = unserialize($_SESSION['pagante']);
    
    $dados = $pagante->emArray();

    Header('Content-Type: application/json');
    echo json_encode($dados);

?>