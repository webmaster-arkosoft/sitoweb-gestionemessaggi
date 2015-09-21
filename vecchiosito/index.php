 <?
	 
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>Gestione Messaggi - programma per inviare sms gratis. </title>
		<?php include "analitycs.php"; ?>
		<meta name="abstarct" content="software sms "/>
		<meta name="title" content="3 lettere SMS | sms | SMS" />
		<meta name="keywords" content="software per l'invio degli sms o messaggi"/>
		<meta name="description" content="Gestione Messaggi il Programmi per inviare SMS gratis. Le migliori applicazioni per inviare SMS gratis dal proprio pc " />
		<link rel="image_src" href="http://www.gestionemessaggi.com/immagini/logo1.jpg" />
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/homepage.css" media="screen" />
 
		
			<script src="js/AC_OETags.js" type="text/javascript"></script>
			<script src="js/pageear.js" type="text/javascript"></script>
		</head>
		<body>
	 

	</head>
	<body>
		 
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com/" title="Gestione Messaggi"><img  alt="Gestione Messaggi" src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="/"  class="linksubmenu" title="Permalink a Gestione Messaggi">Descrizione</a>
								<a href="galleria-sms-marketing.html" class="linksubmenu" title="Permalink a Galleria del prodotto">Galleria del prodotto</a> 
								<a href="inostriclienti-di-sms-marketing.html" class="linksubmenu" title="Permalink a I nostri clienti">I Nostri Clienti</a> 
								<a href="contattaci-per-sms-marketing.html" class="linksubmenu" title="Permalink a Contattaci">Contattaci</a> 
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="http://www.gestionemessaggi.com" title="Perch&egrave; GM ?">Perch&egrave; GM?</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
						<a href="scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica" class="linkmenu">Scarica</a>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="space">
					<div class="descrizioneheader">
						L'unico programma che ti consente di collegare pi&ugrave; telefonini e inviare sms pubblicitari, smistando i messaggi tra i tuoi operatori mobili, sfruttando cos&igrave; le promozioni attive sulle tue sim card.
					</div>
				</div>
				<div class="motto">
					<h1>Gestione Messaggi - La soluzione per pubblicizzare</h1>
					<h1>la tua attivit&agrave; commerciale inviando sms gratis verso i tuoi clienti.</h1>
					
					<p>Invia sms pubblicitari utilizzando il tuo telefonino<br /> o acquistando da noi i crediti.<br /><br />
					Acquistando la Licenza avrai <u>1.000 SMS</u> gratis.</p>
				</div>	
			</div>
<?php		include "controllo.php"; 
			if($assistenza=="attivo"){
?>				<div class="sotto">
					<div class="bannerassistenza"><a href="http://www.gestionemessaggi.com/livezilla/chat.php?code=U0VSVkVSUEFHRQ__" title="Assistenza in linea"><img src="immagini/assistenza.gif" border="0"/></a></div>
					<div class="secondaimg"><img  alt="cellulari" src="immagini/cell.png" /></div>
				</div>
<?php		}
			if($assistenza=="disattivo"){
?>			<div class="sotto"><img src="immagini/cell.png" class="imgcell"/></div>
<?php		}
?>			<div class="boxmadre">
				<div class="boxs">
					<div class="aggiornamenti">
						<div class="aggiorna">Aggiornamenti</div>
						<div class="testoaggiorna">Le Ultime Novita su Gestione Messaggi</div>
					</div>
					<div class="divaggiornamenti">
						<div class="titoloaggiorna">Nuovo Cliente</div>
						Si potranno inserire i clienti, sia Persone Fisiche che Aziende con i loro rappresentanti, tramite l'apposita funzione, associandogli degli interessi e stampando in tempo reale la liberatoria per il trattamento dei dati personali. 
					</div>
					<div class="divaggiornamenti1">
						<div class="titoloaggiorna">Invio di SMS</div>
						Avrete la possibilit&agrave; di inviare SMS tramite telefonini oppure acquistare da noi i Crediti, con la possibilit&agrave; di scegliere i clienti a cui inviare SMS in base a dei filtri per interesse, o inviarne direttamente una serie a tutti i clienti. 
						Utilizzando i nostri Crediti, potrete personalizzare il mittente dei messaggi.
					</div>

					<div class="divaggiornamenti2">
						<div class="titoloaggiorna">Configurazione dei Telefoni</div>
							Potrete configurare il programma per collegare un numero illimitato di telefonini, a scelta tra tutti i modelli supportati dal programma, per inviare un numero praticamente infinito di SMS a costo zero, sfruttando le promozioni.
					</div>
					<div class="divaggiornamenti3">
						<div class="titoloaggiorna">Configurazione dei Crediti</div>
							Se non siete in possesso di uno dei modelli supportati, &egrave; sempre possibile utilizzare i nostri pacchetti di Crediti. Baster&agrave; inserire Username e Password che vi comunicheremo, per controllare la disponibilit&agrave; di Crediti e inviare gli SMS. 
					</div>
				</div>
				<div class="boxd">
					<div class="puntiforza">
						<div class="domandapuntiforza">Che differenza c'&egrave; tra i <span class="evidenzio">classici siti</span> di invio sms e Gestione Messaggi?</div>
					</div>
					<div class="rispostapuntiforza">
						I classici siti che effettuano campagne di invio sms offrono dei pacchetti da 10 a 100 sms, e sono caratterizzati da tecnologie basate sul web, quindi agiscono esclusivamente tramite internet. Questo comporta che per caricare i vostri clienti e inviare sms, si devono utilizzare i loro servizi on-line, con conseguente perdita di tempo prezioso e l'attivit&agrave; necessita di una connessione internet, sempre attiva.<br /><br />

						Con il nostro programma avrete invece la possibilit&agrave; di caricare direttamente sul vostro computer i vostri clienti, durante la fase di vendita o prevendita di un prodotto. Questo vi permetter&agrave; di chiedere direttamente ai vostri clienti quali sono i loro interessi, cos&igrave; da attuare un'azione di marketing mirata.<br /><br />

						Vi ricordiamo che memorizzando i dati dei clienti direttamente sul vostro computer, avrete una maggiore sicurezza, in quanto non dovrete lasciare i dati in mano ad altre societ&agrave;.<br /><br />
						<div class="linkpuntiforza">
							<div class="linkpuntiforza1"><img src="immagini/inserisci.gif"></div>
							<div class="linkpuntiforza2"><a href="download.html#download">Scarica GM</a></div>	
						</div>
					</div>
				</div>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>