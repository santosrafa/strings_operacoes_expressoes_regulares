<?php

//trim :: Retira espaço no inicio e no final da string, ela não apara nada que estiver nas estremidades da string.

//ltrim :: Retira espaço no inicio da string.

//rtrim :: Retira espaço no final da string.

$email = ' rafael@hotmail.com ';
$cvs = ',Rafael Teles,24,';

echo trim($email) . PHP_EOL;

echo trim($cvs, ',') . PHP_EOL;