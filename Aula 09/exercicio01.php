<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;
    
    echo "Você nasceu em $ano e terá $idade anos. <br/>";
    
    if($idade < 16) {
        $voto = "Não pode votar";
        $dirigir = "Não pode dirigir";
    } else {
        if (($idade >= 16 && $idade < 18) || ($idade>65)) {
            $voto = "Voto opcional";
            $dirigir = "Não pode dirigir";
        } else {
        $voto = "pode votar";
        $dirigir = "pode dirigir";
        }
    }
    echo "Para essa idade, você $voto e também $dirigir ";
    ?>

    </div>
</body>

</html>