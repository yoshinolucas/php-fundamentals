<?php
$tries = 0;
$limitTries = 3;

$fTries = 0;

function someFunction($try): void{
    $numTry = $try;
    if($try != 4) {
        throw new Exception("Erro tentativa ".$numTry);
    } else {
        print('Sucesso');
    }
}

while(true){
    try {
        $fTries++;
        someFunction($fTries);
        break;
    } catch(Exception $e) {
        print('Carregando' . PHP_EOL);
        sleep(2);
        if(++$tries == $limitTries) throw $e;
    }
}

print("finalizando");