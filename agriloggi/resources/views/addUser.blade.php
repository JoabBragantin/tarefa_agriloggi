<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
             	content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">         			
	<title>Cadastro do Produto</title>
</head>
<body>

<form action="" method="post">
	<label for="">Nome do produto</label>
	<input type="text" name="produto">

	<label for="">Categoria do produto</label>
	<input type="text" name="Categoria">

	<label for="">Descrição do produto</label>
	<input type="text" name="descrição">

	<label for="">Quantidade</label>
	<input type="value" name="Quantidade">

	<label for="">Preço</label>
	<input type="value" name="Preço">

	<input type="submit" value="Cadastrar produto">
	
</form>	
	@yield('content')
</body>
</html>>