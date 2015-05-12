<?php
require('connection.php');
$nome=strtoupper($_REQUEST['reg_nome']);
$cognome=strtoupper($_REQUEST['reg_cognome']);
$email=strtoupper($_REQUEST['reg_email']);
$cf=strtoupper($_REQUEST['reg_cf']);
$telefono=$_REQUEST['reg_tel'];
$indirizzo=strtoupper($_REQUEST['reg_indirizzo']);
$citta=strtoupper($_REQUEST['reg_citta']);
$idCitta=$_REQUEST['reg_idCitta'];
$cap=$_REQUEST['reg_cap'];

//echo $nome." ".$cognome." ".$cap." ".$cf." ".$citta." ".$email." ".$idCitta." ".$indirizzo." ".$telefono;

function randomPassword($x) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $x );
    return $password;
}
$password=randomPassword(6);
$token=randomPassword(15);

$query  = "insert into utenti (nome,cognome,telefono,email,codiceFiscale,indirizzo,";
$query .= "locationId,cap,attivo,token,password)";
$query .= " values ('".$nome."','".$cognome."','".$telefono."','".$email."','".$cf."','".$indirizzo."','";
$query .= $idCitta."','".$cap."',0,'".$token."','".$password."')";
//echo $query;

$result = mysql_query($query) or die ("errore query");

//invio mail conferma attivazione utente
//$sql=mysql_query("SELECT * FROM utenti WHERE nome='".$nome."' AND cognome='".$cognome."';") or die("33<br>");
//$row=mysql_fetch_array($sql) or die("34<br>");
$link="http://www.projectepihany.altervista.org/confermaUser.php?token=".$token;
//echo $row['id'];
$mail_from    =	"MIME-Version: 1.0\n";
$mail_from   .= "Content-type: text/html; charset=UTF-8\n";
$mail_from   .= "Content-Transfer-Encoding: 8bit\n";
$mail_from   .= "From: Epiphany";
$subject = 'CONFERMA REGISTRAZIONE';
$message = "Ciao ".$nome.", benvenuto su Epiphany!
Ancora un ultimo passo per poter iniziare a creare: per confermare la tua registrazione clicca sul link che trovi di seguito ".$link;

mail($email, $subject, htmlentities($message, ENT_QUOTES, 'UTF-8'),$mail_from);
//header("location: index.php");
echo $message;
?>