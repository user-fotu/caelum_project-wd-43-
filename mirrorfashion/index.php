	<?php
		$reset_css = '<link rel="stylesheet" type="text/css" href="css/css-min/reset.min.css">';
		$cabecalho_css = '<link rel="stylesheet/less" type="text/css" href="less/estilos.less"/>';
		$img_logo = '<img src="img/logo.png" alt="Mirror Fashion">';
		$cabecalho_title = "MirrorFashion";
		include("cabecalho.php"); 
	?>

	<div class="container destaque">

		<section class="busca">
			<h2>busca</h2>

			<form>
				<input type="search">
				<button>Buscar</button>
			</form>
		</section>
		<!-- fim .busca -->

		<section class="menu-departamentos">
			<h2>departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>
		<!-- fim .menu-departamentos -->

		<section class="banner-destaque">
			<figure>
				<img src="./img/destaque-home.jpg" alt="Promoção: Big City Night">
					<button type="button"><a href="#" class="pause"></a></button>
				</img>
			</figure>
		</section>
		<!-- fim .banner-destaque -->
	</div>
	<!-- fim .container .destaque -->

	<div class="container paineis">
		<section class="painel novidades">
			<h2>novidades</h2>
			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12");
					
					//	//<!--user_fotu!! :) -->
					while($produtos = mysqli_fetch_array($dados)) :
				?>
				
				<li>
					<a href="produto.php?id=<?= $produtos['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produtos['id'] ?>.png">
							<figcaption><?= $produtos['nome']?> por <?= $produtos['preco'] ?></figcaption>
						</figure>
					</a>
				</li>
				
				<?php endwhile; ?>
			</ol>
			<button type="button" class="mostrar-mais">Mostrar mais</button>
		</section>

		<section class="painel mais-vendidos">
			<h2>mais vendidos</h2>

			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0,12");
					
					//	//<!--user_fotu!! :) -->
					while($produtos = mysqli_fetch_array($dados)) :
				?>
				
				<li>
					<a href="produto.php?id=<?= $produtos['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produtos['id'] ?>.png">
							<figcaption><?= $produtos['nome']?> por <?= $produtos['preco'] ?></figcaption>
						</figure>
					</a>
				</li>
				
				<?php endwhile; ?>
			</ol>
			<button type="button" class="mostrar-mais">Mostrar mais</button>
		</section>
	</div>
	<!-- fim .container .paineis -->

	<?php include("rodape.php"); ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script	type="text/javascript" src="js/home.js"></script>
	<script src="less.js-master/dist/less.min.js" type="text/javascript"></script>