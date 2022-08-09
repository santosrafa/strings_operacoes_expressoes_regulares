<?php

$nome = 'Vinicius Dias';

$eh_da_familia = str_contains($nome, 'Santos');     //FUNCAO STR_CONTAINS VERIFICA SE A STRING EXISTE NA FRASE.

if ($eh_da_familia){
    echo "$nome é da minha familia" . PHP_EOL;
}else{
    echo "$nome não é da minha familia" . PHP_EOL;
}