<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>..::Cadastro::..</title>


    <link href="css/bootstrap.css" rel="stylesheet">
	
    </head>
  <body>

<div class="container">
<h1 style="margin-top: 1em;">Cadastre-se</h1>
  <form action="resultado.php" method="post">
<div class="row">
    <div class="form-group col-md-6">
      <label for="usr">Nome/Razão Social:</label>
      <input type="text" placeholder="Digite sua razão social"class="form-control" id="usr" name="nome" >
    </div>
    <div class="form-group col-md-3">
      <label for="usr">CNPJ/CPF:</label>
      <input type="text" placeholder="Digite o CNPJ/CPF"class="form-control" id="usr" name="cnpj" pattern="[0-9]+$">
    </div>
    <div class="form-group col-md-3">
      <label for="usr">Data de Nascimento:</label>
      <input type="date" placeholder="Digite sua Data de Nascimento"class="form-control" id="usr" name="dnascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1980-01-01" max="2019-02-18">
    </div>
</div>
      
<div class="row">
    <div class="form-group col-md-4">
      <label for="usr">Endereço:</label>
      <input type="text" placeholder="Digite seu Endereço"class="form-control" id="usr" name="endereco">
    </div>
    <div class="form-group col-md-3">
      <label for="usr">Bairro:</label>
      <input type="text" placeholder="Digite o Bairro"class="form-control" id="usr" name="bairro">
    </div>
    <div class="form-group col-md-2">
      <label for="usr">CEP:</label>
      <input type="text" placeholder="Digite o CEP"class="form-control" id="usr" name="cep" pattern="[0-9]+$">
    </div>      
    <div class="form-group col-md-3">
      <label for="usr">Data de Cadastro:</label>
      <input type="date" class="form-control" id="usr" name="dcadastro" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1980-01-01" max="2019-02-18">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
      <label for="usr">Município:</label>
      <input type="text" placeholder="Digite o Município"class="form-control" id="usr" name="municipio">
    </div>
    <div class="form-group col-md-2">
      <label for="usr">Telefone:</label>
      <input type="text" placeholder="Digite seu telefone"class="form-control" id="usr" name="telefone" pattern="[0-9]+$">
    </div>
    <div class="form-group col-md-2">
      <label for="usr">Celular:</label>
      <input type="text" placeholder="Digite seu Celular" class="form-control" id="usr" name="celular" pattern="[0-9]+$">
    </div>
    <div class="form-group col-md-1">
      <label for="usr">UF:</label>
      <input type="text" placeholder="UF"class="form-control" id="usr" name="uf1" >
    </div>
    <div class="form-group col-md-3">
      <label for="usr">Inscrição Estadual:</label>
      <input type="text" placeholder="Digite sua Inscrição Estadual" class="form-control" id="usr" name="inscricao" pattern="[0-9]+$">
    </div>
    <div class="form-group col-md-1">
      <label for="usr">UF:</label>
      <input type="text" placeholder="UF" class="form-control" id="usr" name="uf2">
    </div>
</div>
      
      
      
    
  <button type="submit" class="btn btn-success">Salvar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
      
 </form>
</div>

	
</body>
</html>