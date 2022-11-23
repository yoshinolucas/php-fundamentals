<?php
namespace DigitalBankAdm\models;

interface Autenticavel {
    function autentica(string $senha): bool;
}