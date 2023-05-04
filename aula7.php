<?php

$valor = 20000;
$anos = $valor / 365;
echo number_format ($anos)."<br>";
if ($anos  >= 18){
   echo "Voce é maior de idade.";
}else{
    echo "Voce é menor";
}
?>