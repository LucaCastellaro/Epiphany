<?php
require_once('connection.php');
require_once('user.class.php');

session_start();
$_SESSION['login'] = false;

$user=$_REQUEST['user_login'];
$password=$_REQUEST['password_login'];
$sql="SELECT c.*,l.*,c.id iduser FROM utenti as c, locations as l WHERE email='".$user."' and attivo=1 AND c.locationId=l.id";
$userok = mysql_query($sql);
$rows = mysql_fetch_array($userok);
if($rows!=null){
	if($password==$rows['password']){
        $_SESSION['login'] = true;
		$utente = new User($rows['iduser'],$rows['nome'],$rows['cognome'],$rows['codiceFiscale'],$rows['indirizzo'],$rows['cap'],$rows['citta'],$rows['provincia'],$rows['email'],$rows['telefono'],$rows['locationId']);
		$_SESSION['utente']=$utente;
		//echo"a";
		header( "Location: index.php");
	}else{
		//echo"b";
		$_SESSION['login'] = false;
		header( "Location: index.php?");
	}
}else{
	//echo"c";
	$_SESSION['login'] = false;
	header( "Location: index.php" );
}
?>