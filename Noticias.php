<!DOCTYPE HTML>
<html lang="pt-br">
	
	<head>
		<title>Noticias</title>
		
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
								<li class="current"><a href="Noticias.php">Noticias</a></li>
								<li><a href="Entenda sobre o meio ambiente.php">Entenda sobre o meio ambiente</a></li>
								<li><a href="Faca_voce_mesmo.php">Faça você mesmo</a></li>
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
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>Destaque da semana</h3>
											<p>
											"Taxa oficial de desmatamento e 27% maior do que apontava sistema de alertas do inpe para 2019/2020"
										</p>
											<footer>
												<a href="https://g1.globo.com/natureza/noticia/2020/11/30/taxa-oficial-de-desmatamento-e-27percent-maior-do-que-apontava-sistema-de-alertas-do-inpe-para-20192020.ghtml" class="button">Continuar lendo</a>
											</footer>
										</section>
                                         <br><br>
										<section>
											<h3>Curiosidade
												<br><br>
												<a href="https://capricho.abril.com.br/comportamento/7-coisas-que-voce-pode-fazer-neste-ano-para-tornar-o-mundo-melhor/"
											 class="button">Pequenas atitudes podem ter um grande impacto 
											   </a>
											   <br><br>
											</h3>
											<footer>
											<h3>Sites recomendados</h3>
											<ul class="links">
												<li><a href="https://www.biologianet.com/">Biologianet</a></li>
												<li><a href="https://www.ecycle.com.br/">Ecycle</a></li>
												<li><a href="https://www.cantovivo.org/">Cantovivo</a></li>
											</ul>
											</footer>
										</section>
										<br><br>

								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>Noticia destaque</h2>
												<p> 
													<a href="https://noticias.uol.com.br/ultimas-noticias/bbc/2020/11/30/desmatamento-na-amazonia-cresce-95-e-chega-a-valor-mais-alto-desde-ano-de-2008.htm">
														Leia mais em: UOL</a>
												</p>
											</header>

											<span class="image featured"><img src="desmatamentodaamazonia.jpg" alt="" /></span>
										   <p>O desmatamento na Amazônia atingiu novos recordes, segundo dados preliminares levantados pelo Instituto Nacional de Pesquisas Espaciais (INPE) e divulgados nesta segunda-feira (30/11).
											   
											A área desmatada chegou ao nível anual mais alto desde 2008 — um total de 11.088 km² entre agosto de 2019 e julho de 2020. No período equivalente em 2008, o valor foi de 12.911 km².</p>
										 
										</article>
										<br><br>

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
								<h3>Links de parceiros</h3>
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
								<form>
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input type="text" name="name" id="name" placeholder="Nome" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Mensagem" rows="5"></textarea>
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
								<li>&copy;  EcoVibes. Todos os direitos reservados</li><li>2020</li>
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