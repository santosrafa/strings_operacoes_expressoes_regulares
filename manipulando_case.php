<?php

//STRTOUPPER :: SERVE PARA COLOCAR TODA A STRING EM MAIUSCULO.

//MBSTRING :: ELA ATIVADA NO PHP SERVE PARA COLOCAR UM CARACTER ESPECIAL PARA OCUPAR MAIS DE UM BYTE DE ESPAÇO.

//COMANDO PHP -M :: MOSTRA OS MODULOS INSTALADOS DO PHP.

$mail = 'rafael@gmail.com.br';
$senha = '123456';

echo mb_strlen($senha) . PHP_EOL;

if (strlen($senha) < 7){
    echo 'Sua senha é insegura!' . PHP_EOL;
}

$posicao_arroba = strpos($mail, '@');

$usuario = substr($mail, 0, $posicao_arroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($mail, $posicao_arroba + 1) . PHP_EOL;