<?php 

 /* Por padrão, o php vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;
 Porém, podemos alterar manualmente o fuso com a função date_default_timezone_set; */

 # devemos tomar cuidado com esse processo.

 date_default_timezone_set("America/Minas_Gerais");

 $data = new DateTime();

 print_r($data);
 echo "<br>";

