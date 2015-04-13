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
            <ul>
            <?php
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
        <?php
			session_start();
			if(empty($_SESSION['utente']))
				echo"<div id=\"action-bar\"><a href=\"login.php\">Login / Sign up</a></div>";
		?>
    </div>
</aside>
<article id="address">
	<form action="../php/photo.php" method="post" enctype="multipart/form-data">
    	<?php
			list($width, $height, $type, $attr) = getimagesize($_FILES['foto']['tmp_name']);
			$foto="../images/upload/".basename($_FILES['foto']['name']);
			echo"<input type=\"hidden\" name=\"utente\" value=\"".$_SESSION['utente']."\">
			<input type=\"hidden\" name=\"categoria\" value=\"".$_POST['categoria']."\">
			<input type=\"hidden\" name=\"titolo\" value=\"".$_POST['titolo']."\">
			<input type=\"hidden\" name=\"dove\" value=\"".$_POST['dove']."\">
			<input type=\"hidden\" name=\"cosa\" value=\"".$_POST['cosa']."\">
			<input type=\"hidden\" name=\"perche\" value=\"".$_POST['perche']."\">
			<input type=\"hidden\" name=\"dove2\" value=\"".$_POST['dove2']."\">
			<input type=\"hidden\" name=\"contatto\" value=\"".$_POST['contatto']."\">
			<input type=\"hidden\" name=\"foto\" value=\"".$foto."\">
			";
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
