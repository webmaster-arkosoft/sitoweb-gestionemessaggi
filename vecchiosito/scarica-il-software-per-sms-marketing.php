<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM | Scarica software per sms | Download software messaggi</title>
		<?php include "analitycs.php"; ?>
		<meta name="abstarct" content="Scarica Gestione Messaggi invia messaggi gratis "/>
		<meta name="title" content="Scarica Gestione Messaggi il software per sms" />
		<meta name="keywords" content="software per invio sms,sms,campagne di sms marketing"/>
		<meta name="description" content="Con Gestione messaggi invii sms mirati" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/scarica.css" media="screen" />
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
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Gestione Messaggi"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="scarica-il-software-per-sms-marketing.html" class="subattivo1" title="Permalink a Ultima versione">Ultima versione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Perch&egrave; GM ?">Perch&egrave; GM?</a>
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="" title="Permalink a Scarica">Scarica</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header3">
				<div class="descmottoo">
					<h4>Scarica Gestione Messaggi per effettuare <a href="http://www.gestionemessaggi.com" title="Permalink a Gestione messaggi" class="market">campagne sms</a></h4>
					<div>
						<a href="aggiungivisita.php" title="Permalink a Scarica Gestione Messaggi" onClick="javascript:_paq.push(['trackGoal','1']);">Scarica</a> la versione per 30 giorni di Gestione Messaggi l'unico software che ti consente di effettuare campagne pubblicitarie a costo 0,inizia da subito ad inviare sms ai tuoi clienti.<br /><br />
						
						Per tutti quelli che non hanno un telefonino supportato dal programma, <a href="crediti.html" title="Permalink a Crediti Gestione Messaggi">cliccando qui</a> &egrave; possibile acquistare i nostri pacchetti di sms.
					</div>
				</div>
				<a href="aggiungivisita.php" title="Permalink a Scarica Gestione Messaggi" class="nosott"><div class="descarica">&nbsp;</div></a>
			</div>
			<div class="sotto">&nbsp;</div>
			<div class="divdownload">
				<div class="boxsinistra">
					<a href="aggiungivisita.php" title="Permalink a Scarica Gestione Messaggi" class="nosott"><div class="titolodownload1">Scarica Gratis la versione per 30 giorni - Windows</div></a>
					<div class="divinter"><a href="aggiungivisita.php" title="Permalink a Scarica Gestione Messaggi"><img src="immagini/interfacciadownload.jpg" alt="gestione messaggi" border="0"/></a></div>
					<div class="divdesc">
						Acquistando la versione completa di Gestione Messaggi, contribuirai allo sviluppo del prodotto e alla crescita della Nostra Azienda. <br /><br />
						<a href="aggiungivisita.php" rel="nofollow" title="Permalink a Scarica Gestione Messaggi" onClick="javascript:_paq.push(['trackGoal','1']);"><img src="immagini/bottone.jpg" border="0"/></a>
					</div>
				</div>
				<div class="boxdestra">				
					<div class="login1" id="download">
						<a href="/pdf/guida-gestione-messaggi.pdf" rel="nofollow" onClick="javascript:_paq.push(['trackGoal','2']);" title="Permalink a Guida di Gestione Messaggi"><img src="immagini/documentazione.jpg" alt="documentazione" border="0"/></a>
					</div>
				</div>	
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>