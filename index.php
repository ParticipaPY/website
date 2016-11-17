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
					<h1 id="logo">
						<a href="./?lang=en" class="image"><img class="flag flag-us" alt="" /></a>
						<a href="./?lang=es" class="image"><img class="flag flag-py" alt="" /></a>

					</h1>

					<nav id="nav">
						<ul>

							<!-- <li><a href="./?lang=en" class="image"><img class="flag flag-us" alt="" /></a></li>
							<li><a href="./?lang=es" class="image"><img class="flag flag-py" alt="" /></a></li> -->
							<li><a href="#resultados" class="button"><?php echo $menu["resultados"]; ?></a></li>
							<li><a href="#experiencias" class="button"><?php echo $menu["experiencias"]; ?></a></li>
							<li><a href="#soluciones" class="button"><?php echo $menu["soluciones"]; ?></a></li>
							<li><a href="#publicaciones" class="button"><?php echo $menu["publicaciones"]; ?></a></li>
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

								<!-- 	<header>
										<h2>PARTICIPA</h2></h2>
									</header> -->
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
								<h2><?php echo $menu["resultados"]; ?></h2>
							</header>
							<table>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<span class="icon featured fa-book"></span>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <p style="font-size: 11pt; text-align : justify;"><?php echo $resultados[0];?></p>
						            </td>
						        </tr>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<span class="icon featured fa-laptop"></span>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <p style="font-size: 11pt; text-align : justify;"><?php echo $resultados[1];?></p>
						            </td>
						        </tr>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<span class="icon featured fa-exclamation-triangle"></span>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <p style="font-size: 11pt; text-align : justify;"><?php echo $resultados[2];?></p>
						            </td>
						        </tr>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<span class="icon featured fa-users"></span>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <p style="font-size: 11pt; text-align : justify;"><?php echo $resultados[3];?></p>
						            </td>
						        </tr>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<span class="icon featured fa-thumbs-o-up"></span>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <p style="font-size: 11pt; text-align : justify;"><?php echo $resultados[4];?></p>
						            </td>
						        </tr>
    						</table>
							
							
						</section>

<!-- EXPERIENCIAS PREVIAS -->
						<section class="wrapper style3 container special" id="experiencias">

							<header class="major">
								<h2><?php echo $menu["experiencias"]; ?></h2>
							</header>
							<!-- <table>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<a href="<?php echo $exp_prev_1["url"]; ?>" class="image"><img src="<?php echo $exp_prev_1["img"]; ?>" alt="" height=auto width=90% style="display:block;"/></a>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <a href="<?php echo $exp_prev_1["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $exp_prev_1["nombre"]; ?></a> : <?php echo $exp_prev_1["descripcion"]; ?>
						            </td>
						        </tr>
						        <br>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<a href="<?php echo $exp_prev_2["url"]; ?>" class="image"><img src="<?php echo $exp_prev_2["img"]; ?>" alt="" height=auto width=90% style="display:block;"/></a>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <a href="<?php echo $exp_prev_2["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $exp_prev_2["nombre"]; ?></a> : <?php echo $exp_prev_2["descripcion"]; ?>
						            </td>
						        </tr>
    						</table> -->
						<div class="row">
								<div class="4u 8u(narrower)">
        							<a href="<?php echo $exp_prev_1["url"]; ?>" class="image"><img src="<?php echo $exp_prev_1["img"]; ?>" alt="" height=auto width=90% style="display:block; padding-top: 1em;"/></a>
								</div>
								<div class="8u 12u(narrower)" style="font-size: 10pt; text-align: justify;">
                                    <a href="<?php echo $exp_prev_1["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $exp_prev_1["nombre"]; ?></a> : <?php echo $exp_prev_1["descripcion"]; ?>
								</div>
							</div>
							<div class="row">
								<div class="4u 8u(narrower)">
        							<a href="<?php echo $exp_prev_2["url"]; ?>" class="image"><img src="<?php echo $exp_prev_2["img"]; ?>" alt="" height=auto width=90% style="display:block; padding-top: 1em;"/></a>
								</div>
								<div class="8u 12u(narrower)" style="font-size: 10pt; text-align: justify;">
                                    <a href="<?php echo $exp_prev_2["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $exp_prev_2["nombre"]; ?></a> : <?php echo $exp_prev_2["descripcion"]; ?>
								</div>
							</div>
						</section>

<!-- SOLUCIONES TECNOLOGICAS -->
						<section class="wrapper style3 container special" id="soluciones">

							<header class="major">
								<h2><?php echo $menu["soluciones"]; ?></h2>
							</header>
							<!-- <table>
						        <tr>
						  			<td width="30%" style="vertical-align:middle;">
						         		<a href="<?php echo $sol_tec_1["url"]; ?>" class="image"><img src="<?php echo $sol_tec_1["img"]; ?>" alt="" height=auto width=90% style="display:block;"/></a>
						         	</td>
						         	
						            <td width="70%" align="justify" style="vertical-align:middle;"> <a href="<?php echo $sol_tec_1["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $sol_tec_1["nombre"]; ?></a> : <?php echo $sol_tec_1["descripcion"]; ?>
						            </td>
						        </tr>
    						</table>  -->
							
							<div class="row">
								<div class="2u 8u(narrower)">
        							<a href="<?php echo $sol_tec_1["url"]; ?>" class="image"><img src="<?php echo $sol_tec_1["img"]; ?>" alt="" height=auto width=90% style="display:block;"/></a>
								</div>
								<div class="10u 12u(narrower)" style="font-size: 10pt; text-align: justify;">
                                    <a href="<?php echo $sol_tec_1["url"]; ?>" class="icon fa-globe" style="color: blue"> <?php echo $sol_tec_1["nombre"]; ?></a> : <?php echo $sol_tec_1["descripcion"]; ?>
								</div>
							</div>

						</section>

				</article>

<!-- PUBLICACIONES -->
						<section class="wrapper style3 container special" id="publicaciones">

							<header class="major">
								<h2><?php echo $menu["publicaciones"]; ?></h2>
							</header>
							
							<div class="row">
								<div class="2u 8u(narrower)">
        							
        							<a href="<?php echo $paper_1["link"]; ?>" class="icon fa-file-pdf-o" style="color: blue; font-size: 3em;"> </a>
								</div>
								<div class="10u 12u(narrower)" style="font-size: 10pt; text-align: justify;">
                                    
                                     <?php echo $paper_1["texto"]; ?>
								</div>
							</div>
							<div class="row">
								<div class="2u 8u(narrower)">
        							
        							<a href="<?php echo $paper_2["link"]; ?>" class="icon fa-file-pdf-o" style="color: blue; font-size: 3em;"> </a>
								</div>
								<div class="10u 12u(narrower)" style="font-size: 10pt; text-align: justify;">
                                    
                                     <?php echo $paper_2["texto"]; ?>
								</div>
							</div>

						</section>

				</article>

<!-- EQUIPO -->
				<section id="cta">
					<header class="major" id="equipo">
								<h2><?php echo $menu["equipo"]; ?></h2>
							</header>

							<div class="row">
								<div class="3u 12u(narrower)">
									<section >
										<!-- <a href="#" class="image featured"><img src="images/luca.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/luca.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_1["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_1["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_1["descripcion"]; ?>
										</p>-->
										<!-- <footer> -->
											<ul class="icons">
												<li><a href="https://www.linkedin.com/in/luca-cernuzzi-b70887?authType=name&authToken=Dyxm&trk=prof-proj-cc-name" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:lcernuzz@uca.edu.py" class="icon fa-envelope"></a></li>
												<li><a href="https://scholar.google.com/citations?user=pa79bD8AAAAJ&hl=es&oi=ao" class="icon fa-graduation-cap"></a></li>
											</ul>
										<!-- </footer> -->
									</section>
								</div>
								<div class="3u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/jorge.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/vicenzo.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_2["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_2["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_2["descripcion"]; ?>
										</p>-->
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
								<div class="3u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/vicenzo.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/jorge.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_3["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_3["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_3["descripcion"]; ?>
										</p>-->
										<ul class="icons">
												<li><a href="https://py.linkedin.com/in/jorgesaldivargalli" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:me@jorgesaldivargalli.com" class="icon fa-envelope"></a></li>
												<li><a href="http://www.jorgesaldivargalli.com/w3/" class="icon fa-globe"></a></li>
												<li><a href="https://scholar.google.com/citations?user=dqZ9o5oAAAAJ&hl=es&oi=ao" class="icon fa-graduation-cap"></a></li>
										</ul>

									</section>
								</div>

								<div class="3u 12u(narrower)">								
									<section>
										<!-- <a href="#" class="image featured"><img src="images/cristian.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/cristian.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_4["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_4["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_4["descripcion"]; ?>
										</p>-->
										<ul class="icons">
												<li><a href="https://www.linkedin.com/in/cristhianparra" class="icon fa-linkedin-square"></a></li>
												<li><a href="mailto:cdparra@gmail.com" class="icon fa-envelope"></a></li>
												<li><a href="https://scholar.google.com.py/citations?user=t4dRkMYAAAAJ&hl=en&oi=ao" class="icon fa-graduation-cap"></a></li>
												<li><a href="http://cdparra.info/" class="icon fa-globe"></a></li>
										</ul>
									</section>
								</div>
							</div>
							<div class="row">
																
							
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/marcelo.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/camilo.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_5["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_5["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_5["descripcion"]; ?>
										</p>-->
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
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_6["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_6["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_6["descripcion"]; ?>
										</p>-->
										<ul class="icons">
												<!-- <li><a href="#" class="icon fa-linkedin-square"></a></li> -->
												<li><a href="mailto:marcelo.alcaraz@uc.edu.py" class="icon fa-envelope"></a></li>
												<!-- <li><a href="#" class="icon fa-globe"></a></li> -->
											</ul>
									</section>
								</div>
								<div class="4u 12u(narrower)">
									<section>
										<!-- <a href="#" class="image featured"><img src="images/rebeca.jpg" alt="" /></a> -->
										<ul class="featured-icons">
											<li><img src="images/rebeca.jpg"></li>
										</ul>
										<!-- <header> -->
											<h4 style="text-transform: none; margin-bottom: 0;"><b><?php echo $miembro_7["nombre"]; ?></b></h4>
											<p style="font-size: 10pt"><?php echo $miembro_7["cargo"]; ?></p>
										<!-- </header> -->
										<!--<p style="font-size: 10pt; text-align : justify;">
											<?php echo $miembro_7["descripcion"]; ?>
										</p>-->
										<ul class="icons">
												<!-- <li><a href="#" class="icon fa-linkedin-square"></a></li> -->
												<li><a href="mailto:rebeca.arteta@uc.edu.py" class="icon fa-envelope"></a></li>
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


			  <div style="max-width: 100%; background-color: #ffffff; padding: 7em 1em 7em 0;">
			      <!-- <article class="container" id="organizan" style="max-width: auto; background-color: #ffffff; padding: 0 0 0 0;">
			             <div class="row" style="padding: 2em 0 2em 0; margin: 0 0 0 0; border: 0 0 0 0">
			                 <div class="1u 12u(normal)" style="padding-top: 0;">
			                     <span>
			                          <a href="http://www.conacyt.gov.py" target="_blank">
			                            <img src="images/conacyt.jpg" alt="" class="logo"style="padding-bottom: 40">
			                          </a>
			                     </span>
			                 </div>
                             <div class="3u 12u(normal)" style="padding-top: 0;">
			                     <span>
			                          <a href="http://www.universidadcatolica.edu.py/" target="_blank">
			                            <img src="images/prociencia-logo.jpg" alt="" class="logo">
			                          </a>
			                     </span>
			                 </div>
			                 <div class="2u 12u(normal)" style="padding-top: 0;">
			                     <span>
			                          <a href="http://www.universidadcatolica.edu.py/" target="_blank">
			                            <img src="images/u_uca.jpg" alt="" class="logo">
			                          </a>
			                     </span>
			                 </div>

			                 <div class="3u 12u(normal)" style="padding-top: 0;">
			                     <span>
			                          <a href="http://www.dei.uc.edu.py/" target="_blank">
			                            <img src="images/dei_logo.jpeg" alt="" class="logo" />
			                          </a>
			                     </span>
			                 </div>
			                 <div class="3u 12u(normal)" style="padding-top: 0;">
			                     <span>
			                          <a href="http://www.unitn.it/en" target="_blank">
			                            <img src="images/unitn.jpg" alt="" class="logo"/>
			                          </a>
			                     </span>
			                 </div>
			             </div>

                    </article> -->

			              <!-- <div style="padding: 1em 0 7em 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
			                     
			                     <span >
			                          <a href="http://www.conacyt.gov.py" target="_blank">
			                            <img src="images/conacyt.jpg" alt="" class="logo"style="padding-bottom: 40">
			                          </a>


			                          <a href="http://www.conacyt.gov.py/programa-prociencia" target="_blank">
			                            <img src="images/prociencia-logo.jpg" alt="" class="logo">
			                          </a>
                                 </span>
                                 <h3>probandooo</h3>
                                 <span>
			                          <a href="http://www.universidadcatolica.edu.py/" target="_blank">
			                            <img src="images/u_uca.jpg" alt="" class="logo">
			                          </a>

			                          <a href="http://www.dei.uc.edu.py/" target="_blank">
			                            <img src="images/dei_logo.jpeg" alt="" class="logo" />
			                          </a>

			                          <a href="http://www.unitn.it/en" target="_blank">
			                            <img src="images/unitn.jpg" alt="" class="logo"/>
			                          </a>
			                     </span>
			             </div> -->

			             <div class="row" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               <div class="4u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    <div class="row" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    	  <div class="12u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"> <h3><?php echo $menu["financiado por"]; ?></h3> </div>

                               	    </div>
                               	    <div class="row" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    	  <div class="4u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"><a href="http://www.conacyt.gov.py" target="_blank">
					                            <img src="images/conacyt.jpg" alt="" class="logo"style="padding-bottom: 40">
					                          </a></div>
                               	    	  <div class="8u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"> <a href="http://www.conacyt.gov.py/programa-prociencia" target="_blank">
					                            <img src="images/prociencia-logo.jpg" alt="" class="logo">
					                          </a></div> 
                               	    </div>

                               </div>

                               <div class="8u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    <div class="row" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    	   <div class="12u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"> <h3><?php echo $menu["instituciones"]; ?></h3> </div>
                               	    </div>
                               	    <div class="row" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center">
                               	    	   <div class="4u 12u(narrower)" style="padding: 0 0 0 4em; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"><a href="http://www.universidadcatolica.edu.py/" target="_blank">
						                            <img src="images/u_uca.jpg" alt="" class="logo">
						                          </a> </div>
                               	    	   <div class="4u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"> <a href="http://www.dei.uc.edu.py/" target="_blank">
						                            <img src="images/dei_logo.jpeg" alt="" class="logo" />
						                          </a></div>
                               	    	   <div class="4u 12u(narrower)" style="padding: 0 0 0 0; margin: 0 0 0 0; border: 0 0 0 0; text-align: center"> <a href="http://www.unitn.it/en" target="_blank">
						                            <img src="images/unitn.jpg" alt="" class="logo"/>
						                          </a></div>
                               	    	  
                               	    </div>

                               </div>

			             </div>
			     
			  </div>



			<!-- Footer -->
				<footer id="footer">




				<header class="special container" id="contactos">
						<span class="icon fa-commenting"></span>
						<h2><?php echo $menu["contactos"]; ?></h2>
					</header>
					<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<a href="https://www.google.com.py/maps/place/Universidad+Cat%C3%B3lica+Nuestra+Se%C3%B1ora+de+la+Asunci%C3%B3n/@-25.3264224,-57.6382384,15z/data=!4m5!3m4!1s0x0:0xa70c71f9d5efbaa9!8m2!3d-25.3237132!4d-57.6364473?hl=es" target="_blank" style="color:#7c8081;"><span class="icon featured fa-location-arrow" style="cursor: pointer;" ></span></a>
										<p style="font-size: 11pt;">Universidad Católica "Nuestra Señora de la Asunción<br>Campus Universitario. Tte. Cantaluppi y Villalón<br>C.C. 1683. Asunción Paraguay </p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-envelope"></span>
										<p style="font-size: 11pt;">E-mail:<br><a href="mailto:participa@uc.edu.py" class="button"> participa@uc.edu.py</a></p>
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