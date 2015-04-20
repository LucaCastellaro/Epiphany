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
								<li class="current"><a href="">Home</a></li>
								<li>
									<a href="">Categorie</a>
									<ul>
                                    	<?php
                                        	$f=fopen("categorie.txt","r");
												while($riga=fgets($f))
												{
													echo "<li><a href=\"\">".$riga."</a></li>";
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
							<li><a href="">Esplora</a></li>
<!--li id="li-cerca"><a href=""><input type="text" name="cerca" id="cerca" placeholder="Cerca un'idea"> <input type="button" name="bt_cerca" id="bt_cerca" value="Cerca"></a></li-->
<!--                                                      		<li><a href="right-sidebar.html">Crea</a></li>				
							
                            				COMMENTO IMPORTANTE: il pulsante "crea" pulsante facciamolo "vedere" solo se è già stato fatto il login (:
                                            
-->                                                      	<li><a href="reg-loginform.php">Registrazione / Login</a></li>
															<li><a href="">utente</a>
                                                            	<ul>
                                                                    <li><a href="#">Profilo Utente</a></li>
                                                                    <li><a href="#">Modifica i dati</a></li>
                                                                    <li><a href="#">Logout</a></li>
                                                                </ul>
                                                            </li>
                                                               
							</ul>
						</nav>
                        <!---->
                        <section>
							<header>
								<div id="box-cerca"><input type="text" name="cerca" id="cerca" placeholder="Cerca un'idea">
                                <input type="button" name="bt_cerca" id="bt_cerca" value="Cerca">
                                </div>
							</header>
						</section>
					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Benvenuto. Questo è Epiphany</h2> <!--Howdy. This is Epiphany.-->
								<p>Metti un idea, trova una soluzione</p>
							</header>
						</section>
					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="4u">
									<section class="first">
										<!--i class="icon featured fa-cog"></i-->
                                                                                <i class="icon featured"><img src="images/idea-b80x80.png"></i>
										<header>
											<h2>Hai un Idea?</h2>
										</header>
										<p>Ti è venuta in mente un idea geniale e non <br>sai come svilupparla? Sei nel posto giusto.</p>
									</section>
								</div>
								<div class="4u">
									<section class="middle">
										<!--i class="icon featured alt fa-flash"></i-->
                                                                                <i class="icon featured alt"><img src="images/ingranaggi-b80x80.png"></i>
										<header>
											<h2>Elabora la tua Idea</h2>
										</header>
										<p>Compila il form per inserire la tua idea, cerca <br>di descriverla nel modo migliore possibile.</p>
									</section>
								</div>
								<div class="4u">
									<section class="last">
                                                                            <i class="icon featured alt2 idea"><img src="images/binocolo-b80x80.png"></i>
										<header>
											<h2>Cerca un Idea</h2>
										</header>
										<p>Non hai un idea ma pensi di poter risolvere <br>il problema di qualcuno? Esplora le idee.</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="" class="button big"><!--Get Started-->Inizia</a></li>
									<li><a href="" class="button alt big">Esplora</a></li>
								</ul>
							</footer>
						</section>
		
				</div>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Portfolio -->
								<section>
									<header class="major">
										<h2>Progetti Attivi</h2>
									</header>
                                                                    <?php
                                                                                    $f=fopen("elencoarticoli.txt","r");
                                                                                    $i=0;
                                                                                    while($riga=fgets($f))
                                                                                    {    
                                                                                        if($i==0)
                                                                                            echo "<div class=\"row\">";
                                                                                        $parti=explode("|",$riga); 
                                                                                        echo"<div class=\"4u\">
											<section class=\"box\">
												<a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
												<header>
													<h3>".$parti[0]."</h3>
												</header>
												<p>".$parti[1]."</p>
												<footer>
													<a href=\"#\" class=\"button alt\">Find out more</a>
												</footer>
											</section>
										</div>"; 
                                                                                        if($i==2)
                                                                                        {
                                                                                            echo "</div>";
                                                                                            $i=0;
                                                                                        }else
                                                                                            $i++;
                                                                                    }
                                                                                ?>
                                                                       
									<!--div class="row">
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
												<header>
													<h3>Ipsum feugiat et dolor</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
												<header>
													<h3>Sed etiam lorem nulla</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
                                                                                
										
									</div>
									<div class="row">
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
												<header>
													<h3>Blandit sed adipiscing</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
												<header>
													<h3>Etiam nisl consequat</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
										<div class="4u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
												<header>
													<h3>Dolore nisl feugiat</h3>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
												<footer>
													<a href="#" class="button alt">Find out more</a>
												</footer>
											</section>
										</div>
									</div-->
								</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">

							<!-- Blog -->
<!--								<section>
									<header class="major">
										<h2>The Blog</h2>
									</header>
									<div class="row">
										<div class="6u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
												<header>
													<h3>Magna tempus consequat lorem</h3>
													<p>Posted 45 minutes ago</p>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
												<footer>
													<ul class="actions">
														<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
														<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
													</ul>
												</footer>
											</section>
										</div>
										<div class="6u">
											<section class="box">
												<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
												<header>
													<h3>Aptent veroeros et aliquam</h3>
													<p>Posted 45 minutes ago</p>
												</header>
												<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
												<footer>
													<ul class="actions">
														<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
														<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
													</ul>
												</footer>
											</section>
										</div>
									</div>
								</section>
-->							
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<?php include("footer.php");?>

	</body>
</html>