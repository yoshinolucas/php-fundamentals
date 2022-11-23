<?php
namespace DigitalBankAdm\models;

interface Autenticavel {
    public function autentica(string $senha): bool;
}