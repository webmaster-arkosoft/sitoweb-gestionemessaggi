<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Panoramica di gestione messaggi</title>
		<?php include "../analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/guida.css" media="screen" />
		<meta name="abstarct" content="centro assistenza per sms marketing"/>
		<meta name="title" content="centro assistenza per sms marketing" />
		<meta name="keywords" content="software da web,sms marketing,campagne di sms marketing"/>
		<meta name="description" content="GM - La soluzione per sms marketing " />
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Permalink a Gestione Messaggi"><img src="../immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="http://www.gestionemessaggi.com" class="subattivo" title="Permalink a Contatto">Descrizione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="http://www.gestionemessaggi.com" class="linkmenu" title="Permalink a Perch&egrave; GM?">Perch&egrave; GM?</a>
						<a href="http://www.gestionemessaggi.com/scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica" class="linkmenu" title="Download">Scarica</a>
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="http://www.gestionemessaggi.com/sms-marketing/index.html" title="Permalink a Guida">Guida</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
						<a href="http://www.gestionemessaggi.com/acquista.html" class="linkmenu" title="Permalink a Acquista">Acquista</a>
						<a href="http://www.gestionemessaggi.com/azienda.html" class="linkmenu" title="Permalink a Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header10">
				<div class="descmotto">
					<h4>Guida di Gestione Messaggi</h4>
					<div >
						Gestione Messaggi &egrave; stato progettato per essere estremamente semplice e intuitivo. Qualora voleste qualsiasi chiarimento o informazione mettiamo a Vostra disposizione la guida all'uso del software.				
					</div>
				</div>
			</div>	
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadre">
				<div class="boxassistenza1">
					<div class="indiceguida">
						<div id="indice" >Indice</div>
						<div class="voceguida">
								<a rel="bookmark" title="Permalink a Guida" href="index.html#descrizioneguida"> >> Prefazione </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Installazione software" href="installazioneGM.html#descrizioneguida"> 1. Installazione di Gestione Messaggi </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Panoramica di gestione messaggi" href="panoramica.html#descrizioneguida"> 1.1 Panoramica sull'interfaccia Grafica </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Inserimento clienti per sms multipli" href="inserimentoclienti.html#descrizioneguida"> 2. Inserimento dei Clienti </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Interessi dei clienti" href="interessi.html#descrizioneguida"> 3. Gli Interessi </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Introduzione all'invio" href="intr_newsms.html#descrizioneguida"> 4. Introduzione all'invio degli sms </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Configurazione dei telefonini" href="configurazionetel.html#descrizioneguida"> 4.1 Configurazione dei Telefonini </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Configurazione Crediti" href="configurazionecrediti.html#descrizioneguida"> 4.2 Gestione dei Crediti </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Acquista crediti" href="acquistacrediti.html#descrizioneguida"> 4.2.1 Acquisto dei Crediti </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Utilizzo del filtro" href="filtro.html#descrizioneguida"> 5. Utilizzo del Filtro </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Gestione dell'archivio" href="gestione.html#descrizioneguida"> 6. Gestione dell'Archivio </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Modifica clienti" href="modificacliente.html#descrizioneguida"> 6.1 Modifica di un Cliente </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Modifica le preferenze di un utente" href="modificapreferenze.html#descrizioneguida"> 6.2 Preferenze di un Cliente </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Versione Demo" href="demo.html#descrizioneguida"> 7. Versione Demo </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Richiedere il codice seriale" href="richiediseriale.html#descrizioneguida"> 8. Richiedere il Seriale </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Attivazione di gestione messaggi" href="attivazione.html#descrizioneguida"> 9. Attivazione del Prodotto </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Disinstallazione" href="disinstallare.html#descrizioneguida"> 10. Disinstallazione di Gestione Messaggi </a>
						</div>
					</div>
 				</div>
				<div class="logoarkosoft">
					<div class="login">
						<form action="" name="login" id="login" method="POST">
							<div class="campilogin">Username:</div>
							<div class="campilogin"><input type="text" name="username" id="username" value="" /></div>
							<div class="campilogin">Password:</div>
							<div class="campilogin"><input type="text" name="password" id="password" value="" /></div>
							<div class="bottonelogin"><input type="image" src="../immagini/bottonelogin.jpg" /></div>
						</form>	
					</div>
					
					<div class="vendite">
						<img src="../immagini/guidapdf.jpg" alt="Guida in Pdf" class="imgvendite" >
							<a href="/pdf/guida-gestione-messaggi.pdf" title="Documentazione PDF" rel="nofollow">Documentazione PDF</a><br /><br /> 
							Manuale d'uso in PDF
					</div>
					
					<div class="vendite">
						<img src="../immagini/guidapdf.jpg" alt="Guida in Pdf"  class="imgvendite" >
							<a href="/pdf/gestione-messaggi-brochure.pdf" title="Brochure di Gestione Messaggi" rel="nofollow">Brochure PDF</a><br /><br /> 
							Brochure di Gestione Messaggi in PDF
					</div>
					
					
				</div>
			</div>
			<div id="descrizioneguida">
				<h1> <a rel="bookmark" title="Permalink a Panoramica di gestione messaggi software per sms marketing" href="panoramica.html#descrizioneguida">Panoramica sull'interfaccia Grafica </a></h1>
				<p>Adesso <a rel="bookmark" title="Permalink a Gestione Messaggi software per sms marketing" href="../index.html">Gestione Messaggi</a> &egrave; installato e pronto all'uso per iniziare la nostra campagna di <strong>Sms</strong>.</p>
				<p>
						<img src="img/interfaccia.jpg" alt="Interfaccia Gestione Messaggi" class="centra"/>
				</p>
				<p>L'interfaccia di Gestione Messaggi permette di eseguire le principali funzioni del programma: </p>
				<p>
						<img src="img/invsms.jpg" alt="Inviare messaggi" /> Con questo pulsante potrete inviare gli sms ai clienti
				</p>
				<p>
						<img src="img/nuovclie.jpg" alt="Nuovo Cliente" /> Con questo pulsante potete inserire nuovi clienti nell'Archivio, senza alcun limite
				</p>
				<p>
						<img src="img/gestarc.jpg" alt="Gestione Archivio" /> Con questo pulsante vi permette infine di accedere all'Archivio contenente tutti i clienti, suddivisi per tipologia ovvero Persona Fisica o Azienda, e gli Interessi assegnati o da assegnare ai clienti
				</p>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>