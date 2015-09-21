<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Acquista i crediti</title>
		<?php include "analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/crediti.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/acquista.js"></script>
		
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com/index.html" title="Gestione Messaggi"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="http://www.gestionemessaggi.com/acquista.html" class="linksubmenu" title="Permalink a Acquista licenza">Acquista Licenza</a>
								<a href="http://www.gestionemessaggi.com/crediti.html" class="subattivo" title="Permalink a Crediti">Acquista Crediti</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="http://www.gestionemessaggi.com/" class="linkmenu" title="Perch&egrave; GM">Perch&egrave; GM?</a>
						<a href="scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica " class="linkmenu" title="Download">Scarica</a> 
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida">Guida</a>  
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="acquista.html" title="Permalink a Acquista">Acquista</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header7">
				<div class="descmotto2">
					<h4>Acquista Crediti</h4>
					<div>
					Esistono numerosi servizi online per effettuare invio di sms essi utilizzano varie tipologie di gateway (server per la trasmissione degli SMS) ma solo la nostra azienda, attraverso l'utilizzo di gateway di Alta Qualit&agrave;, garantisce il perfetto e rapido invio dei Vostri SMS.

					Acquistando direttamente da noi i Crediti, Vi garantiamo inoltre la personalizzazione del mittente, a prescindere dal tipo di pacchetto acquistato.					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadrecrediti">
				<div class="boxacquista">
					<div class="boxsinistra">
						<div class="titoloacquista1">Acquista Crediti Passo 1 di 2</div>
						<div class="modalita">
							Le modalit&agrave; di pagamento accettate sono:
							Paypal, il circuito di pagamenti online pi&ugrave; sicuro, ideato dal noto sito di aste online, eBay oppure mediante Bonifico bancario.
							Per ulteriori chiarimenti inerenti l'acquisto del prodotto, rivolgetevi alla nostra <u>assistenza telefonica</u> al numero: 0831.1815236.
							<br /><br />
							Tutti i messaggi sono <u>ALTA PRIORITA'</u>, quindi &egrave; garantito il loro arrivo.
							
						</div>
						<div class="boxtabella">
							<div class="titolicrediti">Crediti SMS</div>
							<div class="titolicrediti">Costo pacchetto in euro</div>
							<div class="titolicrediti">Costo SMS in euro</div>
							<div class="titolicrediti">Acquista</div>
							
							<div class="crediti">100</div>
							<div class="crediti">10,00</div>
							<div class="crediti">0,10</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="10.00">
									<input type="hidden" name="crediti" id="crediti" value="100">
								</form>	
							</div>
							
							<div class="crediti">200</div>
							<div class="crediti">18,40</div>
							<div class="crediti">0,092</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="18.40">
									<input type="hidden" name="crediti" id="crediti" value="200">
								</form>	
							</div>
							
							<div class="crediti">500</div>
							<div class="crediti">42,00</div>
							<div class="crediti">0,084</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="42.00">
									<input type="hidden" name="crediti" id="crediti" value="500">
								</form>	
							</div>
							
							<div class="crediti">1.000</div>
							<div class="crediti">82,00</div>
							<div class="crediti">0,082</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="82.00">
									<input type="hidden" name="crediti" id="crediti" value="1000">
								</form>	
							</div>
							
							<div class="crediti">2.000</div>
							<div class="crediti">162,00</div>
							<div class="crediti">0,081</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="162.00">
									<input type="hidden" name="crediti" id="crediti" value="2000">
								</form>	
							</div>
							
							<div class="crediti">5.000</div>
							<div class="crediti">400,00</div>
							<div class="crediti">0,080</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="400.00">
									<input type="hidden" name="crediti" id="crediti" value="5000">
								</form>	
							</div>
							
							<div class="crediti">10.000</div>
							<div class="crediti">730,00</div>
							<div class="crediti">0,073</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="730.00">
									<input type="hidden" name="crediti" id="crediti" value="10000">
								</form>	
							</div>
							
							<div class="crediti">20.000</div>
							<div class="crediti">1.440,00</div>
							<div class="crediti">0,072</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="1440.00">
									<input type="hidden" name="crediti" id="crediti" value="20000">
								</form>	
							</div>
							
							<div class="creditipromozione">30.000</div>
							<div class="creditipromozione">1.875,00 (promozione)</div>
							<div class="creditipromozione">0,0625</div>
							<div class="creditipromozione">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista1.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="1875.00">
									<input type="hidden" name="crediti" id="crediti" value="30000">
								</form>	
							</div>
							
							<div class="crediti">50.000</div>
							<div class="crediti">3.500,00</div>
							<div class="crediti">0,070</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="3500.00">
									<input type="hidden" name="crediti" id="crediti" value="50000">
								</form>	
							</div>
							
							<div class="crediti">60.000</div>
							<div class="crediti">4.080,00</div>
							<div class="crediti">0,068</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="4080.00">
									<input type="hidden" name="crediti" id="crediti" value="60000">
								</form>	
							</div>
							
							<div class="crediti">100.000</div>
							<div class="crediti">6.400,00</div>
							<div class="crediti">0,064</div>
							<div class="crediti">
								<form action="step2.html" class="formcrediti" method="POST" name="compracrediti" id="compracrediti">
									<input type="image" src="immagini/acquista.jpg">
									<input type="hidden" name="prezzo" id="prezzo" value="6400.00">
									<input type="hidden" name="crediti" id="crediti" value="100000">
								</form>	
							</div>
						</div>
						<div class="notabene">
						SMS ALTA QUALITA' (&egrave; possibile personalizzare il mittente ) + notifica di ricezione GRATUITA<br />
						I nostri sms NON hanno scadenza - i prezzi si intendono iva esclusa
						</div>
					</div>
					<div class="boxdestra">&nbsp;</div>
				</div>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>