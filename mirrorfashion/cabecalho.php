<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?= @$cabecalho_title ?> <?= @$cabecalho_title2 ?></title>
		<?= @$cabecalho_css2 ?>
		<?= @$cabecalho_css ?>
		<?= @$reset_css?>
		<link rel="stylesheet" type="text/css" href="css/css-min/estilos.min.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<header class="container">
			<h1 class="logotipo">
				<?php print @$img_logo; ?>
			</h1>

			<p class="sacola">
				Nenhum item	na sacola de compras
			</p>
			
			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua Conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>
		</header>
		<?php print @$content_document; ?>
	</body>
</html>