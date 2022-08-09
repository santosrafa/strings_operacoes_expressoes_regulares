<?php

$url = 'https://alura.com.br';

/* STR_STARTS_WITH :: VERIFICA SE O INICIO DA FRASE NESSE 'HTTPS' EXISTE. */

if (str_starts_with($url, 'https')){                
    echo 'É uma URL segura';
}else{
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

/* STR_ENDS_WITH :: VERIFICA SE DETERMINADA STRING ESTARÁ NO FINAL DA FRASE. */

if (str_ends_with($url, '.br')){                
    echo 'É um dominio brasileiro';
}else{
    echo 'Não é um dominio brasileiro';
}

