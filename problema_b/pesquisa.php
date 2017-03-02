<?php
$nome_arquivo_entrada = 'pesquisa.in';
$nome_arquivo_saida = 'pesquisa.out';

$entrada = fopen($nome_arquivo_entrada, 'r');
$saida = fopen($nome_arquivo_saida, 'w');

$cidade = "";
$eleitores = "";
$data = "";
$votos = [];
$candidatos = [];
$amostragem = 0;

while(!feof($entrada)) {
    $linha = trim(fgets($entrada));
    if($linha == "")
        break;
    if ($cidade == "" && count($votos) == 0) {
        $temp = explode(";", $linha);
        $cidade = $temp[0];
        $eleitores = $temp[1];
        $data = $temp[2];
    } else if (count($votos) == 0) {
        $temp = explode(';', $linha);
        for ($i = 0;$i < count($temp);$i++) {
            $candidatos[$i] = $temp[$i];
            $votos[$i] = 0;
        }
        $candidatos[count($temp)] = 'Nulos';
        $votos[count($temp)] = 0;
        $candidatos[count($temp) + 1] = 'Brancos';
        $votos[count($temp) + 1] = 0;
        $candidatos[count($temp) + 2] = 'Indecisos';
        $votos[count($temp) + 2] = 0;
        $amostragem = 0;
    } else {
        switch($linha) {
            case "Z":
                fwrite($saida, $cidade." ".$eleitores." ".$data." ".$amostragem." ".(count($candidatos) - 3)."\n");
                for ($i = 0;$i < count($votos);$i++) {
                    $calc = $votos[$i] * 100 / $amostragem;
                    fwrite($saida, $candidatos[$i]." ".number_format($calc, 1, ',', '')."\n");
                }
                $cidade = "";
                $votos = [];
                $candidatos = [];
                break;
            case "N":
                $votos[count($candidatos) - 3]++;
                $amostragem++;
                break;
            case "B":
                $votos[count($candidatos) - 2]++;
                $amostragem++;
                break;
            case "I":
                $votos[count($candidatos) - 1]++;
                $amostragem++;
                break;
            default:
                $votos[$linha - 1]++;
                $amostragem++;
                break;
        }
    }
}

fclose($entrada);
fclose($saida);
