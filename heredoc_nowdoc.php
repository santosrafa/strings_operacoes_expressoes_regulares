<?php

//Heredoc :: Será equivalente a aspas duplas.

//Nowdoc :: Será equivalente a aspas simples. Para utiliza-lo por exemplo o 'FIM' tem que estar em aspas simples.

function geraEmail() : void {
    $conteudo = <<<FINAL

    Olá, Fulano

    Descreva aqui sua vida

    {vida}

    FINAL;

    echo $conteudo;
}

geraEmail();