<?php
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
			$email=@mysql_result($query1,0,8);
	}		
	mysql_close($db); //chiusura db
	//header dell'e-mail
	$header="From: info@gestionemessaggi.com\r\n";
	$header.= "MIME-Version: 1.0\n";
	$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
	$header.="Content-Transfer-Encoding: 7bit\n";
	$mail="
		<html>
			<head>
				<title>Registrazione a Gestione Messaggi</title>
			</head>
			<body style=\"font-family:Verdana,Tahoma,sans-serif\">
				<p>
					<center>
						<h1>Registrazione a Gestione Messaggi</b></h1>
					</center>
				</p>
				<b>$nome $cognome</b>,<br />
				ha effettuato la registrazione a Gestione Messaggi.<br /><br />
				E-mail: $email;
				<br /><br />
				<br /><br /> 
			</body>
		</html>
	";
	$oggetto="Lincenza Gestione Messaggi";
	mail('info@arkosoft.it',$oggetto,$mail,$header);
?>
<html>
	<head>
		<title>Gestione Messaggi Attivazione</title>
		<?php include "analitycs.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/download.js"></script>
		 
	</head>
	<body>
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi"><img src="immagini/logo.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="download.html" class="subattivo1" title="Ultima versione">Ultima versione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Download">Perchè GM?</a>
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="" title="Download?">Scarica</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Supporto">Supporto</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header3">
				<div class="descmotto">
					<h4>Scarica Gestione Messaggi</h4>
					<div>
						<a href="download.html#download" title="Scarica Gestione Messaggi">Scarica</a> la versione per 30 giorni di Gestione Messaggi e inizia da subito ad inviare sms ai tuoi clienti.<br /><br />
						
						Per tutti quelli che non hanno un telefonino supportato dal programma, <a href="crediti.html" title="Crediti Gestione Messaggi">cliccando qui</a> è possibile acquistare i nostri pacchetti di sms.
					</div>
				</div>
			</div>
			<div class="sotto">&nbsp;</div>
			<div class='boxdownload'>
				<div class="download" id="download">
					<div class="boxsinistra">
						<div class="titolodownload">Registrazione effettuata con successo!</div>
						<div class="campoobbligatorio">Grazie per esserti Registrato/a. La ricontatteremo al più presto.</div>
					</div>
					<div class="boxdestra">&nbsp;</div>	
				</div>	
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>