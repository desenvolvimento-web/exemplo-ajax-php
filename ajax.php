<?php

function funcao_do_php()
{
    return 'Olá, Mundo!';
}

$nome_da_funcao = $_GET['funcao'];

if ($nome_da_funcao === 'funcao_do_php') {
    $resposta = funcao_do_php();
    echo $resposta;
}