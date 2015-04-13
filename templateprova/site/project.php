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
	<form action="../php/project.php" method="post" enctype="multipart/form-data">
    	<?php
			if(empty($_SESSION['utente']))
				echo"Devi essere registrato ed aver effettuato il login per poter pubblicare un nuovo progetto!<br><a href=\"login.php\">Clicca qui per registrarti o effettuare il login</a>";
			else{
				echo"<h1>Nuovo progetto</h1>
				<p>
					<label for=\"titolo\">Titolo:</label>
					<input id=\"titolo\" name=\"titolo\" type=\"text\" required>
				</p>
				<p>
					<label for=\"dove\">Dove:</label>
					<input id=\"dove\" name=\"dove\" type=\"text\" required>
				</p>
				<p>
					<label for=\"cosa\">Che cosa:</label>
					<input id=\"cosa\" name=\"cosa\" type=\"text\" required>
				</p>
				<p>
					<label for=\"categoria\">Categoria:</label>
					<select name=\"categoria\" id=\"categoria\">";
					include("../php/connect.php");
					$cat=mysql_query("SELECT * FROM `CATEGORIE`;") or die("Errore §project#61<br>");
					while($row=mysql_fetch_array($cat))
						echo"<option value=".$row['ID_Categoria'].">".$row['Categoria'];
					echo"</select>
				</p>
				<p>
					<label for=\"perche\">Perch&egrave;:</label>
					<input id=\"perche\" name=\"perche\" type=\"text\" required>
				</p>
				<p>
					<label for=\"dove2\">Dove:</label>
					<input id=\"dove2\" name=\"dove2\" type=\"text\" required>
				</p>
				<p>
					<label for=\"contatto\">Contatto:</label>
					<input id=\"contatto\" name=\"contatto\" type=\"text\" required>
				</p>
				<p>
					<label for=\"foto\">Foto:</label>
					<input id=\"file\" name=\"foto\" type=\"file\" required>
				</p>
				<p>
					<label for=\"totfondi\">Obiettivo:</label>
					<input id=\"totfondi\" name=\"totfondi\" type=\"text\" required>&euro;
				</p><br>
				<input type=\"hidden\" name=\"utente\" value=\"".$_SESSION['utente']."\">
				<button type=\"submit\" class=\"continue\">Invia</button>";
			}
        ?>
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
