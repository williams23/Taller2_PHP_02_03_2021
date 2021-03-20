<?php
// 1. Ingresar el número de término de la siguiente serie: 200, 198, 196, 194 ,…….,N,
// mostrar la suma de la serie completa.

$Lista= (array) [];

$ingresar = 194; //
for ($i=200; $i >= $ingresar ; $i--) { 
    $i2 = $i--;
    array_push($Lista, $i2); 
    print_r($i2);
    print_r("<br>");
}
echo("<hr> </hr>");
$suma = array_sum($Lista);
print_r("<b> Suma: </b>".$suma);
echo("<hr> </hr>");

?>