<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Faça você mesmo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Home</a></li>
							<li>
								<img src="" alt="">
								<!--lojinha adicionar aqui opcional-->
							</li>
							<li><a href="Noticias.php">Noticias</a></li>
							<li><a href="Entenda sobre o meio ambiente.php">Entenda sobre o meio ambiente</a></li>
							<li><a href="Faca voce mesmo.php">Faça você mesmo</a></li>
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
							<div class="col-3 col-12-narrower">
								<div id="sidebar1">

									<!-- Sidebar 1 -->

										<section>
											<h3>Não jogue fora! Recicle</h3>
											<p>Hoje trouxemos para você um post recheado de ideias incriveis e totalmente sustentável.
												Garrafas pet, latinhas, caixas, potes de vidros, tudo pode virar decoração! Deixamos aqui em baixo tutoriais 
												Simples e rápidos que você vai se apaixonar!</p>
											<footer>
												<a href="#" class="button">Continuar</a>
											</footer>
										</section>

										<section>
											<h3>links de videos(Agora as embalagens na sua casa terão um novo destino!)</h3>
											<ul class="links">
												<li><a href="https://www.youtube.com/watch?v=K4AQOmsa4n4">18 MANEIRAS GENIAIS DE REUTILIZAR ROLOS DE PAPEL HIGIÊNICO EM CASA</a></li>
												<li><a href="https://www.youtube.com/watch?v=RcgZQi27CZ0">ARTESANATOS CRIATIVOS COM AS COISAS DO DIA A DIA</a></li>
												<li><a href="https://www.youtube.com/watch?v=_2wjQxyMnlo">Que tal uma cozinha incrivel e ecológica</a></li>
												<li><a href="https://www.youtube.com/watch?v=em4_Bbcj0Xs">Transformando seu Lixo em Luxo</a></li>
												<li><a href="https://www.youtube.com/watch?v=6EP3HVycp9s">Idéias lindas com potes de sorvete<3</a></li>
												<li><a href="https://www.youtube.com/watch?v=RdFpBYHplDQ">Vamos reaproveitar, reciclar xícaras e canecas quebradas e fazer um lindo artesanato.</a></li>
											</ul>
											<footer>
												<a href="#" class="button">Mais conteudo</a>
											</footer>
										</section>

								</div>
							</div>
							<div class="col-6 col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												
											</header>

											<span class="image featured"><img src="" alt="" /></span>

											

											<h3>Eai curtiu? então você também vai amar essas daqui</h3>
											<p>
												Latas decoradas
												<img src="captura-de-tela-2019-08-08-acc80s-10.41.55.png" width="560px" height="360px" alt=""></p>

											<p>Luminária de lata
												<img src="captura-de-tela-2019-08-08-acc80s-11.28.58.png"  width="560px" height="360px" alt=""></p>

											<p>Quadros de caixa de sapato
													<img src="captura-de-tela-2019-08-08-acc80s-08.27.49.png"  width="560px" height="360px" alt="">
											</p>
										</article>

								</div>
							</div>
							<div class="col-3 col-12-narrower">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

										<section>
											<h3>Incriveis né? dexamos aqui alguns links para que você entenda mais do assunto e continue reciclando</h3>
											<ul class="links">
												<li><a href="https://www.youtube.com/watch?v=OQ5jpiKzNqg">O que é a reciclagem?</a></li>
												<li><a href="https://www.youtube.com/watch?v=4OVW4SRYRp0">A importancia da reciclagem</a></li>
												<li><a href="https://www.youtube.com/watch?v=Lc9jF5Ruplo">Como ganhar dinheiro com reciclagem</a></li>
												
											</ul>
											<footer>
												<a href="https://terraanalises.com/blogpost/os-melhores-sites-e-blogs-de-meio-ambiente-que-voce-deve-acompanhar/" class="button">Para mais conteúdo click aqui</a>
											</footer>
										</section>

										<section>
											<h3>adicionar cont...</h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
											<footer>
												<a href="#" class="button">Continuar vendo</a>
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
								<h3>Problemas? Conte para Nós.</h3>
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