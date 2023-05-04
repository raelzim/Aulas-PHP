<?php

$variavel = 10;


if($variavel < 20) {
    echo "É MENOR QUE 20";
} else {  
    echo "É maior que 20";
}

echo "<br><br>";

echo "Usando For<br>";
for($i=0; $i<=10; $i++) {
    echo $i. "<br> <br>";

}    

echo "<br><br>";

$j = 0;
while($j <= 10 ) {
    echo $j. "<br> <br>";
    $j++;
}   

echo "<br><br>";
echo "Usando do... While<br>";
$k = 0;
do {
    echo "Olá";
    $k++;
}  while($k <= 10);

$switch = 1;
switch ($switch) {
    case 1: echo "Número 1";
    break;
    default: echo "não é o valor informado";
    break;
}    



?>