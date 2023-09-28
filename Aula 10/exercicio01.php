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
      $d = $_GET["ds"];
      switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
          echo "Lavanta e vai trabalhar!";
          break;
        case 7:
        case 8:
          echo "Descanse";
        break;
        default:
          echo "Dia da semana inválido!";
      }
              
    ?>
    <br/> <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 