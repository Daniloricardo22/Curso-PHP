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
    $nota01 = $_GET["nota01"];
    $nota02 = $_GET["nota02"];
    $media = ($nota01 + $nota02) /2;
    
    echo "As notas desse ano foram $nota01 e $nota02 <br/>";
    echo "A média é $media <br/>";
    
    if($media >= 7) {
        $aluno = "Aluno está APROVADO";
        
    } else {
        if ($media >= 5 && $media<7) {
            $aluno = "Aluno está RECUPERAÇÃO  ";
        } else {
        $aluno = "Aluno foi REPROVADO";
        }
    }
    echo "Para essa média, o $aluno ";
        
    ?>
</div>
</body>
</html>
 