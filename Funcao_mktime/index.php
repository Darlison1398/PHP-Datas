<?php

 // a função mktime, recebe em seus parâmetros: hora, minuto, dia, segundo, mês, dia e ano;

 $dataNascimento = mktime(02, 12, 33, 13, 10, 1998);
 echo $dataNascimento . "<br>";

 $dataNascimentoFormatada = date("d/m/y", $dataNascimento);

 echo $dataNascimentoFormatada;