<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>..::Meu formulário::..</title>


    <link href="css/bootstrap.css" rel="stylesheet">
	
    </head>
  <body>

<div class="container">
    <h1 style="margin-top: 1em;">Confira o seu cadastro</h1><hr>
    <?php
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $dnascimento = $_POST['dnascimento'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $dcadastro = $_POST['dcadastro'];
    $municipio = $_POST['municipio'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $uf1 = $_POST['uf1'];
    $inscricao = $_POST['inscricao'];
    $uf2 = $_POST['uf2'];

    echo "<b>Nome: </b>".$nome."<br>";
    echo "<b>CNPJ/CPF: </b>".$cnpj."<br>";
    echo "<b>Data de Nascimento: </b>".$dnascimento."<br>";
    echo "<b>Endereço: </b>".$endereco."<br>";
    echo "<b>Bairro: </b>".$bairro."<br>";
    echo "<b>CEP: </b>".$cep."<br>";
    echo "<b>Data do Cadastro: </b>".$dcadastro."<br>";
    echo "<b>Município: </b>".$municipio."<br>";
    echo "<b>Telefone: </b>".$telefone."<br>";
    echo "<b>Celular: </b>".$celular."<br>";
    echo "<b>UF: </b>".$uf1."<br>";
    echo "<b>Inscrição: </b>".$inscricao."<br>";
    echo "<b>UF: </b>".$uf2."<br>";    
    ?>
<hr>    
<a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>

<a href="confimar.php"><button type="button" class="btn btn-success">Confirmar</button></a>
    

    
</div>

	
</body>
</html>