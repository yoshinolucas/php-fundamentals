<?php
$tries = 0;
$limitTries = 3;

function someFunction($try): void{
    if($try != 4) {
        throw new Exception("Erro tentativa ". $try, 78);
    } else {
        print('Sucesso' . PHP_EOL);
    }
}

try {
    while(true){
        try {
            $tries++;
            someFunction($tries);
            break;
        } catch(Exception $e) {
            print("Erro! ".$e->getCode()." Tentativa ".$tries." de ".$limitTries." Mensagem: " .$e. "" . PHP_EOL);
            if($tries == $limitTries) throw $e;
            sleep(2);
        }
    }
} catch(Exception $e) {
    print("Finalizando com erro" . PHP_EOL);
    exit;
}


print("Finalizando com sucesso");