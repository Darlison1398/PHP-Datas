<?php

 /* datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os operadores de comparação; */

 $dataA = new DateTime();
 $dataB = new DateTime();

 $dataC = new DateTime();

 $dataB->setDate(2022, 10, 20);


 if ($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
 }
 if ($dataA < $dataB){
    echo "A data A é maior que a data B <br>";
 }

 if ($dataA == $dataC){
    echo "As datas A e C são iguais <br>";
 }