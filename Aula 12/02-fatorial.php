<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $v = $_GET["val"];
    echo "<h1> Calculando o fatorial de $v <h1>";
    $c = $v;
    $fat = 1;
    do{ 
        $fat = $fat * $c;
        $c --;
    }while ($c >=1);
    echo "<h2> $v ! = $fat";

    ?>
    <a href="_modelohtml.html">voltar</a>
</div>
</body>
</html>