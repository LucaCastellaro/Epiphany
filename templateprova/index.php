<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Epiphany</title>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; expires=; path=/';</script>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="home">
<header>
	<div class="wrapper">
        <h1><a href="" id="brand" title="Epiphany">Epiphany</a></h1>
        <nav>
            <ul>
                <li>
                  <a href="">Categorie</a>
                  <ul class="sub-menu">
                  	<?php
						include("php/connect.php");
						$sql=mysql_query("SELECT * FROM `CATEGORIE` WHERE `ID_Categoria`<5 ORDER BY ID_Categoria;");
						while($row=mysql_fetch_array($sql))
							echo"<li><a href=\"site/filter.php?cat=".$row['ID_Categoria']."\">".$row['Categoria']."</a></li>";
					?>
                        <li><a href="site/categories.php">Altre categorie</a></li>
                    </ul>
                </li>
                <li><a href="site/search.php">Esplora un mondo di progetti</a></li>
                <li><a href="site/project.php">Proponi il tuo progetto</a></li>
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
				echo"<div id=\"action-bar\"><a href=\"site/login.php\">Login / Sign up</a></div>";
		?>
    </div>
</aside>
<article>
	<script language="Javascript">
	<!--
			var width=screen.width;
			if(width<=600)
				document.write('<img src=600.jpg>');
			else if(width<=800)
				document.write('<img src=800.jpg>');
			else if(width<=1024)
				document.write('<img src=1024.jpg>');
			else if(width<=1200)
				document.write('<img src=1200.jpg>');
			else if(width<=1400)
				document.write('<img src=1400.jpg>');
			else if(width<=1600)
				document.write('<img src=1600.jpg>');
			else
				document.write('<img src=photo.jpg>');
	//-->
	</script>
</article>
<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="site/what.php">Cos'&egrave; Epiphany</a> <a href="site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>