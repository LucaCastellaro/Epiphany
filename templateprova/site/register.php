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
<article id="address">
	<form action="../php/register.php" method="post">
    	<h1>Registrazione</h1>
       	<p>
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" required>
        </p>
        <p>
            <label for="cgn">Cognome:</label>
            <input id="cgn" name="cgn" type="text" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input id="email" name="email" type="text" required>
        </p>
        <p>
            <label for="email2">Ripeti email:&nbsp;</label>
            <input id="email2" name="email2" type="text">
        </p>
        <p>
            <label for="psw">Password:</label>
            <input id="billCity" name="psw" type="password" required>
        </p>
        <p>
            <label for="psw2">Ripeti password:</label>
            <input id="billZip" name="psw2" type="password" required>
        </p>
        <input type="submit" class="continue">
    </form>
</article>
<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="../site/what.php">Cos'&egrave; Epiphany</a> <a href="../site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>
