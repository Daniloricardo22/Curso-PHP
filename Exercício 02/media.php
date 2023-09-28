<?php

 
$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];
$nota4 = $_POST ['nota4'];


$soma = ($nota1 + $nota2 + $nota3 + $nota4) / 4.0 ;
$media = $soma;

if ($media >= 7.0) {
    echo "O aluno está aprovado!! Sua média é " . $media ; 
    
    }
else if ($media < 7.0) {
    echo "O aluno está reprovado!! Sua média é " . $media ;
    }

?>