<?php

$H= $_POST ['altura'];
$sexo = $_POST ['sexo'];
$homem = (72.7 * $H) - 58 ;
$mulher = (62.1 * $H) - 44.7 ;

switch ($sexo) {
    case 'masculino' : $resultado = $homem;
    case 'feminino' : $resultado = $mulher;
        
        echo $resultado;
        
        
}

if ($homem ) {
    
    echo "O seu peso ideal deve ser= " . $resultado . 
    }
else  ($mulher) {
    echo "O seu peso ideal deve ser= " . $resultado . 
    }



?>