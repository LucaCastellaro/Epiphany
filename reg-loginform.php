<?php
require_once('connection.php');
session_start();
$login=$_SESSION['login'];
if($login==true)
	header('Location: index.php');
?>

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
	<script src="jquery/jquery-1.11.2.js"></script>
        <script src="jquery/jquery-ui-1.11.4/jquery-ui.js"></script>

         <link rel="stylesheet" href="captcha/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="captcha/css/main.css">
        <link rel="stylesheet" href="jquery/jquery-ui-1.11.4/jquery-ui.css">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <script>
		$(document).ready(function(){
			$("#refresh-captcha").click(function(){
				$("#captcha").attr("src","captcha/php/newCaptcha.php?rnd=" + Math.random());
			});
			
			/*CheckForm Registrazione*/
			$("#bt_avanti-reg_form").click(function(){
				var nameReg = /^[A-Za-z]+$/;
				var numberReg =  /^[0-9]+$/;
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
				var nome = $('#reg_nome').val();
				var cognome = $('#reg_cognome').val();
				var email = $('#reg_email').val();
				var telefono = $('#reg_tel').val();
				var indirizzo = $('#reg_indirizzo').val();
				var cf =$('#reg_cf').val();
				var citta = $('#reg_citta').val();
				var cap = $('#reg_cap').val();
				var error = "";
				$('.error').hide();
				if(nome == ""){
					$('#reg_nome').css("border", "2px solid red");
					error +="nome";
				} 
				else if(!nameReg.test(nome)){
					$('#reg_nome_err').remove();
					$('#reg_nome').after('<span class="error" id="reg_nome_err"><br>Inserire solo lettere</span>');
					$('#reg_nome').css("border", "2px solid red");
						error +="nome";
				}else{
					$('#reg_nome').css("border", "2px inset");
				}
				if(cognome == ""){
					$('#reg_cognome').css("border", "2px solid red");
					error +="cognome";
				} 
				else if(!nameReg.test(cognome)){
					$('#reg_cognome_err').remove();
					$('#reg_cognome').after('<span class="error" id="reg_cogmome_err"><br>Inserire solo lettere</span>');
					$('#reg_cognome').css("border", "2px solid red");
					error +="cognome";
				}else{
					$('#reg_cognome').css("border", "2px inset");
				}
				if(email == ""){
					$('#reg_email').css("border", "2px solid red");
					error +="email";
				} 
				else if(!emailReg.test(email)){
					$('#reg_email_err').remove();
					$('#reg_email').after('<span class="error" id="reg_email_err"><br>Inserire indirizzo email valido</span>');
					$('#reg_email').css("border", "2px solid red");
					error +="email";
				}else{
					$('#reg_email').css("border", "2px inset");
				}
				if(cf == ""){
						$('#reg_cf').css("border", "2px solid red");
						error +="cf";
					}else if(cf.length!=16&&(cf.length!=11||!numberReg.test(cf))){
						$('#reg_cf_err').remove();
						$('#reg_cf').after('<span class="error" id="reg_cf_err"><br>Inserire 16 caratteri</span>');
						$('#reg_cf').css("border", "2px solid red");
						error +="cf";
					}else{
						$('#reg_cf').css("border", "2px inset");
					}
				if(telefono == ""){
					$('#reg_tel').css("border", "2px solid red");
					error +="reg_tel";
				} 
				else if(!numberReg.test(telefono)){
					$('#reg_tel_err').remove();
					$('#reg_tel').after('<span class="error" id="reg_tel_err"><br>Inserire solo numeri</span>');
					$('#reg_tel').css("border", "2px solid red");
					error +="telefono";
				}else{
					$('#reg_tel').css("border", "2px inset");
				}
				if(indirizzo == ""){
					$('#reg_indirizzo').css("border", "2px solid red");
					error +="indirizzo";
				}else{
					$('#reg_indirizzo').css("border", "2px inset");
				}
				if(citta == ""){
						$('#reg_citta').css("border", "2px solid red");
						error +="citta";
					}else{
						$('#reg_citta').css("border", "2px inset");
					}
				if(cap == ""){
						$('#reg_cap').css("border", "2px solid red");
						error +="cap";
					}else{
						$('#reg_cap').css("border", "2px inset");
					}
				
				if(error.length==0){
					/*se non ci sono errori di compilazione nel form controlla il check sulla privacy*/
					if($("#reg_ckprivacy").is(":not(:checked)")){
						alert("Obbligatorio check privacy");
					} else {
					/*passato controllo privacy va al controllo captcha*/
						$.post('captcha/php/checkCaptcha.php',
						{code: $("#captcha-field").val()},function(ok){
								if(ok.trim()=='true'){
									//alert("tutto ok");
									$("#reg_form").submit();
								}
								if(ok.trim()=='false'){
									alert("captcha errato");
								}
			
						});
					}
				}
			});
			$("#password_login").keydown(function( event ) {
				if( event.which == 13 ) {
					$( "#conferma_login" ).trigger( "click" );
				}
			});
			$("#conferma_login").click(function(){
				$("#form_login").submit();
			});				
			$( "#reg_citta" ).autocomplete({
				source: "searchComuni.php",
				minLength: 3,
				delay:200,
				focus: function( event, ui ) {
					$( "#reg_citta" ).val( ui.item.label );
					return false;
				  },
				select: function( event, ui ) {
					//console.debug(ui.item.value);
					$("#reg_citta").val(ui.item.label);
					$("#reg_idCitta").val(ui.item.value);
					$("#reg_cap").val(ui.item.cap);
					return false;
				}
			});

	/**************************/		
		});/*chiusura ready function*/
		/*scrive in automatico in maiuscolo nei campi*/
		function makeUppercase(input) {
			if ( event.which == 13 ) {
				var inputs = $("#form").find(':focusable');
				inputs.eq(inputs.index(input) + 1).focus();
			} else
				input.value = input.value.toUpperCase();
			}
        </script>
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
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="">Categorie</a>
									<ul>
                                    	<?php
											$qry="select * from categorie";
											$result=mysql_query($qry);
											while($row=mysql_fetch_array($result))
											{
												echo "<li><a href=\"\">".$row['nome']."</a></li>";
											}
											/*
                                        	$f=fopen("categorie.txt","r");
												while($riga=fgets($f))
												{
													echo "<li><a href=\"\">".$riga."</a></li>";
												}*/
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
								<li class="current"><a href="">Registrazione / Login</a></li>                               
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
                                <a href="#" class="image featured"><img src="images/reg.jpg" alt="" /></a>
                                <header>
                                    <h2>Registrati</h2>
                                    <p>Compila il form per poterti registrare al nostro portale</p>
                                </header>
                                <section>
                                    <form id="reg_form" name="reg_form" method="post" action="registration.php">
                                        <label id="label-reg_nome">Nome: </label><input type="text" name="reg_nome" id="reg_nome" onKeyUp="makeUppercase(this);" placeholder="Nome"/>
                                        <label id="label-reg_cognome">Cognome: </label><input type="text" name="reg_cognome" id="reg_cognome" onKeyUp="makeUppercase(this);" placeholder="Cognome"/>
                                        <label id="label-reg_mail">Email: </label><input type="text" name="reg_email" id="reg_email" onKeyUp="makeUppercase(this);" placeholder="Email"/>
                                        <label id="label-reg_cf">Codice Fiscale: </label><input type="text" name="reg_cf" id="reg_cf" onKeyUp="makeUppercase(this);" placeholder="Codice Fiscale" maxlength="16"/>
                                        <label id="label-reg_telefono">Telefono: </label><input type="text" name="reg_tel" id="reg_tel" onKeyUp="makeUppercase(this);" placeholder="Telefono"/>
                                        <label id="label-reg_indirizzo">Indirizzo: </label><input type="text" name="reg_indirizzo" id="reg_indirizzo" onKeyUp="makeUppercase(this);" placeholder="Indirizzo"/>
                                        <label id="label-reg_citta">Citta: </label><input type="text" name="reg_citta" id="reg_citta" onKeyUp="makeUppercase(this);" value="" placeholder="Citta"/>
                                        <label id="label-reg_cap">Cap: </label><input type="text" name="reg_cap" id="reg_cap" onKeyUp="makeUppercase(this);" placeholder="Cap">
                                        <img src="captcha/php/newCaptcha.php" alt="" id="captcha" /><img src="captcha/img/refresh.jpg" alt="aggiorna captcha" id="refresh-captcha" />
                                        <label id="label-reg_captcha">Verifica Captcha:<input name="captcha-field" type="text" id="captcha-field" size="35" maxlength="5" value=""onKeyUp="makeUppercase(this);"/>
                                        <label id="label-reg_ckprivacy">Acconsento al trattamento dei dati: </label><input type="checkbox" id="reg_ckprivacy" name="reg_ckprivacy" value="1" required/><a href="">Visualizza privacy</a>
                                        <input type="hidden" id="reg_idCitta" name="reg_idCitta" value=""/>
                                        <br>
                                        <input type="button" name="bt_avanti-reg_form" id="bt_avanti-reg_form" value="Registrati"/>                                            
                                    </form>
                                </section>
                            </article>

						</div>
						<div class="4u">
						
							<!-- Box Login-->
								<section class="box">
									<a href="#" class="image featured"><img src="images/login.jpg" alt="" /></a>
									<header>
										<h3>Login</h3>
									</header>
									
                                    	<form name="form_login" id="form_login" method="post" action="login.php">
	                                    	<input type="text" name="user_login" id="user_login" placeholder="Nome Utente"/><br>
	                                    	<input type="password" name="password_login" id="password_login" placeholder="Password"/>
                                    
									<footer>
	                                        <!--input type="button" name="conferma_login" id="conferma_login" value="Login"/-->
                                                <button class="search-button button" name="conferma_login" id="conferma_login"><i class="fa fa-sign-in fa-fw"></i> Login</button>
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