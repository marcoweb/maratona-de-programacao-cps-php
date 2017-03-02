<?php
$nome_arquivo_entrada = 'megasena.in';
$nome_arquivo_saida = 'megasena.out';

$entrada = fopen($nome_arquivo_entrada, 'r');
$saida = fopen($nome_arquivo_saida, 'w');

$dezenas = [];
for($i = 1; $i <= 60;$i++)
    $dezenas[$i] = 0;

while(!feof($entrada)) {
    $linha = trim(fgets($entrada));
    if($linha == "0")
        break;
    $temp = array_slice(explode(';', $linha), 2);
    foreach($temp as $num)
        $dezenas[$num]++;
}

uksort($dezenas, function($key_a, $key_b) use ($dezenas) {
    if($dezenas[$key_a] < $dezenas[$key_b] || ($dezenas[$key_a] == $dezenas[$key_b] && $key_a > $key_b))
        return true;
    else
        return false;
});
$count = 1;
foreach($dezenas as $key => $value)
    fwrite($saida, $count++ . " " . $key . " " . $value . "\n");

fclose($entrada);
fclose($saida);
