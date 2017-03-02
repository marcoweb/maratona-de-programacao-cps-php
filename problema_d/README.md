Problema D
==========

###Mega-Sena###

**Nome do arquivo fonte:** megasena.php

####Tarefa####

Jogos de loteria são eventos aleatórios que envolvem combinações. A Mega-Sena, por
exemplo, consiste na combinação de seis números selecionados de uma sequência de 1 a 60. O
jogador pode combinar de 6 a 15 números numa única aposta. A Caixa Econômica Federal
(CEF) sorteia, a cada concurso, apenas seis números, e cada número sorteado é retirado do
jogo. Ou seja, na combinação da Mega-Sena não é possível haver números repetidos. Os
prêmios são distribuídos entre quem faz a quadra (acerta 4 números), a quina (acerta 5 números)
ou a sena (acerta 6 números), qualquer que seja a ordem do sorteio. Segundo a CEF, a chance
de acertar a sena jogando apenas 6 números é de 1 para 50.063.860.

João Bolão é um apostador inveterado. Não perde um concurso. Tentando melhorar
suas chances de acerto, conseguiu as informações de todos os concursos já realizados pela
CEF. Ele gostaria de saber, quais os números mais foram sorteados em todos esses
concursos. Sabendo que você é um excelente programador, pediu sua ajuda para computar
quais os números que mais foram sorteados e quantas vezes isso aconteceu com cada um.

####Entrada####

A entrada consiste em um único arquivo de texto com várias linhas. Cada linha
contém a informação de um único concurso, começando com o número (X) do concurso,
onde 1 <= X <= 1875, a data em que foi realizado, e a sequência das 6 dezenas (D)
sorteadas, onde 1 <= D <= 60. Todos os dados separados por ponto-e-vírgula. A entrada
deverá ser lida de um arquivo megasena.in. A entrada termina com uma linha com o número
0, apenas para indicar o final do arquivo.

####Saída####

Saída deverá ser uma lista por ordem da quantidade de vezes que cada dezena foi
sorteada, da maior para a menor, de acordo com a lista de concursos fornecida na entrada.
Se houver empate na quantidade de vezes que uma ou mais dezenas foram sorteadas,
deverão ser ordenadas da menor para a maior dezena. Cada linha na saída deverá conter a
posição ordinal de sua colocação (P), onde 1 <= P <= 60, a dezena (D) e a quantidade (Q)
de vezes que foi sorteada, onde 0 <= Q <= 1875. Todas as informações deverão separadas
por um espaço. A saída deverá ser gravada em um arquivo megasena.out.

#####Exemplo de Entrada#####
1;11/03/1996;41;5;4;52;30;33  
2;18/03/1996;9;39;37;49;43;41  
3;25/03/1996;36;30;10;11;29;47  
4;01/04/1996;6;59;42;27;1;5  
5;08/04/1996;1;19;46;6;16;2  
0  

#####Saída para o exemplo de entrada#####
1 1 2  
2 6 2  
3 30 2  
4 41 2  
5 2 1  
6 4 1  
7 5 1  
8 5 1  
9 9 1  
10 10 1  
11 11 1  
12 16 1  
13 19 1  
14 27 1  
15 29 1  
16 33 1  
17 36 1  
18 37 1  
19 39 1  
20 42 1  
21 43 1  
22 46 1  
23 47 1  
24 49 1  
25 52 1  
26 59 1  