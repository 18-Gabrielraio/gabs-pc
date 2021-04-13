<!DOCTYPE HTML>
<html lang="pt-br">

	<head>
		<title>Eco Vibes</title>
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
								<li class="current"><a href="index.html">Home</a></li>
								<li>
									<img src="" alt="">
									<!--lojinha adicionar aqui opcional-->
								</li>
								<li><a href="Noticias.php">Noticias</a></li>
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

			<!-- Banner -->
				<section  
				<div class="w3-content w3-section" style="max-width:100%">
					
				  
					<img class="mySlides animate-fading" src="heart-1192662_1920.jpg" style="width:100%">
					<img class="mySlides animate-fading" src="EcoVibeslogo.jpeg" style="width:100%">
					<img class="mySlides animate-fading" src="logo1.jpeg" style="width:100%">
				
				</div>
				  
				  <script>
				  var myIndex = 0;
				  carousel();
				  
				  function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					for (i = 0; i < x.length; i++) {
					  x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
					x[myIndex-1].style.display = "block";  
					setTimeout(carousel, 5000);    
				  }
				  </script>
				
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-paper-plane"></i>
									<h3><center>Quem somos</center></h3>
									<p><center>Somos um time de pessoas que tem em comum a mesma preocupação com a terra,
										então para tentar reverter as ações que a degradam desenvolvemos este 
										site que tem como objetivo, através de noticias atingir pessoas que se 
										interessam pelo meio ambiente.</center></p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-pencil-alt"></i>
									<h3><center>Sistema de Doação</center></h3>
									<p><center>Para as pessoas que querem ajudar nosso projeto temos o sistema de doação, em que o usuario tem a opçao de doar a quantidade que quer e quando quer ou o plano em que a pessoa escolhe quanto pode doar mensalmente. Em troca dessas boas açoes temos o sistema de brides, em que o doador recebe uma lembrança sustentavel!</center></p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-wrench"></i>
									<h3>Contate o Suporte</h3>
									<p>Qualquer poblema no site por favor envie para esse email:ecovibes4.0@gmail.com ou desça e mande um poblema para nos</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>Venha para a Ecovibes</h2>
							<p>E nos ajude a tornar o mundo um lugar melhor</p>
						</header>
					</div>
				</section>

			<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/sus.jpg" alt="" /></a>
									<div class="inner">
										<h3>Sustentabilidade</h3>
										<p>"5 fatos sobre sustentabilidade que você precisa saber"
										 <a href="https://aguasustentavel.org.br/publicacoes/blog/53-5-fato-sobre-sustentabilidade-que-vc-precisa-saber?gclid=Cj0KCQiAzZL-BRDnARIsAPCJs71p7NYXYSP8zTCXgSgK0uSqP-7s76RSexQxIhnFvxeBrPCxSCT1udYaArQFEALw_wcB">
											<br><br>
											Leia mais!</a>
										</p>
									</div>
								</div>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="#" class="image left"><img src="images/floresta.jpg" alt="" /></a>
									<div class="inner">
										<h3>Amazonia</h3>
										<p>"Iniciativa remunera produtor rural que mantém a floresta em pé" 
											<a href="https://brasil.mongabay.com/list/florestas-tropicais/"> 
												<br><br>
												Leia mais!</a>
												<br><br>
											</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							
							</section>
						</div>
					</div>
				</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Nos ajude a tornar o mundo melhor</h2>
							<a href="login.html" class="button">Seja Membro</a>
						</header>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Links de Parceiros</h3>
								<ul class="links">
									<li><a href="cadastro.html">Mattis et quis rutrum</a></li>
									<li><a href="#">Suspendisse amet varius</a></li>
									<li><a href="#">Sed et dapibus quis</a></li>
									<li><a href="#">Rutrum accumsan dolor</a></li>
									<li><a href="#">Mattis rutrum accumsan</a></li>
									<li><a href="#">Suspendisse varius nibh</a></li>
									<li><a href="#">Sed et dapibus mattis</a></li>
								</ul>
							</section>
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
								<li>&copy; EcoVibes. Todos os direitos reservados</li><li>2020</a></li>
							</ul>
						</div>

				</div>

		</div>
		<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <div id="titleBar">
				<a href="#navPanel" class="toggle"></a>
				<span class="title">Eco Vibes</span></div>
	</body>
</html>