<?php
	if(isset($_GET['idutente']) and strlen($_GET['idutente'])>0 and isset($_GET['codice']) and strlen($_GET['codice'])>0){
		// include config
		include "config.php";
		//connessione al database
		$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione.");
		//selezione del database
		mysql_select_db($database) or die ("Non riesco a selezionare il database");
		//settaggio variabili
		$idutente=$_GET['idutente'];
		$codice=$_GET['codice'];
		//Controllo se il codice è esatto
		$query=mysql_query("select * from statodownload where idutente='$idutente' and codice='$codice'") or die ("Query controllo non eseguita!");
		//conto i prodotti inseriti
		$righe=mysql_num_rows($query);
		if($righe==1){
			mysql_query("UPDATE statodownload SET statodownload='1' where idutente='".$idutente."'");
			//ricavo dati
			$query1=mysql_query("select * from download where id='$idutente'") or die ("Query controllo non eseguita!");
			$nome=@mysql_result($query1,0,4);
			$cognome=@mysql_result($query1,0,3);
			//invio email di conferma ad arkosoft
			include "emaildownload.php";
			//download
			header('Location: http://www.gestionemessaggi.com/download/gestionemessaggi.exe');
		}else{
			header('Location: http://www.gestionemessaggi.com');
		}
	}else{
		header('Location: http://www.gestionemessaggi.com');
	}
?>