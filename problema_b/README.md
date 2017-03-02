Problema B
==========

###Pesquisa Eleitoral###

**Nome do arquivo fonte:** pesquisa.php

####Tarefa####

As eleições municipais estão chegando e nosso cliente gostaria de fazer pesquisas
eleitorais de intenção de voto para prefeito em várias cidades.

Ele gostaria de saber o nome da cidade onde foi realizada a pesquisa, a quantidade e
a amostra de eleitores nesta cidade, o percentual que cada candidato nesta amostra, a
quantidade de votos brancos, nulos e indecisos, todos em percentual em relação à
amostragem.

####Entrada####

A entrada possui vários casos de testes. Cada caso de teste corresponde à uma
pesquisa em uma das cidades pesquisadas.

A primeira linha conterá o nome da cidade, a quantidade total de eleitores da cidade
(Q), onde 1 <= Q <= 9.000.000 e a data da pesquisa, no formato dd/mm/aaaa. Todos os
dados separados por ponto-e-vírgula (;).

A segunda linha conterá X nomes de candidatos a prefeito, também separados por
ponto-e-vírgula (;). Não há uma quantidade única, já que cada cidade pode ter vários
candidatos. Porém, a ordem de entrada dos candidatos será utilizada para identificação da
intenção do voto. O primeiro candidato da linha será o de no 1, o segundo na sequência o de
no 2, e assim sucessivamente até o último nome da lista, candidato no X.

Da terceira linha em diante, será apresentada a intenção de voto de cada um dos
eleitores pesquisados na amostragem, sendo 1 para o primeiro candidato da lista daquela
cidade, 2 para o segundo e assim sucessivamente até o candidato X. Ainda, se a intenção
for N, contar como voto Nulo, B contar como voto em Branco e I contar como Indeciso.

Cada caso de teste é encerrado pela letra Z, que não deverá ser computada,
servindo apenas para indicar o final daquele caso de teste.

A entrada deverá ser lida de um arquivo texto chamado pesquisa.in.

####Saída####

A saída deverá conter na primeira linha o nome da cidade, a quantidade de eleitores,
a data da pesquisa, o total de eleitores da amostragem e a quantidade de candidatos.

Nas demais linhas deverão conter o nome do candidato e o percentual de votos desta
amostragem, formatado para o padrão brasileiro com uma casa decimal, sem
arredondamento. A ordem de apresentação dos candidatos deverá ser a mesma que na
entrada.

A identificação e o percentual dos votos Nulos deverão estar na antepenúltima linha,
os em Branco na penúltima e os Indecisos na última. Todos deverão conter o percentual da
amostragem com a mesma formatação informada nos candidatos. Todos os campos
deverão ser separados por espaços.

A saída deverá ser escrita em um arquivo texto chamado pesquisa.out.


#####Exemplo de Entrada#####
São Paulo;8886325;13/08/2016  
A;B;C;D;E  
1  
1  
2  
2  
2  
1  
N  
N  
4  
4  
3  
3  
I  
I  
B  
B  
Z  
Pracinha;1546;11/08/2016  
T;A;S  
1  
2  
2  
1  
N  
3  
3  
I  
B  
1  
2  
3  
B  
N  
I  
Z  
#####Saída para o exemplo de entrada#####
São Paulo 8886325 13/08/2016 16 5  
A 18,7  
B 18,7  
C 12,5  
D 12,5  
E 0,0  
Nulos 12,5  
Brancos 12,5  
Indecisos 12,5  
Pracinha 1546 11/08/2016 15 3  
T 20,0  
A 20,0  
S 20,0  
Nulos 13,3  
Brancos 13,3  
Indecisos 13,3  