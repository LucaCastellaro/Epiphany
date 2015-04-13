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
	<?php
        include("connect.php");
        session_start();
        $foto="../images/upload/".basename($_FILES['foto']['name']);
        list($width, $height, $type, $attr) = getimagesize($_FILES['foto']['tmp_name']);
        if($width!=$height)
            echo"L'immagine deve essere quadrata!<br><a href=\"../site/project.php\">Clicca qui per cambiare immagine</a>";
        else{
            move_uploaded_file($_FILES['foto']['tmp_name'],$foto);
            $sql=mysql_query("INSERT INTO `PROGETTI` (`ID_Progetto`, `EK_Utente`, `EK_Categoria`, `Titolo`, `Dove`, `Cosa`, `Perche`, `Dove2`, `Contatto`, `Foto`, `TotFondi`, `Mancanti`) VALUES (NULL, '".$_POST['utente']."', '".$_POST['categoria']."', '".$_POST['titolo']."', '".$_POST['dove']."', '".$_POST['cosa']."', '".$_POST['perche']."', '".$_POST['dove2']."', '".$_POST['contatto']."', '".$foto."', '".$_POST['totfondi']."', '".$_POST['totfondi']."');") or die("Errore §project.php#4<br>");
            header("location:../site/search.php");
        }
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
</article>
</body>
</html>
