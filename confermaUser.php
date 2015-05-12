<?php
require('connection.php');
$token=$_REQUEST['token'];
$query  = "UPDATE utenti SET activationData=now() where token='".$token."' and attivo=0;";
//echo $query;
$result = mysql_query($query) or die ("errore query");
?>