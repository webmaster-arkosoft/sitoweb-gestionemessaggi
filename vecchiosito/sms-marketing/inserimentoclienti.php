<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Inserimento clienti in gestione messaggi</title>
		<?php include "../analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/guida.css" media="screen" />
		<meta name="abstarct" content="centro assistenza per sms marketing"/>
		<meta name="title" content="centro assistenza per sms marketing" />
		<meta name="keywords" content="mobile marketing,sms marketing,inviare sms da pc"/>
		<meta name="description" content="GM - La soluzione per sms marketing " />
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Gestione Messaggi"><img src="../immagini/logo-sms-marketing.png" /></a></div>
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
						<a href="http://www.gestionemessaggi.com" class="linkmenu" title="Perch&egrave; GM?">Perch&egrave; GM ?</a>
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
							<a rel="bookmark" title="Permalink a Panoramica" href="panoramica.html#descrizioneguida"> 1.1 Panoramica sull'interfaccia Grafica </a>
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
							<a rel="bookmark" title="Permalink a Configurazione dei telefonini per invio di sms multipli" href="configurazionetel.html#descrizioneguida"> 4.1 Configurazione dei Telefonini </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Configurazione Crediti" href="configurazionecrediti.html#descrizioneguida"> 4.2 Gestione dei Crediti </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Acquista crediti" href="acquistacrediti.html#descrizioneguida"> 4.2.1 Acquisto dei Crediti </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Utilizzo del filtro per invio di sms multipli" href="filtro.html#descrizioneguida"> 5. Utilizzo del Filtro </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Gestione dell'archivio" href="gestione.html#descrizioneguida"> 6. Gestione dell'Archivio </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Modifica clienti di gestione messaggi" href="modificacliente.html#descrizioneguida"> 6.1 Modifica di un Cliente </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Modifica le preferenze di un utente di gestione messaggi software per inviare sms pubblicit&agrave;" href="modificapreferenze.html#descrizioneguida"> 6.2 Preferenze di un Cliente </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Versione Demo di Gestione Messaggi software per invio di sms multipli" href="demo.html#descrizioneguida"> 7. Versione Demo </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Richiedere il codice seriale" href="richiediseriale.html#descrizioneguida"> 8. Richiedere il Seriale </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Attivazione" href="attivazione.html#descrizioneguida"> 9. Attivazione del Prodotto </a>
						</div>
						<div class="voceguida">
							<a rel="bookmark" title="Permalink a Disinstallazione di Gestione Messaggi" href="disinstallare.html#descrizioneguida"> 10. Disinstallazione di Gestione Messaggi </a>
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
				<h1> <a rel="bookmark" title="Permalink a Inserimento clienti" href="inserimentoclienti.html#descrizioneguida"> Inserimento dei Clienti </a></h1>
				<p>Procediamo con l'inserimento dei Clienti per smistare <strong>sms multipli</strong> filtrando tra i loro interessi e/o le altre caratteristiche.</p>
				<p>L'inserimento di nuovi clienti pu&ograve; essere effettuato in qualunque momento, basta andare dall'interfaccia principale e premere il pulsante "Nuovo Cliente" e seguire la procedura:</p>
				<p>1. Nella prima schermata, scegliere il tipo di cliente attraverso il men&ugrave; "Sottoscrivi il seguente Utente": da qui &egrave; possibile scegliere sia una Persona Fisica, che un'Azienda; <b>NOTA:</b>
				cliccando su uno qualsiasi dei campi sottostanti, si inizia l'inserimento dei dati.</p>
				<p>
					<img src="img/nuovocliente1.jpg" alt="Inserimento Clienti" class="centra"/>
				</p>
				<p>2. Nella schermata successiva, inserire tutti i dati anagrafici del cliente che si sta inserendo: nel nostro caso, inseriamo una Persona Fisica  con i suoi dati come "Data di Nascita", o la "Citt&agrave;"
				di residenza oltre ovviamente al "Nome" e al "Cognome";</p>
				<p>
					<img src="img/nuovocliente2.jpg" alt="Inserimento Clienti" class="centra"/>
				</p>
				<p>3. Una volta inseriti tutti i dati, come mostrato in figura, cliccare su "Avanti" per aprire la finestra successiva;</p>
				<p>4. Appare una seconda finestra, dove andranno inseriti i contatti del cliente: "Numero di Cellulare" e "Operatore" sono obbligati, mentre altri dati come "Telefono Fisso", "Codice Fiscale" o "E-mail", sono facoltativi;</p>
				<p>5. Completati i dati del Cliente, si pu&ograve; terminare l'operazione tramite il pulsante "Termina", mentre col pulsante subito a sinistra, si torna indietro alla finestra precedente (Persona Fisica 1 e 2)</p>
				<p>
					<img src="img/nuovocliente3.jpg" alt="Inserimento Clienti" class="centra"/>
				</p>
				<p><b>NOTA:</b> all'atto della creazione di un Utente di tipo Azienda &egrave; anche possibile sottoscrivere un rappresentante legale della stessa, semplicemente spuntando l'opzione "Sottoscrivi rappresentante legale"
				posta in fondo alla finestra. Si aprir&agrave; una finestra del tutto simile a quella utilizzata per creare un Utente di tipo Persona Fisica.</p>
				<p>
					<img src="img/nuovocliente4.jpg" alt="Inserimento Clienti" class="centra"/>
				</p>
				<p>6. Per completare l'inserimento di un cliente &egrave; necessario assegnargli degli interessi, che vedremo nel prossimo capitolo di questa guida</p>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>