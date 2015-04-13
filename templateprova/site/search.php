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
            <ul>			<?php
						include("../php/connect.php");
						$sql=mysql_query("SELECT * FROM `CATEGORIE` WHERE `ID_Categoria`<5 ORDER BY ID_Categoria;");
						while($row=mysql_fetch_array($sql))
							echo"<li><a href=\"filter.php?cat=".$row['ID_Categoria']."\">".$row['Categoria']."</a></li>";
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
        <?php
			session_start();
			if(empty($_SESSION['utente']))
				echo"<div id=\"action-bar\"><a href=\"login.php\">Login / Sign up</a></div>";
		?>
    </div>
</aside>
<article id="grid">
	<div id="breadcrumb"><a href="../">Home</a> > Esplora</h1></div>
    <header>
    </header>
    <ul id="items">
    <?php
		include("../php/connect.php");
		$sql=mysql_query("SELECT * FROM `PROGETTI` ORDER BY ID_Progetto DESC;") or die("Errore §Search#49<br>");
		while($row=mysql_fetch_array($sql))
			echo"
			<li>
				<a href=\"main.php?p=".$row['ID_Progetto']."\"><img src=\"".$row['Foto']."\" alt=\"".$row['Titolo']."\"/></a>
				<a href=\"main.php?p=".$row['ID_Progetto']."\" class=\"title\">".$row['Titolo']."</a>
				<strong><em>Mancano: ".$row['Mancanti']."&euro;</em>Obiettivo: ".$row['TotFondi']."&euro;</strong>";
			echo"</li>";
	?></ul>
    <footer>
    </footer>
</article>
<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="../site/what.php">Cos'&egrave; Epiphany</a> <a href="../site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>
