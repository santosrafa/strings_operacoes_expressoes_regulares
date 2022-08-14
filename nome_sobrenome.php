<?php

//FUNCA EXPLODE :: ELA PRECISA DE DOIS PARAMETROS PARA SER EXECUTADA, E NÓS RETORNARÁ UM ARRAY

$nome = 'Rafael Teles';
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

list ($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;
