<?php

function geraEmail()
{
    $conteudoEmail = <<<FINAL
    Olá, Fulano(a)!
    Estamos entrando em contato para
    {motivo do contato}
    {assinatura}

    FINAL;

    echo $conteudoEmail;
}

geraEmail();

