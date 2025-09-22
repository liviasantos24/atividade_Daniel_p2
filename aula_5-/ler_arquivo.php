<?php

$arquivo = fopen("arquivo.txt", "r");
while (! feof($arquivo)){
    $linha = Fgets($arquivo);
    echo "$linha <br>";

}

fclose ($arquivo);

