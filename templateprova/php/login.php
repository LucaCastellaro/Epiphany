<?php
	session_start();
	include("connect.php");
	$sql=mysql_query("SELECT `ID`, `Password` FROM `UTENTI` WHERE `Email`='".$_POST['email']."';",$conn) or die("Errore §login#4<br>");;
	$row=mysql_fetch_array($sql) or die("Errore $login#5<br>");
	if($_POST['psw']==$row['Password'])
		$_SESSION['utente']=$row['ID'];
	header("location:../");
?>