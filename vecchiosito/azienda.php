<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Arkosoft sviluppa software per sms marketing</title>
		<?php include "analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/azienda.css" media="screen" />
		 
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi software per SMS Marketing"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="index.html" class="subattivo" title="Contatto">Contatto</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Perch&egrave; GM?">Perch&egrave; GM?</a>
						<a href="scarica-il-software-per-sms-marketing.html" class="linkmenu" title="scarica il software per sms marketing">Scarica</a>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida per software di Sms marketing">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<div class="mainmenu-activee">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="index.html" title="L'Azienda">Azienda</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
					</div>
				</div>
			</div>
			<div class="header8">
				<div class="descmotto">
					<h4>Contatto personale...</h4>
					<div>
						Per maggiore trasparenza, sia prima che dopo la vendita, non esitate a contattarci per qualsiasi chiarimento o informazione sul prodotto.				
					</div>
				</div>
			</div>	
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadre2">
				<div class="boxassistenza">
					<div class="vendite">
						<img src="immagini/vendite.jpg" alt="Vendita" title="Vendita" class="imgvendite"> 
						<h2>Vendite</h2>
						Potete contattarci dalle 9.00 alle 13.00 e dalle 16.00 alle 19.00
						<div class="rigazienda1"><div>Italia</div><div>0831.1815236</div></div>
						<div class="rigazienda"><div>Fax</div><div>0831.1815238</div></div>
						<div class="rigazienda2"><div>E-Mail</div><div><a href="mailto:info@arkosoft.it">info@arkosoft.it</a></div></div>
						<div class="rigazienda"><div>Sito</div><div><a href="http://www.arkosoft.it" title="software house puglia">www.arkosoft.it</a></div></div>
						<br /><br />
					</div>
					<div class="vendite">
						<img src="immagini/assistenza.jpg" alt="Assistenza tecnica" title="Assistenza tecnica" class="imgvendite">
						<h2>Assistenza tecnica</h2>
						<div class="frasesupporto">Grazie al Nostro supporto tecnico siamo in grado di offrire assistenza ai proprietari di licenza dei Nostri Prodotti o agli utenti nell'acquisto. Grazie per la vostra comprensione!</div>
						<br /><br />
					</div>
					<br /><br />
					<div class="vendite">
						<img src="immagini/dovesiamo.jpg" alt="Dove Siamo" title="Dove Siamo" class="imgvendite"> 
						<h2>Dove Siamo</h2>
						<div class="indicazioni">
							<b>ARKOSOFT S.N.C. </b><br />
							Via Castello, 54 San Pancrazio Sal.no <br />
							72026, Brindisi Italia 
						</div>
						<p>&nbsp;</p>
					</div>
					
					<center><iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=arkosoft&amp;sll=41.442726,12.392578&amp;sspn=13.59447,28.081055&amp;ie=UTF8&amp;hq=arkosoft&amp;hnear=&amp;ll=40.418002,17.836732&amp;spn=0.101362,0.219383&amp;z=12&amp;iwloc=A&amp;cid=6282303675474807129&amp;output=embed"></iframe><br /><small><a href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=arkosoft&amp;sll=41.442726,12.392578&amp;sspn=13.59447,28.081055&amp;ie=UTF8&amp;hq=arkosoft&amp;hnear=&amp;ll=40.418002,17.836732&amp;spn=0.101362,0.219383&amp;z=12&amp;iwloc=A&amp;cid=6282303675474807129" style="color:#0000FF;text-align:left">Visualizzazione ingrandita della mappa</a></small></center>			
				</div>
				<div class="logoarkosoft">
					<a href="http://www.arkosoft.it" title="Software house puglia"><img src="immagini/logo.jpg" title="Arkosoft" alt="Arkosoft" /></a>
					<img src="immagini/ufficio.jpg" title="Arkosoft" alt="Arkosoft" />
				</div>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>