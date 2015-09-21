<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Configurazione dei telefonini</title>
		<?php include "../analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/guida.css" media="screen" />
		<meta name="abstarct" content="Configurazione dei telefonini"/>
		<meta name="title" content="Configurazione dei telefonini" />
		<meta name="keywords" content="sms internet,sms marketing,campagne sms"/>
		<meta name="description" content="GM - Configurazione dei telefonini " />
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
								<a href="index.html" class="subattivo" title="Contatto">Descrizione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="http://www.gestionemessaggi.com" class="linkmenu" title="Permalink a Perch&egrave; GM ?">Perch&egrave; GM?</a>
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
							<a rel="bookmark" title="Permalink a Acquista crediti di per inviare sms pubblicit&agrave;" href="acquistacrediti.html#descrizioneguida"> 4.2.1 Acquisto dei Crediti </a>
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
							<a rel="bookmark" title="Permalink a Attivazione" href="attivazione.html#descrizioneguida"> 9. Attivazione del Prodotto </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Disinstallazione " href="disinstallare.html#descrizioneguida"> 10. Disinstallazione di Gestione Messaggi </a>
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
				<h1>Configurazione dei Telefonini</h1>
				<p>
				La configurazione dei telefoni cellulari &egrave; una delle principali e pi&ugrave; importanti funzioni di <a rel="bookmark" title="Permalink a Gestione Messaggi" href="http://www.gestionemessaggi.com">Gestione Messaggi</a>,
				e va fatta preferibilmente subito dopo l'installazione del programma: con essa &egrave; possibile impostare anche pi&ugrave; di un cellulare, attraverso cui verranno smistati gli <strong>sms multipli</strong> ai vostri clienti.
				La procedura &egrave; semplice, fatta apposta per chi si avvicina per la prima volta ad un software di questo tipo o anche in generale; basteranno pochi minuti per poter collegare il vostro telefono cellulare e inviare 
				i vostri <strong>sms</strong>. Vediamo nel dettaglio come procedere per configurare un nuovo cellulare, il quale verr&agrave; inserito nell'elenco delle connessioni:
				</p>
				<p>
					<img src="img/configurazionetel.jpg" alt="Configurazione dei Cellulari" class="centra"/>
				</p>
				<p>
					<ul>
						<li> Nome della Connessione </li> 
						<div class="description">
						Impostate un nome per la nuova connessione, si possono utilizzare lettere, numeri e caratteri speciali;
						</div>
						<li> Seleziona il Cellulare </li>
						<div class="description">
						Dal menu a tendina potete selezionare uno dei modelli di telefono cellulari configurabili per l'invio: se non avete a disposizione alcuno dei modelli 
						presenti in elenco, &egrave; possibile contattare <a title="Software house puglia" href="http://www.arkosoft.it">ARKOSOFT SNC</a> per eventuali aggiornamenti alla lista;
						</div>
						<li>Selezionare la Porta </li> 
						<div class="description">
						Questo menu contiene l'elenco delle porte disponibili a cui collegare il cavetto in dotazione al telefono cellulare; il pulsante test serve a controllare il corretto funzionamento
						della porta e del cavo, nonch&egrave; del collegamento col telefono cellulare;
						</div>
						<img src="img/configurazionetel2.jpg" alt="Test Connessione Cellulare" class="centra"/>
						<li> Selezionare l'Operatore </li> 
						<div class="description">
						Da questo menu si seleziona l'operatore mobile della vostra SIM Card, l'elenco comprende tutti gli operatori italiani, ma ne verranno inseriti dei nuovi, in 
						caso di necessit&agrave;;
						</div>
						<li> Tabella delle connessioni </li> 
						<div class="description">
						Questa tabella contiene i dati di tutte le connessioni disponibili, attraverso cui inviare gli SMS ai vostri clienti;
						</div>
						<li> Salva/Elimina </li>
						<div class="description">
						Questi due pulsanti permettono di salvare la connessione che si &egrave; appena impostata, o di eliminare una o pi&ugrave; dalla Tabella delle connessioni;
						</div>
						<li> "Non visualizzare pi&ugrave;..." </li> 
						<div class="description">
						Cliccando nella casella a lato, si ordina al programma di non visualizzare pi&ugrave; la finestra "Configurazione dei Cellulari", in modo da inviare direttamente 
						gli SMS;
						</div>
						<li> Avanti </li> 
						<div class="description">
						Attraverso questo pulsante, si ritorna alla procedura di invio degli SMS. A questo punto, dopo avere assegnato un nome alla connessione, sar&agrave; possibile selezionare un modello di
						cellulare (Ad esempio: "LG U 310"). Infine, baster&agrave; configurare gli altri dati della connessione.
						</div>
					</ul>
				</p>
				<p>
				Nel caso volessimo aggiungere altri cellulari, baster&agrave; ripetere la stessa procedura, e scegliere un modello differente. <b>NOTA: </b> vi ricordiamo che ogni cellullare deve essere collegato attraverso
				una porta "COM" differente da quella di tutti gli altri, o il programma d&agrave;r&agrave; un errore.
				</p>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>