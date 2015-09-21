<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Installazione software gestione messaggi</title>
		<?php include "../analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/guida.css" media="screen" />
		<meta name="abstarct" content="Guida installazione software gestione messaggi"/>
		<meta name="title" content="Guida installazione software gestione messaggi" />
		<meta name="keywords" content="guida installazione gm, guida gm,installazione gestione messaggi"/>
		<meta name="description" content="GM - Installazione software gestione messaggi " />
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Gestione Messaggi software per SMS Marketing"><img src="../immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="index.html" class="subattivo" title="Contatto">Descrizione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="http://www.gestionemessaggi.com/" class="linkmenu" title="Permalink a Perch&egrave; GM ?">Perch&egrave; GM?</a>
						<a href="http://www.gestionemessaggi.com/scarica-il-software-per-sms-marketing.html" title="Permalink a scarica" class="linkmenu" title="Download">Scarica</a>
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
							<a rel="bookmark" title="Permalink a Inserimento clienti" href="inserimentoclienti.html#descrizioneguida"> 2. Inserimento dei Clienti </a>
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
							<a rel="bookmark" title="Permalink a Acquista Crediti" href="acquistacrediti.html#descrizioneguida"> 4.2.1 Acquisto dei Crediti </a>
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
							<a rel="bookmark" title="Permalink a Modifica le preferenze" href="modificapreferenze.html#descrizioneguida"> 6.2 Preferenze di un Cliente </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Versione Demo di Gestione Messaggi" href="demo.html#descrizioneguida"> 7. Versione Demo </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Richiedere" href="richiediseriale.html#descrizioneguida"> 8. Richiedere il Seriale </a>
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
				<h1><a rel="bookmark" title="Permalink a Installazione software di sms marketing per fare pubblicit&agrave; via sms" href="installazioneGM.html#descrizioneguida"> Installazione di Gestione Messaggi </a></h1>
				<p><a href="../scarica-il-software-per-sms-marketing.html" title="Permalink a scarica il software per sms marketing" >Scaricate il programma dal sito del software</a> e siamo pronti a installare <strong>Gestione Messaggi</strong>, software utile per creare la vostra pubblicit&agrave; con <strong>sms</strong>.</p>
				<p>1. Avviate il programma di installazione chiamato "setup.exe" e nella finestra confermate con "Avanti";</p>
				<p>
						<img src="img/installazione1.jpg" alt="Installazione di Gestione Mesasggi" class="centra" />
				</p>
				<p>2. Confermate di Accettare i Termini del contratto di Licenza, selezionando l'apposita casella e premendo ancora "Avanti";</p>
				<p>
						<img src="img/installazione2.jpg" alt="Contratto di licenza di Gestione Messaggi" class="centra" />
				</p>
				<p>3. Selezionate la cartella in cui sar&agrave; installato Gestione Messaggi, se volete cambiare quella gi&agrave; impostata, scrivete direttamente nell'apposita casella o premete "Sfoglia..."
				e selezionate la cartella dalla finestra che si aprir&agrave;;</p>
				<p>
						<img src="img/installazione3.jpg" alt="Scelta della cartella di istallazione" class="centra" />
				</p>
				<p>4. Selezionare la cartella del Menu Avvio/Start, allo stesso modo della precedente;</p>
				<p>
						<img src="img/installazione4.jpg" alt="Selezionare la cartella nel Menu Avvio/Start" class="centra" />
				</p>
				<p>5. Decidete se volete creare un'icona di avvio sul desktop, cliccando nell'apposita casella;</p>
				<p>
						<img src="img/installazione5.jpg" alt="Creare un'icona sul desktop" class="centra" />
				</p>
				<p>6. Confermate infine tutte le opzioni di installazione;</p>
				<p>
						<img src="img/installazione6.jpg" alt="Scelta della cartella di istallazione" class="centra" />
				</p>
				<p>7. <strong>Gestione Messaggi</strong> verr&agrave; finalmente installato sul vostro PC, a questo punto potrete decidere se avviare il programma;</p>
				<p>
						<img src="img/installazione7.jpg" alt="Scelta della cartella di istallazione" class="centra" />
				</p>
				<p>
						<img src="img/installazione8.jpg" alt="Scelta della cartella di istallazione" class="centra" />
				</p>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>