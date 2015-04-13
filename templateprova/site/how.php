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
						include("../php/connect.php");
						$sql=mysql_query("SELECT * FROM `CATEGORIE` WHERE `ID_Categoria`<5 ORDER BY ID_Categoria;");
						while($row=mysql_fetch_array($sql))
							echo"<li><a href=\"filter.php?cat=".$row['ID_Categoria']."\">".$row['Categoria']."</a></li>";
					?>
                        <li><a href="">Altre categorie</a></li>
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
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum vestibulum lacus, vitae posuere arcu condimentum a. Aliquam erat volutpat. Quisque pulvinar elit a diam suscipit, ac accumsan arcu sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut efficitur magna sit amet eros feugiat, ac imperdiet est sagittis. In vehicula tempor elit, in varius risus pulvinar ac. Fusce magna mi, molestie ac felis ut, egestas finibus nisi. Nulla facilisi. Mauris vehicula vestibulum cursus. Donec accumsan erat ut libero feugiat, ut dignissim arcu posuere. In hac habitasse platea dictumst. Pellentesque quis lorem ac mauris viverra pellentesque. Praesent id lorem non ex facilisis sodales ac at arcu. Praesent iaculis massa vel augue suscipit volutpat.
</p>
<p>
Curabitur consequat dui in sem egestas interdum. Etiam ligula nisi, tempor ut arcu sit amet, pulvinar faucibus quam. Nulla sed ex ac odio commodo consequat at sed enim. In placerat lobortis velit a rhoncus. Cras aliquam urna et porta dapibus. Proin a ullamcorper dolor, sed malesuada est. Nullam pretium mi eu dapibus interdum. Pellentesque nisi nisl, tempus at maximus sed, tincidunt ac risus. Curabitur id turpis fermentum, malesuada augue eget, sollicitudin lorem. Curabitur tincidunt dictum orci, faucibus ultricies nibh consectetur eu. Curabitur eleifend orci at magna tristique eleifend. Nam blandit est in sapien suscipit, eget tempus leo congue. Fusce mattis sodales arcu, non pharetra purus maximus quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p>
<p>
Donec non ullamcorper purus, sed pharetra lorem. Fusce eget magna eros. Curabitur sit amet lacus convallis, tempor enim vel, posuere urna. Etiam dignissim dui egestas vehicula sagittis. Suspendisse commodo sollicitudin sem, non efficitur diam rhoncus quis. Nulla aliquet luctus lorem, nec lobortis augue sollicitudin nec. Etiam quis rutrum justo. Fusce nec magna vitae dui fringilla posuere ac sit amet dolor.
</p>
<p>
Curabitur nulla justo, convallis non lacus nec, interdum lacinia velit. Aenean a ex mollis, pretium metus et, lobortis nisl. Aenean tristique urna sit amet turpis interdum porta. Sed vitae condimentum odio, et ornare ex. Mauris eu eros lacus. Vestibulum egestas odio sit amet nisi laoreet, eu elementum nunc placerat. Vestibulum eu efficitur ligula. Etiam consectetur sem sem, eget consectetur mauris viverra eget. In commodo mauris quis augue venenatis, suscipit accumsan eros egestas. Duis lobortis sagittis odio, non condimentum tellus.
</p>
<p>
Vivamus id turpis sed lorem dictum mollis. Morbi dictum metus non arcu posuere porta. Praesent turpis quam, sagittis nec arcu eget, efficitur molestie urna. Maecenas accumsan elementum risus, ac feugiat libero. Praesent nibh lectus, posuere nec ex nec, volutpat molestie dui. Etiam scelerisque lacus neque, in eleifend ipsum porta et. Morbi scelerisque elit libero, vitae fermentum mauris ultrices non. Mauris tincidunt felis in elit ullamcorper malesuada. Mauris a pretium neque, id fermentum ante. In in egestas velit, viverra convallis eros. Maecenas tempor mollis tellus, ut aliquet lectus malesuada sit amet. Sed elit orci, rhoncus id lectus quis, blandit aliquet leo. Nullam vel dolor tortor. Nullam at lacus diam. Sed ut tellus lacinia, luctus purus a, semper eros.
</p>
<p>
Integer eget velit quis odio egestas porttitor sed vitae nulla. Ut eget leo ex. Nullam quis nisi suscipit, commodo neque a, ullamcorper nunc. Vivamus lectus enim, euismod ut egestas non, mollis non sapien. Morbi quis lorem eget tellus pulvinar vestibulum sed at diam. Donec porttitor sodales purus. Nullam porttitor ligula nibh. Phasellus molestie nulla sit amet pretium consequat. Integer eget hendrerit purus. Quisque non dui ultrices, ornare lacus ut, maximus risus. Quisque lobortis laoreet dapibus. Fusce nibh mi, dignissim nec ipsum aliquet, ultrices maximus augue. Duis gravida laoreet mi. Vivamus tincidunt lobortis ante, vitae congue sem. Maecenas lacinia felis in nisl ornare vehicula.
</p>
<p>
Suspendisse potenti. In sit amet fringilla mauris. Nullam feugiat sed nisl dignissim tristique. Vivamus est erat, ultricies ut risus quis, pretium varius est. Maecenas in lobortis leo. Vestibulum ante libero, semper ut maximus quis, lobortis id est. In nunc metus, volutpat sit amet volutpat id, pellentesque nec enim. Ut tincidunt suscipit tortor vitae dignissim. Duis commodo lacinia leo non euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id suscipit ex, aliquam maximus lectus. In molestie, ligula et facilisis pellentesque, augue nunc molestie turpis, sed hendrerit nulla ex eget ligula. Duis non justo tristique, blandit sem ut, laoreet elit. Duis vehicula egestas arcu.
</p>
<p>
Donec ultrices, nulla at luctus viverra, arcu lacus consequat tortor, ac aliquam justo lorem sit amet diam. Curabitur vel commodo elit, vel dignissim tellus. Etiam lobortis orci eu interdum efficitur. Nulla rhoncus augue at sodales commodo. Cras accumsan ligula non est luctus, non pellentesque lacus mollis. Donec at porta eros. Fusce id volutpat urna, ac pharetra urna. Aliquam et volutpat massa, eget fringilla neque. Ut lacinia ante id rutrum faucibus. Mauris id mi vitae enim dapibus accumsan. Integer ac semper elit. Nullam dictum congue ante, et dignissim magna maximus quis. Curabitur condimentum risus ut augue elementum dignissim. Aenean molestie lobortis tincidunt.
</p>
<p>
Fusce euismod eros at justo pharetra, in ullamcorper augue dictum. Pellentesque efficitur a leo et semper. Vivamus imperdiet sagittis viverra. Sed vitae rutrum justo, a lacinia felis. Suspendisse ut laoreet erat. Sed non dolor dapibus, efficitur libero et, eleifend justo. Cras augue justo, euismod at vestibulum eu, bibendum non purus. Sed est est, varius et lorem vel, lobortis semper felis. Nam sed ante bibendum, commodo odio eget, dignissim est. Suspendisse luctus arcu non felis efficitur mollis.
</p>
<p>
Mauris a dictum enim. Donec euismod, erat placerat ultricies auctor, metus leo ornare ipsum, eu fringilla elit magna eu neque. Nunc risus dolor, tincidunt vitae vestibulum quis, bibendum in augue. Maecenas libero enim, porttitor nec tellus ac, dapibus hendrerit odio. Cras non enim viverra est feugiat hendrerit vitae et sem. Sed vitae interdum est, quis pellentesque ante. Suspendisse varius blandit ipsum, eget bibendum sem pretium quis. Sed viverra porta sem eget venenatis. Aenean id urna eget magna finibus pellentesque. Integer pretium erat vitae velit molestie, ut bibendum nisi maximus. Sed lobortis quam quis eros vulputate, at viverra leo maximus. Cras accumsan gravida nisi. In mollis sollicitudin faucibus. Suspendisse dui velit, commodo sit amet sagittis nec, fermentum eget nibh. Suspendisse sed mi rutrum, egestas ligula sed, eleifend nisl.
</p></article>
<footer>
	<div class="wrapper">
        <a href="http://lucacastellaro.altervista.org" target="_blank" title="Luca Castellaro" class="right">Website by Luca Castellaro</a>&copy; Epiphany <a href="../site/what.php">Cos'&egrave; Epiphany</a> <a href="../site/how.php">Come funziona Epiphany</a> <a href="#">Aspetti legali &amp; copyright</a> <br />
        Per contattarci inviare un messaggio a:<a href="mailto:administration@epiphany.com">administration@epiphany.com</a>
    </div>
</footer>
</body>
</html>
