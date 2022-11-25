<?php
$coluna1 = file('../doc/texto5.txt');
$coluna2 = file('../doc/texto6.txt');

$csv = fopen('teste.csv', 'w');

foreach($coluna1 as $row) {
    $linha_array = [trim($row), 'Sim'];
    fputcsv($csv, $linha_array, ';');

}

foreach($coluna2 as $row) {
    $linha_array = [trim($row), 'Não'];
    fputcsv($csv, $linha_array, ';');
}

fclose($csv);