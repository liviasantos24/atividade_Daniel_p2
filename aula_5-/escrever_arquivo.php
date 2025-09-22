<?php

    $arquivo = fopen("arquivo.txt", "a");

    $frase1 = $_REQUEST ["frase1"];
    $frase2 = $_REQUEST ["frase2"];
    $frase3 = $_REQUEST ["frase3"];

    $frase = fwrite($arquivo, "$frase1  \n");
    $frase = fwrite($arquivo, "$frase2  \n");
    $frase = fwrite($arquivo, "$frase3  \n");

    echo "frase <b>$frase1</b> salva com sucesso<br>";
    echo "frase <b>$frase2</b> salva com sucesso<br>";
    echo "frase <b>$frase3</b> salva com sucesso<br>";
     