<?php

//STRLEN :: DE COMPRIMENTO SO ESPERA A STRING QUE VOCE QUEIRA MEDIR.

//STRLEN :: CONSEGUE ACERTAR BYTES SIMPLES QUE OCUPAM 1 BYTE. SE FOR UM CARACTER COMPOSTO. EXEMPLO É, Á, Ú ELES OCUPARAM DOIS BYTES DE ESPAÇO.

$mail = 'rafael@gmail.com.br';
$senha = '123456';

echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 7){
    echo 'Sua senha é insegura!' . PHP_EOL;
}



