Problema C
==========

###Coleta Seletiva - Reciclagem ###

**Nome do arquivo fonte:** reciclagem.php

####Tarefa####

Uma empresa de reciclagem de materiais recebe carregamentos de diversas
cooperativas de coleta de recicláveis. Entretanto, os relatórios contendo a quantidade de
materiais entregues, possuem ordens diferentes de dados entre as diversas cooperativas.
Para efetuar o pagamento às cooperativas a empresa deve possuir o número de cargas
recebido e as quantidades de Metal, Papel, Plástico e Vidro nesta ordem.

Como programador recém contratado da empresa, você foi convocado para escrever
um programa que emita um relatório geral para facilitar os pagamentos.

####Entrada####

A entrada contém vários casos de testes sendo que cada um é composto de 2 ou
mais linhas. A primeira linha do caso de teste contém um número inteiro (1 <= N <= 10),
definindo a quantidade de cargas entregues, seguido por 4 strings separados por espaços,
definindo a ordem dos materiais nas cargas desta cooperativa ("ME", "PA", "PL', "VI"). Cada
uma das N linhas seguintes definem uma carga entregue, sendo que a quantidade de cada
material é um número inteiro, separados por espaços.

O arquivo termina com um número zero, que não deverá ser tratado, servindo apenas
para indicar o final do arquivo.

A entrada deverá ser lida do arquivo reciclagem.in.

####Saída####

Para cada caso de teste o programa deverá imprimir uma única saída contendo 5
números inteiros Q M P L V, separados por espaços, onde Q é a quantidade de cargas, M é
a quantidade total de metal (ME), P é a quantidade total de papel (PA), L é a quantidade total
de plástico (PL) e V é a quantidade total de vidro (VI), de todas as cargas entregues naquele
caso de teste.

A saída deverá ser escrita em um arquivo chamado reciclagem.out.

#####Exemplo de Entrada#####
2 ME VI PA PL  
359 385 261 251  
139 646 107 500  
2 PL ME VI PA  
753 439 401 640  
930 532 117 215  
1 VI PA ME PL  
322 689 315 529  
2 PA VI ME PL  

#####Saída para o exemplo de entrada#####
2 498 368 751 1031  
2 971 855 1683 518  
1 315 689 529 322  
2 1219 1021 1448 1248  
2 1759 832 1078 488  