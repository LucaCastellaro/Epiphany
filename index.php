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
						<h1><a href="index.html">Epiphany</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								<li>
									<a href="">Categorie</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
												<li><a href="#">Nisl sed aliquam</a></li>
												<li><a href="#">Dolore adipiscing</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Esplora</a></li>
                                                                <li><input type="text" name="cerca" id="cerca" placeholder="Cerca"> <input type="button" name="bt_cerca" id="bt_cerca" value="Cerca"></li>
                                                      		<li><a href="right-sidebar.html">Crea</a></li>
                                                      		<li><a href="right-sidebar.html">Registrati</a></li>
                                                      		<li><a href="right-sidebar.html">Login</a></li>
                                                               
							</ul>
						</nav>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Benvenuto. Questo è Epiphany</h2> <!--Howdy. This is Epiphany.-->
								<p>Metti un idea, trova una soluzione a un problema</p>
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
										<p>Ti è venuta in mente un idea geniale e non sai come svilupparla? Sei nel posto giusto.</p>
									</section>
								</div>
								<div class="4u">
									<section class="middle">
										<!--i class="icon featured alt fa-flash"></i-->
                                                                                <i class="icon featured alt"><img src="images/ingranaggi-b80x80.png"></i>
										<header>
											<h2>Elabora la tua Idea</h2>
										</header>
										<p>Compila il form per inserire la tua Idea, cerca di descriverla nel modo migliore possibile.</p>
									</section>
								</div>
								<div class="4u">
									<section class="last">
                                                                            <i class="icon featured alt2 idea"><img src="images/binocolo-b80x80.png"></i>
										<header>
											<h2>Cerca un Idea</h2>
										</header>
										<p>Non hai un idea, ma pensi di poter risolvere il problema di qualcuno? Fai un giro tra nostre idee.</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button big"><!--Get Started-->Inizia</a></li>
									<li><a href="#" class="button alt big">Esplora</a></li>
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
								<section>
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
							
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper">
				<section id="footer" class="container">
					<div class="row">
						<div class="8u">
							<section>
								<header>
									<h2>Blandit nisl adipiscing</h2>
								</header>
								<ul class="dates">
									<li>
										<span class="date">Jan <strong>27</strong></span>
										<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
										<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
									</li>
									<li>
										<span class="date">Jan <strong>23</strong></span>
										<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
										<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
									</li>
									<li>
										<span class="date">Jan <strong>15</strong></span>
										<h3><a href="#">Magna tempus lorem feugiat</a></h3>
										<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
									</li>
									<li>
										<span class="date">Jan <strong>12</strong></span>
										<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
										<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
									</li>
									<li>
										<span class="date">Jan <strong>10</strong></span>
										<h3><a href="#">Blandit tempus aliquam?</a></h3>
										<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
									</li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>What's this all about?</h2>
								</header>
								<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
								<p>
									This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by 
									<a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
									the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
								</p>
								<footer>
									<a href="#" class="button">Find out more</a>
								</footer>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="4u">
							<section>
								<header>
									<h2>Tempus consequat</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Ipsum et phasellus</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Vitae tempor lorem</h2>
								</header>
								<ul class="social">
									<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
									<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
									<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
									<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
									<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
								</ul>
								<ul class="contact">
									<li>
										<h3>Mail</h3>
										<p>
                                                                                    <input type="text" name="contact-mail" id="contact-mail" placeholder="Mail">									
										</p>
									</li>
									<li>
										<h3>Nome</h3>
										<p><input type="text" name="contact-name" id="contact-name" placeholder="Nome"></p>
									</li>
									<li>
										<h3>Messaggio</h3>
                                                                                <p><textarea name="contact-msg" id="contact-msg" rows="6"></textarea></p>
									</li>
                                                                        <li>
                                                                            <p><input type="button" name="bt_contact" id="bt_contact" value="Invia"></p>
									</li>
								</ul>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="12u">
						
							<!-- Copyright -->
								<div id="copyright">
									<ul class="links">
										<li>&copy; 2015 - Epiphany. All rights reserved.</li><li>Powered by <a href="#">Luca Castellaro</a>, <a href="#">Matteo Bosi</a></li>
									</ul>
								</div>

						</div>
					</div>
				</section>
			</div>

	</body>
</html>