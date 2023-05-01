<?php

 // podemos calcular a diferença entre duas datas com o método diff;

 $dataA = new DateTime(); // essa vai pegar como referência a data atual do ano que estamos
 $dataB = new DateTime();

 $dataB->setDate(2001, 10, 15);

 print_r($dataA);
 echo "<br>";
 
 print_r($dataB);
 echo "<br>";
 echo "<br>";

 echo "Diferença da data A para a Data B <br>";

 $diferenca = $dataA ->diff($dataB);

 print_r($diferenca);

 echo "<br>";
 echo "<br>";
 # obtendo a diferença em dias 

 echo $diferenca->format("%a days");
 



