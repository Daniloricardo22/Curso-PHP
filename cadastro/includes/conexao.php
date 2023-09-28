<?php

//Declarar variáveis de uso para conexão ao banco
$servidor='127.0.0.1';
$banco='henrique';
$usuario='henrique';
$senha='8520';


//função para conexão com o banco
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_errno($conexao)){
        echo "Parece que algo deu errado. Não conectado!";

    }else{
        echo "Conectado com sucesso!";
    }

?>