<?php

 # setDate => Recebe um ano, mês e dia, alterando completamente a data;
 # setTime => Recebe hora, minuto e segundo, alterando o tempo da data;

 $data = new DateTime();

 print_r($data);
 echo "<br>";

 $data->setDate(1998, 10, 13);

 print_r($data);
 echo "<br>";

 echo "Hora, minuto e segundo <br>";

 $data->setTime(05, 12, 10);
 print_r($data);