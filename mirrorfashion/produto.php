	<?php
		$conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
		$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
		$produto = mysqli_fetch_array($dados);
	?>
	
	<?php
		$img_logo = '<img src="img/logo.png" alt="Mirror Fashion">';
		$cabecalho_title = "Produto	da Mirror Fashion";
		$cabecalho_title2 = " - ".$produto['nome'];
		$cabecalho_css2 = '<link rel="stylesheet" type="text/css" href="css/bootstrap.css">';
		$cabecalho_css = '<link rel="stylesheet" type="text/css" href="css/css-min/produto.min.css">';
		include("cabecalho.php");
	?>
	
	<div class="produto-back">
		
		<div class="container">
			<div class="produto">
				<h1><?= $produto['nome']?></h1>
				<p>por apenas<?= $produto['preco']?></p>
				
				<div id="fb-root"></div>
				<div class="fb-like" data-href="http://www.mirrorfashion.net"
				data-send="false" data-layout="box_count"
				data-width="58" data-show-faces="false"> </div>
				
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
				
				<form method="POST" action="checkout.php">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<input type="hidden" name="nome" value="<?=$produto['nome']?>">
					<input type="hidden" name="preco" value="<?=$produto['preco']?>">

					<fieldset class="cores">
						<legend> Escolha a cor:</legend>
					
						<input type="radio" name="cor" id="verde">
						<label for="verde">
							<img src="./img/produtos/foto<?= $produto['id']?>-verde.png" alt="produto na cor verde">
						</label>
						
						<input type="radio" name="cor" id="rosa">
						<label for="rosa">
							<img src="./img/produtos/foto<?= $produto['id']?>-rosa.png" alt="produto na cor rosa">
						</label>
					
						<input type="radio" name="cor" id="azul">
						<label for="azul">
							<img src="./img/produtos/foto<?= $produto['id']?>-azul.png" alt="produto na cor azul">
						</label>
					 
					</fieldset>
					
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						
						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						<output for="tamanho" name="valorTamanho">42</output>
					</fieldset>
		
					<button class="comprar">comprar</button>
				</form>
			</div>
			
			<div class="detalhes">
				<h2>detalhes dos produtos</h2>
				
				<p><?= $produto['descricao']?></p>
			
				<table>
					<thead>
						<tr>
							<th>Caracteristicas</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/produto.js"></script>
	
	<script>
		(function(d, s,	id) {
			var	js,	fjs	= d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js,	fjs);
		}(document,	'script','facebook-jssdk'));
	</script>
	
	<script>window.twttr = (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0],
		t = window.twttr || {};
	  if (d.getElementById(id)) return t;
	  js = d.createElement(s);
	  js.id = id;
	  js.src = "https://platform.twitter.com/widgets.js";
	  fjs.parentNode.insertBefore(js, fjs);

	  t._e = [];
	  t.ready = function(f) {
		t._e.push(f);
	  };

	  return t;
	}(document, "script", "twitter-wjs"));</script>
	
	<?php include("rodape.php");?>