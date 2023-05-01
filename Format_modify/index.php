<?php
 

 $data = new DateTime();

 echo $data->format("d/m/y") . "<br>";

 echo $data->format("D - M - Y") . "<br>";

 echo "<br>";

 // data mais 5 dias
 $data->modify("+5 days");

 echo $data->format("d/m/y") . "<br>";

 echo "<br>";

 // podemos subtrair também

 $data->modify("-5 days");

 echo $data->format("d/m/y") . "<br>";



