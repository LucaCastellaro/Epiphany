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
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#tabs').tabs();
	});
</script>
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
<article id="mainview">
    <div id="breadcrumb"><a href="../">Home</a> > <a href="search.php">Eplora</a> > Progetti</div>
    <div id="description">
        <?php
            include("../php/connect.php");
            $sql=mysql_query("SELECT * FROM `PROGETTI` WHERE ID_Progetto='".$_GET['p']."';") or die("Errore §main#54");
            $prg=mysql_fetch_array($sql);
			echo"<h1>".$prg['Titolo']."</h1>
			<strong id=\"price\"><span>Mancano: ".$prg['Mancanti']."&euro;</span>Obiettivo: ".$prg['TotFondi']."&euro;</strong><p>Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto Descrizione progetto</p>";
        ?>
        <p>
			<?php
                echo"<select>
                    <option value=\"1\" selected=\"selected\">Dona</option>";
                    for($i=50; $i<=$prg['Mancanti'] ;$i+=50)
                        echo"<option value=\"50\">".$i." &euro;</option>";
                    //<option value="100" disabled="disabled">&euro;100</option>
                echo"</select>";
            ?>
        </p>
        <p><button type="submit" class="continue">Dona ora!</button></p>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1" class="first">Informazioni di base</a></li>
                <li><a href="#tabs-2">Informazioni avanzate</a></li>
                <li><a href="#tabs-3">Informazioni complete</a></li>
            </ul>
            <section id="tabs-1">
                <?php
					include("../php/connect.php");
					$sql2=mysql_query("SELECT * FROM `CATEGORIE` WHERE `ID_Categoria`='".$prg['EK_Categoria']."';") or die("Errore §main#73<br>");
					$cat=mysql_fetch_array($sql2);
					echo"<p> <strong>Titolo:</strong> ".$prg['Titolo']."</p>
					<p> <strong>Dove:</strong> ".$prg['Dove']."</p>
					<p> <strong>Che cosa:</strong> ".$prg['Cosa']."</p>
					<p> <strong>Categoria:</strong> ".$cat['Categoria']."</p>";
				?>
</section>
            <section id="tabs-2">
              <p>Devi acquistare queste informazioni prima di poterle leggere.</p>
              <p><a href="">Clicca qui</a> per comprare le informazioni</p>
            </section>
            <section id="tabs-3">
              <p>Devi acquistare queste informazioni prima di poterle leggere.</p>
              <p><a href="">Clicca qui</a> per comprare le informazioni</p>
            </section>
        </div>
    </div>
    <div id="images">
    	<?php echo"<img src=\"".$prg['Foto']."\">"; ?>
    </div>
</article>

<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="../site/what.php">Cos'&egrave; Epiphany</a> <a href="../site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>