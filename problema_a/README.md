Problema A
==========

###Excel###

**Nome do arquivo fonte:** excel.php

####Tarefa####

Charles de Code é programador de uma grande empresa. Recentemente um novo
sistema foi implantado substituindo as "velhas" planilhas em Excel. Charles foi incumbido de
importar todos os dados das planilhas para a base de dados do novo sistema. No entanto, a
rotina de importação que está usando é feita por terceiros e as colunas das planilhas em
Excel são referenciadas pela sua posição numérica e não por letras. Assim, a coluna A da
planilha é referenciada pelo número 1, a B pelo 2 e a Z pelo 26, por exemplo. O problema de
Charles começou quando as planilhas possuíam colunas com mais de uma letra. Ele
precisava contar a posição das colunas. Num grande esforço contou a posição da coluna AA
em 27, e a da coluna AAA na posição 703, entre várias outras. Porém essas contagens
estavam tomando muito tempo do trabalho de Charles e ainda numa pesquisa rápida na
Internet, ele descobriu que as planilhas em Excel aceitam até 1.048.576 linhas e 16.384
colunas!

Sabendo que você é um excelente programador, assim como ele, já tendo inclusive
trabalhado com algo semelhante, Charles apelou para a amizade e pediu que você
escrevesse um código que convertesse a posição das colunas de letras para números, afim
de facilitar seu trabalho.

####Entrada####

A entrada contém vários casos de testes. Cada caso de teste consiste em uma linha
que contém de 1 a 3 letras maiúsculas, sem espaços, indicando uma coluna em planilha do
Excel. A entrada deverá ser lida de um arquivo texto chamado excel.in.

####Saída####
Para cada caso de teste da entrada seu programa deve produzir uma linha na saída,
com o número de referência N da(s) letra(s) indicativa(s) da coluna, onde 1 <= N <= 16.384.

A saída deverá ser escrita em um arquivo texto chamado excel.out.

#####Exemplo de Entrada#####
A  
B  
C  
Z  
AA  
AAA  
EXW  
XFD  
#####Saída para o exemplo de entrada#####
1  
2  
3  
26  
27  
703  
4027  
16384  
