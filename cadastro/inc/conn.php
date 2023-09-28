<?php
    //variaveis de uso
$servidor='127.0.0.1';
$banco='cadastramento';
$usuario='rr';
$senha='';

//cria conexao 
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_errno($conexao)){
        echo("Algo deu errado!");
        
    }else
        echo("Conectado!");
    
?>