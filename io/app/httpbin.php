<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => 'X-From: PHP',
        'content' => 'conteudo do body'
        ]
    ]);

echo file_get_contents('http://httpbin.org/post', false, $context);

?>