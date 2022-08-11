<?php

//STRPOS :: ELE IRA BUSCAR MINHA POSICAO NA STRING QUE PASSEI COMO PARAMETRO NO CASO O @

$mail = 'rafael@gmail.com.br';

$possicao_arroba = strpos($mail, '@');

echo substr($mail, 0, $possicao_arroba) . PHP_EOL;
echo substr($mail, $possicao_arroba + 1) . PHP_EOL;

