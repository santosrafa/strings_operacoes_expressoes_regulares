<?php

//str_replace :: Substitui as ocorrências da string de procura com a string de substituicao.

$texto = 'Me da a pora do meu dinheiro caralho';

echo str_replace(
    ['pora', 'caralho'],
    ['***', '***'],
    $texto
) . PHP_EOL;


