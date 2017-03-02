<?php
$nome_arquivo_entrada = 'reciclagem.in';
$nome_arquivo_saida = 'reciclagem.out';

$entrada = fopen($nome_arquivo_entrada, 'r');
$saida = fopen($nome_arquivo_saida, 'w');

$resuldado = null;
$ordem = null;
$cargas = 0;

while(!feof($entrada)) {
    $linha = trim(fgets($entrada));
    if($linha == "0") {
        if($cargas > 0) {
            fwrite($saida, $cargas . " " .
                $resuldado['ME'] . " " .
                $resuldado['PA'] . " " .
                $resuldado['PL'] . " " .
                $resuldado['VI'] . "\n" );
        }
        break;
    }
    $temp = explode(' ', $linha);
    if(in_array('ME', $temp) ||
     in_array('PA', $temp) ||
     in_array('PL', $temp) ||
     in_array('VI', $temp)) {
         if($cargas > 0) {
             fwrite($saida, $cargas . " " .
              $resuldado['ME'] . " " .
              $resuldado['PA'] . " " .
              $resuldado['PL'] . " " .
              $resuldado['VI'] . "\n" );
         }
         $resuldado['ME'] = 0;
         $resuldado['PA'] = 0;
         $resuldado['PL'] = 0;
         $resuldado['VI'] = 0;
         $cargas = $temp[0];
         $ordem = array_slice($temp, 1);
    } else {
        for($i = 0; $i < count($ordem);$i++)
            $resuldado[$ordem[$i]] += $temp[$i];
    }
}

fclose($entrada);
fclose($saida);
