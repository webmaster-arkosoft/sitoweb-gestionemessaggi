<?php
	// include config
	include "config.php";
	//connessione al database
	$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione.");
	//selezione del database
	mysql_select_db($database) or die ("Non riesco a selezionare il database");
	//approvazione commento
	mysql_query("UPDATE commenti SET approvato='1' where id='".$_GET['id']."'");
	mysql_close($db); //chiusura db
	print "Commento approvato";
?>	