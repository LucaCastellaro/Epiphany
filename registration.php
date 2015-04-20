<?php
$con=mysqli_connect("localhost","epiphany","epiphany","epiphany") or die("connection error");
$result=mysqli_query($con,"select * from locations where citta='Novara'");
$row=mysqli_fetch_array($result);
echo $row['citta'];
$nome=$_REQUEST['reg_nome'];
$cognome=$_REQUEST['reg_cognome'];
$email=$_REQUEST['reg_email'];
$cf=$_REQUEST['reg_cf'];
$telefono=$_REQUEST['reg_telefono'];
$indirizzo=$_REQUEST['reg_indirizzo'];
$citta=$_REQUEST['reg_citta'];
$idCitta=$_REQUEST['reg_idCitta'];
$cap=$_REQUEST['reg_cap'];

echo $nome." ".$cognome." ".$cap." ".$cf." ".$citta." ".$email." ".$idCitta." ".$indirizzo." ".$telefono;
?>