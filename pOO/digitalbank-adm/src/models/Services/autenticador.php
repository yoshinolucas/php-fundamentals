<?php

namespace DigitalBankAdm\models\Services;

use DigitalBankAdm\models\Autenticavel;

class autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        echo $autenticavel->autentica($senha) ? "usuário logado" : "usuário inválido";
    }
}