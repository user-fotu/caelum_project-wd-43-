<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Checkout	Mirror Fashion</title>
			<meta name="viewport" content="width=device-width">
		</head>
		
		<body>
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
			
			<h2>Sua compra</h2>
			<dl>
				<dt>Cor:</dt>
				<dd><?= $dados['cor'] ?></dd>
				
				<dt>Tamanho:</dt>
				<dd><?= $_POST['tamanho'] ?></dd>
				
				<dt>Nome:</dt>
				<dd><?= $_POST['nome'] ?></dd>
				
				<dt>Preço:</dt>
				<dd><?= $_POST['preco'] ?></dd>
			</dl>
		</body>
	</html>