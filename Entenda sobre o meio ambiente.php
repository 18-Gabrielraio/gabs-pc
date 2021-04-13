<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Entenda sobre o meio ambiente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php
			session_start();
			if (!isset($_SESSION['nome'])) {
				echo("<link rel='stylesheet' href='deslogadooo.css'>"); 
			} else{
				echo("<link rel='stylesheet' href='logado.css'>");
			}
		  ?>
		    <style>
				.vl1{
					border-left: 6px solid green;
					height: 82px;
					
					display: block;
					position: absolute;
					bottom: -7px
				}
			</style>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>
								<!--lojinha adicionar aqui opcional-->
								</li>
								<li><a href="Noticias.php">Noticias</a></li>
								<li class="current"><a href="Entenda sobre o meio ambiente.php">Entenda sobre o meio ambiente</a></li>
							    <li><a href="Faca_voce_mesmo.html">Faça você mesmo</a></li>
								<?php if (!isset($_SESSION['nome'])) {
												echo('<li><a id="deslogado1" href="cadastro.html">Cadastrar</a></li>
													  <li> <a id="deslogado2" href="login.html">login</a></li>'); 
											} else{
												echo("<li><h5 style='color:white !important;'>&nbsp<div class='vl1'></div> <img style='
												 
												bottom: 10px margin-bottom: 500px height: 50px' src='person1.png'  width='60px'></img>".$_SESSION['nome']."</h5></li>");
											} ?> <!-- 50px circulo e 27 normal -->
											<li> <a id="logado1" href="perfil.php">Perfil</a></li>
											<li> <a id="logado2" href="sair.php">Sair</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>O que é meio ambiente?</h2>
												<p>..........</p>
											</header>

											

											<p>Muito se fala sobre isso, mas afinal o que é?
												Meio ambiente pode ser definido como um conjunto de fatores físicos, químicos e biológicos que permite a vida em suas 
												mais diversas formas. Todas as pessoas têm o direito a um meio ambiente equilibrado, assim, a sua preservação é essencial.

												Diante do constante processo de degradação do meio ambiente causado, principalmente, pela ação do homem,
												a Organização das Nações Unidas estabeleceu o dia 5 de junho como
												o Dia Mundial do Meio Ambiente, com o objetivo de conscientizar a população sobre a importância de sua preservação..</p>
												<span> <img src="img2.jpg" ></span>
											
											<p>Segundo o artigo 3º da Lei da Política Nacional do Meio Ambiente, podemos definir meio
												ambiente como o “ conjunto de condições, leis, influências e interações de ordem física, química e biológica que permite,
												abriga e rege a vida em todas as suas formas”.O conceito de meio ambiente poder ser analisado de diveros prismas, como: aspectos naturais(fauna e flora); espaço urbano(meio ambiente artificial);
											   locais onde as pessoas exercem suas atividades ou até mesmo patrimônio cultural.</p>

											   <span><img src="meio-ambiente.jpg" alt=""></span>

											<h3>Todos temos direito a uma vida de qualidade, cuide do nosso planeta com ações simples:</h3>

											<p>Reciclar e reutilizar;

												Limitar o tempo de banho em cerca de cinco minutos é uma boa maneira de economizar água;
												
												Deixar o chuveiro desligado enquanto se ensaboa e as torneiras fechadas enquanto se escova os dentes;
												
												Reutilizar a água da máquina de lavar roupas para fins que não necessitem de água potável;
												
												Apagar as luzes ao sair dos ambientes;
												
												Não deixar equipamentos eletrônicos em stand-by;
												
												Evitar a utilização do carro, buscando meios de transporte alternativos;
												
												Evitar o consumo exagerado e inconsciente.</p>
										</article>

								</div>
							</div>
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										

										<section>
											<h3>Se você gostou do assunto e quer saber mais, deixamos  aqui em baixo projetos que vale a pena conhecer</h3>
											<ul class="links">
												<li><a href="https://brasilsustentaveleditora.com.br/meio-ambiente/">Brasil Sustentavel</a></li>
												<li><a href="https://www.greenpeace.org/brasil/">Green peace Brasil</a></li>
												<li><a href="https://noticias.portaldaindustria.com.br/listas/5-projetos-sustentaveis-para-preservar-o-meio-ambiente/">Projetos sustentáveis Senai</a></li>
												
											</ul>
											<footer>
												<a href="https://www.dimensaodanatureza.com/single-post/10-sites-incriveis-que-falam-sobre-natureza" class="button">Mais sobre</a>
											</footer>
										</section>

								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Venha conhecer nossos parceiros</h3>
								<ul class="links">
									<li><a href="#">Mattis et quis rutrum</a></li>
									<li><a href="#">Suspendisse amet varius</a></li>
									<li><a href="#">Sed et dapibus quis</a></li>
									<li><a href="#">Rutrum accumsan dolor</a></li>
									<li><a href="#">Mattis rutrum accumsan</a></li>
									<li><a href="#">Suspendisse varius nibh</a></li>
									<li><a href="#">Sed et dapibus mattis</a></li>
								</ul>
							</section>
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Perguntas Frequentes </h3>
								<ul class="links">
									<li><a href="#">Estou com problemas no login</a></li>
									<li><a href="#">Não consigo doar</a></li>
									<li><a href="#">Encontrei bugs no site</a></li>
									<li><a href="#">Não consigo redefinir minha senha</a></li>
									<li><a href="#">Esqueci minha senha</a></li>
									<li><a href="#">Como faço para doar?</a></li>
									<li><a href="#"></a></li>
								</ul>
							</section>
							<section class="col-6 col-12-narrower">
								<h3>Problemas? conte para Nós</h3>
								<form action="contato.php" method="POST"> 
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input type="text" name="nome" id="name" placeholder="Nome" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="msg" id="message" placeholder="Mensagem" rows="5"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Enviar" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="https://twitter.com/vibes_eco" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/eco.vibes.526" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://github.com/EcoVibes" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="https://www.linkedin.com/in/eco-vibes-472721200" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							<li><a href="https://instagram.com/ecovibes4.0?igshid=1qdairhrq3f6k" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; EcoVibes. Todos os direitos reservados</li><li>2020</li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>