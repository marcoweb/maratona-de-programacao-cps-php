<?php
$nome_arquivo_entrada = 'excel.in';
$nome_arquivo_saida = 'excel.out';

$entrada = fopen($nome_arquivo_entrada, 'r');
$saida = fopen($nome_arquivo_saida, 'w');

while(!feof($entrada)) {
    $linha = fgets($entrada);
    if($linha == "0")
        break;
    $temp = str_split(trim($linha));
    $valor = 0;
    for($i = 0;$i < count($temp); $i++)
        $valor += (ord($temp[$i]) - 64) * pow(26, count($temp) - 1 - $i);
    fwrite($saida, $valor."\n");
}

fclose($entrada);
fclose($saida);
