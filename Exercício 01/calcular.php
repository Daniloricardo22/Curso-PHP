<?php

$A= $_POST ['valor1'];
$B= $_POST ['valor2'];
$C= $_POST ['valor3'];
$D= $_POST ['valor4'];

$soma = $A + $C;
$multi = $B * $D;

if ($soma > $multi) {
    echo "o valor de Valor 1 + Valor 3 = " . $soma . " é maior do que a multiplicação de Valor 2 x Valor 4 = " . $multi;
    }
else if ($soma < $multi) {
    echo "o valor de Valor 1 + Valor 3 = " . $soma . " é menor do que a multiplicação de Valor 2 x Valor 4 = " . $multi;
    }
else {
    echo "O valor de Valor 1 + Valor 3 = " . $soma . " é igual ao valor de Valor 2 x Valor 4 = " . $multi;
}

?>
