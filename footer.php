<div id="footer-wrapper">
				<section id="footer" class="container">
					<div class="row">
						<div class="8u">
							<section>
								<header>
									<h2>Categorie</h2>
								</header>
                                                            <ul id="categories">
                                <?php
									$f=fopen("categorie.txt","r");
									$r2=0;
										while($riga=fgets($f)){
											do $r=rand(1,5); while($r==$r2);
											echo "<li><a href=\"\"><span class=\"categ".$r."\">".$riga."<br></span></a></li>";
											$r2=$r;
										}
								?>
								<!--	<li>
										<span class="categ">Jan <strong>12</strong></span>
									</li>
									<li>
										<span class="categ">Jan <strong>12</strong></span>
									</li>
									<li>
										<span class="categ">Jan <strong>15</strong></span>
									</li>
									<li>
										<span class="categ">Jan <strong>12</strong></span>
									</li>
									<li>
										<span class="categ">Jan <strong>10</strong></span>
									</li>-->
                                                        </ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Informazioni</h2>
								</header>
								<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
								<p>
									<p>Questo &egrave; <strong>Epiphany</strong>.</p>
									<p>Hai una nuova idea innovativa ma non sai come realizzarla?<br>Inseriscila nel nostro database e aspetta che qualcun altro ti aiuti!</p>
									<p>Hai delle grandi abilit&agrave; ma al momento non sai come usarle?<br>Cerca un'idea e aiuta qualcuno a risolvere un problema!</p>
								</p>
								<footer>
									<a href="" class="button">Leggi altro su Epiphany</a>
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
										<li>&copy; 2015 - Epiphany. All rights reserved.</li><li>Powered by <a href="lucacastellaro.altervista.org">Luca Castellaro</a>, <a href="#">Matteo Bosi</a></li>
									</ul>
								</div>

						</div>
					</div>
				</section>
			</div>