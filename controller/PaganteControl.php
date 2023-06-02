<?php

    session_start();
    Header('Location: ../view/resultado.php');

    require_once('../model/Pagante.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $rendimento = $_POST['rendimento'];
    $pagante = new Pagante();
    $pagante->setNome($nome);
    $pagante->setSobrenome($sobrenome);
    $pagante->setCpf($cpf);
    $pagante->setRendimento($rendimento);

    $resposta = $pagante->calcularDivida($pagante->getRendimento());
    $pagante->setAliquota($resposta[1]);
    $pagante->setDivida($resposta[0]);

    print_r($pagante);
    $serial = serialize($pagante);
    $_SESSION['pagante'] = $serial;

?>