<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Epiphany</title>
<link rel="stylesheet" href="../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
  <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
	<div class="wrapper">
        <h1><a href="../" id="brand" title="Epiphany">Epiphany</a></h1>
        <nav>
            <ul>            <?php
						include("connect.php");
						$sql=mysql_query("SELECT * FROM `CATEGORIE` WHERE `ID_Categoria`<5 ORDER BY ID_Categoria;");
						while($row=mysql_fetch_array($sql))
							echo"<li><a href=\"\">".$row['Categoria']."</a></li>";
					?>
                        <li><a href="../site/categories.php">Altre categorie</a></li>
</ul>
        </nav>
    </div>
</header>
<aside id="top">
	<div class="wrapper">
        <form>
        	<input type="text" placeholder="Cerca un progetto o una categoria" /><button type="submit">Cerca</button>
        </form>
        <div id="action-bar"><a href="../site/login.php">Login / Sign up</a> </div>
    </div>
</aside>
<article id="address">
	<?php
		include("connect.php");
		if($_POST['psw']==$_POST['psw2']&&$_POST['email']==$_POST['email2']){
			$sql=mysql_query("INSERT INTO `UTENTI` (`ID`, `Nome`, `Cognome`, `Email`, `Password`, `Cell`, `CF`) VALUES (NULL, '".$_POST['nome']."', '".$_POST['cgn']."', '".$_POST['email']."', '".$_POST['psw']."', NULL, NULL);") or die("Errore nella registrazione<br>");
			echo"Registrazione completata.<br>";
		}
		else
			echo"Le email o le password non corrispondono!<br>";			
	?>
</article>
<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="../site/what.php">Cos'&egrave; Epiphany</a> <a href="../site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>
