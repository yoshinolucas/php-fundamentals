<?php

function main()
{
    echo 'Entrei na primeira função(main)' . PHP_EOL;
    try {
        segunda_funcao();
    } catch(Exception $err){
        echo $err->getMessage() . PHP_EOL;
        echo 'erro na segunda função' . PHP_EOL;
        throw new RuntimeException(
            'Exceção foi tratada',
            1,
            $err
        );
    }

    echo 'Saindo da primeira função(main)' . PHP_EOL;
}

function segunda_funcao()
{
    echo 'Entrei na segunda função' . PHP_EOL;
    for($i = 1; $i <= 5;$i++){
        echo $i . PHP_EOL;
    }
    $array = new SplFixedArray(2);
    $array[3] = 'Valor';
    echo 'Saindo da segunda função'. PHP_EOL;
}
echo 'Início' . PHP_EOL;
main();
echo 'Fim';