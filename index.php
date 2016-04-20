<!DOCTYPE HTML>

<?php


if ($_GET["lang"] == "en"){
	include "contenido_en.php";
} else {
	include "contenido_es.php";
}
?>

<html>
	<head>
		<title><?php echo $nombre; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="#top">Participa</a></h1>

					<nav id="nav">
						<ul>
							<!-- <li class="current"><a href="index.html">Welcome</a></li> -->
							<li class="submenu">
								<a href="#">LANG</a>
								<ul>
									<li><a href="./?lang=en" class="image"><img class="flag flag-us" alt="" /> English</a></li>
									<li><a href="./?lang=es" class="image"><img class="flag flag-py" alt="" /> Español</a></li>
									<!-- <li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li><a href="contact.html">Contact</a></li> -->
									<!-- <li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li> -->
								</ul>
							</li>
							
							<!-- <li><a href="./?lang=en" class="image"><img class="flag flag-us" alt="" /></a></li>
							<li><a href="./?lang=es" class="image"><img class="flag flag-py" alt="" /></a></li> -->
							<li><a href="#resultados" class="button"><?php echo $menu["resultados"]; ?></a></li>
							<li><a href="#experiencias" class="button"><?php echo $menu["experiencias"]; ?></a></li>
							<li><a href="#soluciones" class="button"><?php echo $menu["soluciones"]; ?></a></li>
							<li><a href="#equipo" class="button"><?php echo $menu["equipo"]; ?></a></li>
							<li><a href="#contactos" class="button"><?php echo $menu["contactos"]; ?></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2><?php echo $nombre; ?></h2>
						</header>
						<p>
							<?php echo $descripcion; ?>
						</p>
						<!-- <footer>
							<ul class="buttons horizontal">
								<li><a href="./?lang=es" class="button fit scrolly">Español</a></li>
								<li><a href="./?lang=en" class="button fit scrolly">English</a></li>
							</ul>
						</footer> -->

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<!-- <header class="special container">
						<span class="icon fa-comment"></span>
						<h2><?php echo $t_presentacion;?></h2>

					</header> -->

<!-- PRESENTACION -->
						<section class="wrapper style2 container special-alt" id="presentacion">
							<div class="row 50%">
								<div class="8u 12u(narrower)">

									<header>
										<h2>PARTICIPA</h2></h2>
									</header>
									<p style="text-align : justify;">
										<?php echo $presentacion;?>
									</p>
									<!-- <footer>
										<ul class="buttons">
											<li><a href="#" class="button">Find Out More</a></li>
										</ul>
									</footer> -->

								</div>
								<div class="4u 12u(narrower) important(narrower)">
									

									<ul class="featured-icons">
								
										<!-- <li><img src="images/micro.jpg"></li>
										<li><img src="images/phone.jpg"></li>
										<li><img src="images/dengue.jpg"></li>
										<li><img src="images/dengue.jpg"></li> -->
										<li><span class="icon fa-comments-o"><span class="label">Feature 1</span></span></li>
										<li><span class="icon fa-lightbulb-o"><span class="label">Feature 2</span></span></li>
										<li><span class="icon fa-university"><span class="label">Feature 3</span></span></li>
										<li><span class="icon fa-hospital-o"><span class="label">Feature 4</span></span></li>
										<li><span class="icon fa-recycle"><span class="label">Feature 5</span></span></li>
										<!-- <li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li> -->
								
									</ul>

								</div>
							</div>
						</section>

<!-- RESULTADOS ESPERADOS -->
						<section class="wrapper style1 container special" id="resultados">
							<header class="special container">
						<span class="icon fa-bar-chart-o"></span>
						<h2><?php echo $t_resultados; ?></h2>
					</header>
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-exclamation-triangle"></span>
										<!-- <header>
											<h3>This is Something</h3>
										</header> -->
										<!-- <ul class="featured-icons">
											<li><img src="images/micro.jpg"></li>
										</ul> -->
										<p style="font-size: 10pt; text-align : justify;"><?php echo $resultados[0];?></p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-book"></span>
										<!-- <header>
											<h3>Also Something</h3>
										</header> -->
										<!-- <ul class="featured-icons">
											<li><img src="images/micro.jpg"></li>
										</ul> -->
										<p style="font-size: 10pt; text-align : justify;"><?php echo $resultados[1];?></p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-users"></span>
										<!-- <header>
											<h3>Probably Something</h3>
										</header> -->
										<!-- <ul class="featured-icons">
											<li><img src="images/micro.jpg"></li>
										</ul> -->
										<p style="font-size: 10pt; text-align : justify;"><?php echo $resultados[2];?></p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-laptop"></span>
										<!-- <header>
											<h3>This is Something</h3>
										</header> -->
										<!-- <ul class="featured-icons">
											<li><img src="images/micro.jpg"></li>
										</ul> -->
										<p style="font-size: 10pt; text-align : justify;"><?php echo $resultados[3];?></p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-thumbs-o-up"></span>
										<!-- <header>
											<h3>Also Something</h3>
										</header> -->
										<!-- <ul class="featured-icons">
											<li><img src="images/micro.jpg"></li>
										</ul> -->
										<p style="font-size: 10pt; text-align : justify;"><?php echo $resultados[4];?></p>
									</section>

								</div>
							
							</div>
						</section>

<!-- EXPERIENCIAS PREVIAS -->
						<section class="wrapper style3 container special" id="experiencias">

							<header class="major">
								<h2><?php echo $t_experiencias_previas; ?></h2>
							</header>

							<div class="row">
								<div class="12u 12u(narrower)">

									<section>
										<a href="http://vozyvoto.org/" class="image featured"><img src="images/vozyvoto.jpg" alt="" /></a>
										<header>
											<h3><?php echo $exp_prev_1["nombre"]; ?></h3>
										</header>
										<p style="text-align : justify;">
											<?php echo $exp_prev_1["descripcion"]; ?>
										</p>
									</section>

								</div>
								<!-- <div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>An Airport Terminal</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div> -->
							</div>
							

						<!-- 	<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer> -->

						</section>

<!-- SOLUCIONES TECNOLOGICAS -->
						<section class="wrapper style3 container special" id="soluciones">

							<header class="major">
								<h2><?php echo $t_soluciones; ?></h2>
							</header>

							<div class="row">
								<div class="12u 12u(narrower)">

									<section>
										<a href="http://www.social-ideation.com/" class="image featured"><img src="images/socialideation.jpg" alt="" /></a>
										<header>
											<h3><?php echo $sol_tec_1["nombre"]; ?></h3>
										</header>
										<p style="text-align : justify;">
											<?php echo $sol_tec_1["descripcion"]; ?>
										</p>
									</section>

								</div>
								<!-- <div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>An Airport Terminal</h3>
										</header>
										<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
									</section>

								</div> -->
							</div>
							

						<!-- 	<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer> -->

						</section>

				</article>

<!-- EQUIPO -->
				<section id="cta">
					<header class="major" id="equipo">
								<h2><?php echo $t_equipo; ?></h2>
							</header>

							<div class="row">
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/luca.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/luca.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_1["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_1["descripcion"]; ?>
										</p>
										<!-- <footer> -->
											<ul class="icons">
												<li><a href="https://www.linkedin.com/in/luca-cernuzzi-b70887?authType=name&authToken=Dyxm&trk=prof-proj-cc-name" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:lcernuzz@uca.edu.py" class="icon fa-envelope"></a></li>
												<li><a href="https://scholar.google.com/citations?user=pa79bD8AAAAJ&hl=es&oi=ao" class="icon fa-graduation-cap"></a></li>
											</ul>
										<!-- </footer> -->
									</section>
								</div>
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/jorge.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/vicenzo.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_2["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_2["descripcion"]; ?>
										</p>
										<!-- <footer> -->
											<ul class="icons">
												<li><a href="https://it.linkedin.com/in/vincenzodandrea" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:vincenzo.dandrea@unitn.it" class="icon fa-envelope"></a></li>
												<li><a href="http://disi.unitn.it/~dandrea/" class="icon fa-globe"></a></li>
												<li><a href="https://scholar.google.com/citations?user=TzToTegAAAAJ&hl=es&oi=ao" class="icon fa-graduation-cap"></a></li>
											</ul>
										<!-- </footer> -->
									</section>
								</div>
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/vicenzo.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/jorge.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_3["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_3["descripcion"]; ?>
										</p>
										<ul class="icons">
												<li><a href="https://py.linkedin.com/in/jorgesaldivargalli" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:me@jorgesaldivargalli.com" class="icon fa-envelope"></a></li>
												<li><a href="http://www.jorgesaldivargalli.com/w3/" class="icon fa-globe"></a></li>
												<li><a href="https://scholar.google.com/citations?user=dqZ9o5oAAAAJ&hl=es&oi=ao" class="icon fa-graduation-cap"></a></li>
										</ul>

									</section>
								</div>
								
							</div>
							<div class="row">
								<div class="4u 12u(narrower)">								
									<section>
										<!-- <a href="#" class="image featured"><img src="images/cristian.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/cristian.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_4["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_4["descripcion"]; ?>
										</p>
										<ul class="icons">
												<li><a href="https://www.linkedin.com/in/cristhianparra" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:cdparra@gmail.com" class="icon fa-envelope"></a></li>
												<li><a href="https://scholar.google.com.py/citations?user=t4dRkMYAAAAJ&hl=en&oi=ao" class="icon fa-graduation-cap"></a></li>
												<!-- <li><a href="#" class="icon fa-globe"></a></li> -->
										</ul>
									</section>
								</div>								
							
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/marcelo.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/camilo.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_5["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_5["descripcion"]; ?>
										</p>
										<ul class="icons">
												<li><a href="https://py.linkedin.com/in/camilojco" class="icon fa-linkedin-square"></a></li>
												<li><a href="camilojco88@gmail.com" class="icon fa-envelope"></a></li>
												<!-- <li><a href="#" class="icon fa-globe"></a></li> -->
										</ul>
									</section>
								</div>
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/camilo.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/marcelo.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_6["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_6["descripcion"]; ?>
										</p>
										<ul class="icons">
												<!-- <li><a href="#" class="icon fa-linkedin-square"></a></li> -->
												<li><a href="mailto:marce.mmad@gmail.com" class="icon fa-envelope"></a></li>
												<!-- <li><a href="#" class="icon fa-globe"></a></li> -->
											</ul>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/rebeca.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/rebeca.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4><?php echo $miembro_7["nombre"]; ?></h4>
										<!-- </header> -->
										<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_7["descripcion"]; ?>
										</p>
										<ul class="icons">
												<!-- <li><a href="#" class="icon fa-linkedin-square"></a></li> -->
												<li><a href="mailto:rebkartt@gmail.com" class="icon fa-envelope"></a></li>
												<!-- <li><a href="#" class="icon fa-globe"></a></li> -->
											</ul>
									</section>
								</div>
							</div>
				<!-- 	<header>
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button special">Take My Money</a></li>
							<li><a href="#" class="button">LOL Wut</a></li>
						</ul>
						<ul class="contact">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span>Universidad Catolica Nuestra senohrar</a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						
					</ul>
					</footer> -->

				</section>

			<!-- Footer -->
				<footer id="footer">
				<header class="special container" id="contactos">
						<span class="icon fa-commenting"></span>
						<h2><?php echo $menu["contactos"]; ?></h2>
					</header>
					<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-location-arrow"></span>
										<p style="font-size: 11pt;">Universidad Católica "Nuestra Señora de la Asunción"<br>Campus Universitario. Tte. Cantaluppi y Villalón.<br>C.C. 1683. Asunción - Paraguay </p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-envelope"></span>
										<p style="font-size: 11pt;">E-mail:<br><a href="mailto:participa@uca.edu.py" class="button"> participa@uca.edu.py</a></p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-phone"></span>

										<p style="font-size: 10pt;">Campus Universitario UCA:<br>+59521 334 650. Int 101</p>
									</section>

								</div>
							</div>
					<ul class="copyright">
						<!-- <li>&copy; Untitled</li> -->
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>