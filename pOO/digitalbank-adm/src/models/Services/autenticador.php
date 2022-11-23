<?php

namespace DigitalBankAdm\models\Services;

use DigitalBankAdm\models\Autenticavel;

class autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->autentica($senha)) {
            echo "usuário logado";
        } else {
            echo "usuário inválido";
        }
    }
}