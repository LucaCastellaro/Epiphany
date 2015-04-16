<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Epiphany</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'> <!--Font per il logo Epiphany-->
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header">
					
					<!-- Logo -->
						<h1><a href="">Epiphany</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Home</a></li>
								<li>
									<a href="">Categorie</a>
									<ul>
                                    	<?php
                                        	$f=fopen("categorie.txt","r");
												while($riga=fgets($f))
												{
													echo "<li><a href=\"#\">".$riga."</a></li>";
												}
												?>
										<!--li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<!--<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
												<li><a href="#">Nisl sed aliquam</a></li>
												<li><a href="#">Dolore adipiscing</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li-->
									</ul>
								</li>
							<li><a href="left-sidebar.html">Esplora</a></li>
<!--li id="li-cerca"><a href=""><input type="text" name="cerca" id="cerca" placeholder="Cerca un'idea"> <input type="button" name="bt_cerca" id="bt_cerca" value="Cerca"></a></li-->
<!--                                                      		<li><a href="right-sidebar.html">Crea</a></li>				
							
                            				COMMENTO IMPORTANTE: il pulsante "crea" pulsante facciamolo "vedere" solo se è già stato fatto il login (:
                                            
-->                                                      	<li class="current"><a href="">Registrazione / Login</a></li>
                                                               
							</ul>
						</nav>
                         <section>
							<header>
								<div id="box-cerca"><input type="text" name="cerca" id="cerca" placeholder="Cerca un'idea">
                                <input type="button" name="bt_cerca" id="bt_cerca" value="Cerca">
                                </div>
							</header>
						</section>
				
				</div>
			</div>
		
		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="8u">
							
							<!-- Content -->
								<article class="box post">
									<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<header>
										<h2>Registrati</h2>
										<p>Compila il form per poterti registrare al nostro portale</p>
									</header>
                                    <section>
                                    	<form id="reg_form" name="reg_form" method="post" action="">
                                        	<label id="label-reg_nome">Nome: </label><input type="text" name="reg_nome" id="reg_nome" placeholder="Nome">
                                            <label id="label-reg_cognome">Cognome: </label><input type="text" name="reg_cognome" id="reg_cognome" placeholder="Cognome">
                                        	<label id="label-reg_mail">Email: </label><input type="text" name="reg_mail" id="reg_mail" placeholder="Inserisci un indirizzo email valido">
                                            <label id="label-reg_telefono">Telefono: </label><input type="text" name="reg_tel" id="reg_tel" placeholder="Telefono">
                                        	<label id="label-reg_citta">Citta: </label><input type="text" name="reg_citta" id="reg_citta" placeholder="Citta">
                                            <label id="label-reg_provincia">Provincia: </label><input type="text" name="reg_provincia" id="reg_provincia" placeholder="Provincia">
                                            <label id="label-reg_cap">Provincia: </label><input type="text" name="reg_cap" id="reg_cap" placeholder="Cap">

                                            <br>
                                            <input type="button" name="bt-reg_form" id="bt-reg_form" value="Registrati">                                            
                                        </form>
                                    </section>
								</article>

						</div>
						<div class="4u">
						
							<!-- Sidebar -->
								<section class="box">
									<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
									<header>
										<h3>Login</h3>
									</header>
									<p>
                                    	<form name="form_login" id="form_login" method="post" action="">
	                                    	<input type="text" name="user_login" id="user_login" placeholder="Nome Utente"><br>
	                                    	<input type="password" name="password_login" id="password_login" placeholder="Password">
                                    </p>
									<footer>
	                                        <input type="button" name="conferma_login" id="conferma_login" value="Login">
                                        </form>

									</footer>
								</section>
								<!--<section class="box">
									<header>
										<h3>Feugiat consequat</h3>
									</header>
									<p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
									<ul class="divided">
										<li><a href="#">Sed et blandit consequat sed</a></li>
										<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
										<li><a href="#">Sapien id suscipit magna sed felis</a></li>
										<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
									</ul>
									<footer>
										<a href="#" class="button alt">Ipsum consequat</a>
									</footer>
								</section>-->

						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<?php include("footer.php");?>
	</body>
</html>