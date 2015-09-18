<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Gestione Messaggi il software per il tuo Mobile marketing</title>
		<meta name="description" content="Gestione Messaggi è il software perfetto per le campagne pubblicitarie di qualsiasi attività commerciale, semplicemente inviando sms.">
		<meta name="keywords" content="sms, marketing, messaggi gratis">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="stylesheets/style.css"rel="stylesheet" type="text/css">
		<link href="stylesheets/ie.css" rel="stylesheet" type="text/css">
		<link href="stylesheets/component.css" rel="stylesheet" type="text/css">
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Montserrat' rel='stylesheet' type='text/css'>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
		<script src="js/funzioni.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		
		<script>
			$(document).ready(function(){$('a[href^="#"]').on('click',function (e) {e.preventDefault();
																		var target = this.hash;
																		var $target = $(target);
																		$('html, body').stop().animate({'scrollTop': $target.offset().top}, 900, 'swing', function (){window.location.hash = target;});});});
			
			function avviacarrello(numero,div){
				 document.getElementById(div).innerHTML='<iframe src="carrello/carrello'+numero+'.html" width="845" height="395"></iframe>';
			}	
		</script>
		<!-- Piwik -->
			<script type="text/javascript">
			  var _paq = _paq || [];
			  _paq.push(['trackPageView']);
			  _paq.push(['enableLinkTracking']);
			  (function() {
				var u=(("https:" == document.location.protocol) ? "https" : "http") + "://statistiche.arkosoft.it/";
				_paq.push(['setTrackerUrl', u+'piwik.php']);
				_paq.push(['setSiteId', 18]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
				g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			  })();
			</script>
			<noscript><p><img src="http://statistiche.arkosoft.it/piwik.php?idsite=18" style="border:0;" alt=""></p></noscript>
		<!-- End Piwik Code -->
	</head>
	<body>
		<div id="header" class="menu">
			<div id="cd-top-nav" class="menu-header" >
				<ul>
					<li><a href="#container-body" title="perch&egrave; Gestione Messaggi">Perch&egrave; GM?</a></li>
					<li><a href="#clienti" title="chi usa gestione messaggi">Clienti</a></li>
					<li><a href="#scarica" title="scarica la demo">Scarica</a></li>
				</ul>
				<div class="logo" id="cd-logo">
					<a href="http://www.gestionemessaggi.com/">
						<img src="images/logo.png" alt="GESTIONE MESSAGGI">
					</a>
				</div>
				<ul>
					<li><a href="#licenza" title="acquista la licenza">Acquista Licenza</a></li>
					<li><a href="#box-crediti" title="acquista gli sms">Acquista gli sms</a></li>
					<li><a href="#guida" title="guida gestione messaggi">Guida</a></li>
				</ul>
			</div>
			<a id="cd-menu-trigger" href="#0">
				<span class="cd-menu-icon"></span>
			</a>
		</div>
		
		<div class="cd-main-content">
			
			<div class="mex1">
				<div class="img-fondo-mex1">
				
					<h1>Gestione Messaggi il software per il tuo Mobile marketing</h1>
					<h2>Prova Gratuitamente senza vincoli i nostri strumenti di invio sms e raggiungi tutti i tuoi clienti.</h2>
					
					<div class="style-bottom1">
						<div class="md-modal md-effect-15" id="modal-15">
							<div class="md-content">
								<a id="leadpages-close-button" class="md-close">X</a>
								<img src="images/placeholder.jpg">
								<div>
									<p><b>Ci siamo quasi: inserisci la tua e-mail e fare clic sul pulsante qui sotto per inviare il programma</b></p>
								</div>
								<div class="dowload">
									<img src="images/icona.fw.png" alt="">
								</div>
								<div class="promozione">
									<p>A quale e-mail possiamo inviare il Software?</p>
									<script language="javascript">
									function controllologin(){
							
										if (document.getElementById("email").value ==""){
												alert("Attenzione prima di continuare inserire una e-mail.");
												return false;
										}
										if (document.getElementById("email").value =="INSERISCI LA TUA EMAIL"){
											alert("Attenzione prima di continuare inserire una e-mail.");
											return false;
										}
								 
										var n = document.getElementById("email").value.search("@");
										if (n ==-1){
											alert("Attenzione prima di continuare inserire una e-mail valida.");
											return false;
										}
										return true;
									}
									</script>
									<form  onsubmit="return controllologin();"  method="post" action="confermaemail.php" >
										<input class="newsletter-email-footer left" type="text" id="email" name="email" placeholder="INSERISCI LA TUA EMAIL">
										<div class="button">
											<a href="confermaemail.html">
												<button class="md-close" type="submit">Scarica subito</button>
											</a>
										</div>
										<div class="privacy">
											<p>Ci teniamo alla vostra privacy.</p>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<button class="md-trigger bottone" data-modal="modal-15">Scarica ora</button>
						<div class="md-overlay"></div><!-- the overlay element -->
					</div>
					
					<div class="style-bottom">
						<div class="md-modal md-effect-1" id="modal-16">
							<div class="md-content">
								<a id="leadpages-close-button" class="md-close">X</a>
								<div id="buffer_carrello"></div>
							</div>
						</div>
						
						<button class="md-trigger bottone-acquista" data-modal="modal-16" onclick="javascript:avviacarrello('','buffer_carrello');">Acquista
						</button>
						<div class="md-overlay"></div>
					</div>
					
				</div>
			</div>
			
			<div class="spazio-vuoto" id="container-body">&nbsp;</div>
			
			<div class="colore-fondo-body">
				<div class="header-body">
					<div class="img-gm">
						<h2>
							<img src="images/perche-gm.png" alt="" width="89" height="70">
							<span>PERCH&Egrave; UTLIZZARE GESTIONE MESSAGGI?</span>
						</h2>
					</div>
				</div>
				<div class="container-body">
					<h2>
						La soluzione per pubblicizzare la Tua Attivit&agrave; Commerciale inviando
						sms gratis ai Tuoi Clienti. Invia sms pubblicitari utilizzando
						il Tuo Telefono o acquistando da noi i crediti.
					</h2>
					<h3>
						Acquistando la Licenza avrai <span class="rosso">1.000</span> SMS gratis
					</h3>
					<p>
						L'unico programma che ti consente di collegare pi&ugrave; telefonini
						e inviare sms pubblicitari, smistando i messaggi tra i tuoi
						operatori mobili, sfruttando cos&igrave; le promozioni
						attive sulle tue sim card.
					</p>
				</div>
			</div>
			
			<div class="contenuto">
				<div class="descrizione-contenuto">
					<p>
						I classici servizi che effettuano campagne di invio sms offrono dei pacchetti da 10 a 100 sms, e sono caratterizzati
						da tecnologie basate sul web, quindi agiscono<br> esclusivamente tramite internet. Questo comporta il fatto che
						per caricare i vostri clienti e inviare sms, si devono utilizzare i loro servizi on-line, con<br> conseguente
						perdita di tempo prezioso e in pi&ugrave; l'attivit&agrave; neccessita di una connessione internet, sempre attiva.
						<br><br>
						Con il nostro programma avrete invece la possibilit&agrave; di caricare direttamente sul vostro computer<br>
						i vostri clienti, durante la fase di vendita o prevendita di un prodotto.<br>
						Questo vi permetter&agrave; di chiedere direttamente ai vostri clienti quali sono i loro interessi, cos&igrave;<br>
						da attuare un'azione di marketing mirata.<br>
						<br><br>
						Vi ricordiamo che memorizzando i dati clienti direttamente sul vostro computer, avrete<br>
						una maggiore sicurezza, in quanto non dovrete lasciare dati in mano ad altre societ&agrave;.
					</p>
				</div>
			</div>
			
			<div id="clienti" class="spazio-vuoto">&nbsp;</div>
			
			<div class="clienti">
				<div class="header-clienti">
					<div class="img-clienti">
						<h2>
							<img src="images/clienti.png" alt="" width="75" height="70">
							<span>I CLIENTI CHE UTLIZZANO GESTIONE MESSAGGI</span>
						</h2>
					</div>
				</div>
				
				<div class="contenuto-clienti">
					<div class="box-foto">
						<img src="images/foto01.jpg" alt="" width="145" height="203">
						<div class="box-stelle">
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellav"></div>
						</div>
						<h5>"Finalmente posso sfruttare le promozioni del mio cellulare"</h5>
					</div>
					<div class="box-foto">
						<img src="images/foto02.jpg" alt="" width="145" height="203">
						<div class="box-stelle">
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellav"></div>
						  <div class="stellav"></div>
						</div>
						<h5>"I miei clienti sono aggiornati su tutte le mie offerte"</h5>
					</div>
					<div class="box-foto">
						<img src="images/foto03.jpg" alt="" width="145" height="203">
						<div class="box-stelle">
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellav"></div>
						</div>
						<h5>"Economico e semplice da usare"</h5>
					</div>
					<div class="box-foto">
						<img src="images/foto04.jpg" alt="" width="145" height="203">
						<div class="box-stelle">
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellap"></div>
						  <div class="stellav"></div>
						</div>
						<h5>"Fare marketing non &egrave; mai stato cos&igrave; semplice"</h5>
					</div>
				</div>
			</div>
			
			<div id="scarica" class="spazio-vuoto">&nbsp;</div>
			
			<div class="scarica">
				<div class="header-scarica">
					<div class="img-scarica">
						<h2>
							<img src="images/download.jpg" alt="" width="104" height="70">
							<span>SCARICA LA VERSIONE DEMO DI GESTIONE MESSAGGI</span>
						</h2>
					</div>
				</div>
				<div class="contenuto-scarica">
					<div class="testo-scarica">
						<p><span class="text">Scarica</span> la versione per 30 giorni di Gestione Messaggi l'unico
						software che ti consente di effettuare campagne pubblicitarie
						a costo 0, inizia fin da subito ad inviare sms ai tuoi clienti.</p>
						<p class="text3">SCARICA GRATIS LA VERSIONE PER 30 GIORNI - WINDOWS</p>
					</div>
					<div class="screenschot">
						<div class="box-screenschot">
							<img src="images/screenschot.jpg" alt="">
						</div>
						<div class="acquista">
							<div class="md-modal md-effect-15" id="modal-15">
								<div class="md-content">
									<a id="leadpages-close-button" class="md-close">X</a>
									<img src="images/placeholder.png">
									<div>
										<p><b>Ci siamo quasi: inserisci la tua e-mail e fare clic sul pulsante qui sotto per inviare il programma</b></p>
									</div>
									<div class="dowload">
										<img src="images/icona.fw.png" alt="">
									</div>
									<div class="promozione">
										<p>A quale e-mail possiamo inviare il Software?</p>
										<input class="newsletter-email-footer left" type="text" placeholder="INSERISCI LA TUA EMAIL">
									</div>
									<div class="button">
										<button class="md-close">Scarica subito</button>
									</div>
									<div class="privacy">
										<p>Ci teniamo alla vostra privacy.</p>
									</div>
								</div>
							</div>
							<button class="md-trigger bottone" data-modal="modal-15">Scarica ora</button>
							<div class="md-overlay"></div><!-- the overlay element -->
						</div>
						<div class="testo-screenschot">
							<p>Acquistando la versione completa di Gestione Messaggi, contribuirai allo sviluppo</p>
							<p>del prodotto e alla crescita della nostra azienda.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div id="licenza" class="spazio-vuoto">&nbsp;</div>
			
			<div class="licenza">
				<div class="header-licenza">
					<div class="img-acquista">
						<img src="images/cestino.png" alt="">
						<h2>ACQUISTA LA LICENZA</h2>
					</div>
				</div>
				<div class="descrizione-licenza">
					<p>&Egrave; possibile effettuare l'acquisto tramite:
					il circuito Paypal, il metodo pi&ugrave; sicuro per i vostri pagamenti online oppure mediante Bonifico bancario.
					Per ulteriori informazioni sull'acquisto, rivolgetevi alla nostra <b>assistenza telefonica</b> al numero: 0831.1815236.</p>
					<p class="rosso">Il costo della licenza acquistata &egrave; annuale.</p>
				</div>
				<div class="box-promozione">
					<img src="images/promozione.png" alt="1.000 sms gratuiti" width="294" height="70">
				</div>
				<div class="box-descprezzo">
					<div class="tabella">
						<div class="riga1"> 
							<div class="colonna1">DESCRIZIONE</div>
							<div class="colonna2">PREZZO</div>
						</div>
						<div class="riga2"> 
							<div class="colonna3">Licenza d'uso di Gestione Messaggi</div>
							<div class="colonna4">&euro;99,00 <span>(IVA ESCLUSA)</span></div>
						</div>
						<div class="riga2"> 
							<div class="colonna3">1000 sms</div>
							<div class="colonna4"><font>GRATUITI</font></div>
						</div>
						<div class="riga2"> 
							<div class="colonna3">TOTALE</div>
							<div class="colonna4">&euro;120.78 <span>(IVA INSCLUSA)</span></div>
						</div>
					</div>
				</div>
				<div class="aggiungi">
					<button class="md-trigger aggiungi-bottone" data-modal="modal-16" onclick="javascript:avviacarrello('','buffer_carrello');">AGGIUNGI AL CARRELLO</button>
				</div>
			</div>
			
			<div id="box-crediti" class="spazio-vuoto">&nbsp;</div>
			
			<div class="box-crediti">
				<div class="header-crediti">
					<div class="img-crediti">
						<img src="images/acquistacrediti.png" alt="">
						<h2>ACQUISTA GLI SMS</h2>
					</div>
				</div>
				<div class="descrizione-crediti">
					<p>Esistono numerosi servizi online per effettuare invio di sms essi utilizzano varie tipologie di gateway (server per la trasmissione degli sms)
						ma solo la nostra azienda, attraverso l'utilizzo di gateway di Alta Qualit&agrave;, garantisce il perfetto e rapido invio dei Vostri SMS.
						Acquistando direttamente da noi i Crediti, Vi garantiamo inoltre la personalizzazione del mittente, a prescindere dal tipo di pacchetto acquistato.
					</p>
				</div>
				<div class="descrizione-pagamento">
					<p>Le modalit&agrave; di pagamento accettate sono: Paypal, il circuito di pagamenti
						online pi&ugrave; sicuro, ideato dal noto sito di aste online, eBay oppure mediante
						Bonifico bancario. Per ulteriori chiarimenti inerenti l'acquisto del
						prodotto, rivolgetevi alla nostra <b>assistenza telefonica</b>
						al numero: 0831.1815236.
					</p>
				</div>
				<div class="tabella">
					<div class="riga1"> 
						<div class="colonna">CREDITI SMS</div>
						<div class="colonna">COSTO PACCHETTO IN EURO</div>
						<div class="colonna">COSTO SMS IN EURO</div>
						<div class="colonna">ACQUISTA</div>
					</div>
					<div class="riga3">&nbsp;</div>
					<div class="riga2"> 
						<div class="colonna">100</div>
						<div class="colonna">10,00</div>
						<div class="colonna">0,10</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-161" id="modal-161">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello1"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-161" onclick="javascript:avviacarrello('100','buffer_carrello1');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">200</div>
						<div class="colonna">18,40</div>
						<div class="colonna">0,092</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-162" id="modal-162">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello2"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-162" onclick="javascript:avviacarrello('200','buffer_carrello2');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">500</div>
						<div class="colonna">42,00</div>
						<div class="colonna">0,084</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-163" id="modal-163">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello3"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-163" onclick="javascript:avviacarrello('500','buffer_carrello3');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">1,000</div>
						<div class="colonna">82,00</div>
						<div class="colonna">0,082</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-164" id="modal-164">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello4"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-164" onclick="javascript:avviacarrello('1000','buffer_carrello4');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">2,000</div>
						<div class="colonna">162,00</div>
						<div class="colonna">0,081</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-165" id="modal-165">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello5"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-165" onclick="javascript:avviacarrello('2000','buffer_carrello5');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">5,000</div>
						<div class="colonna">400,00</div>
						<div class="colonna">0,080</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-166" id="modal-166">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello6"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-166" onclick="javascript:avviacarrello('5000','buffer_carrello6');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">10,000</div>
						<div class="colonna">730,00</div>
						<div class="colonna">0,073</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-167" id="modal-167">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello7"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-167" onclick="javascript:avviacarrello('10000','buffer_carrello7');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">20,000</div>
						<div class="colonna">1.440,00</div>
						<div class="colonna">0,072</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-168" id="modal-168">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello8"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-168" onclick="javascript:avviacarrello('20000','buffer_carrello8');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">30,000</div>
						<div class="colonna"><span class="rosso">1.875,00 (promozione)</span></div>
						<div class="colonna">0,0625</div>
						<div class="colonna4">
							<div class="aggiungi-tab-rosso">
								<div class="md-modal md-effect-169" id="modal-169">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello9"></div>
									</div>
								</div>
								<button class="md-trigger bottonerosso" data-modal="modal-169" onclick="javascript:avviacarrello('30000','buffer_carrello9');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">50,000</div>
						<div class="colonna">3.500,00</div>
						<div class="colonna">0,070</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-170" id="modal-170">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello10"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-170" onclick="javascript:avviacarrello('50000','buffer_carrello10');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">60,000</div>
						<div class="colonna">4.080,00</div>
						<div class="colonna">0,068</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-171" id="modal-171">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello11"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-171" onclick="javascript:avviacarrello('60000','buffer_carrello11');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga2"> 
						<div class="colonna">100,000</div>
						<div class="colonna">6.400,00</div>
						<div class="colonna">0,064</div>
						<div class="colonna4">
							<div class="aggiungi-tab">
								<div class="md-modal md-effect-172" id="modal-172">
									<div class="md-content">
										<a id="leadpages-close-button" class="md-close">X</a>
										<div id="buffer_carrello12"></div>
									</div>
								</div>
								<button class="md-trigger bottone" data-modal="modal-172" onclick="javascript:avviacarrello('100000','buffer_carrello12');">AGGIUNGI AL CARRELLO</button>
							</div>
						</div>
					</div>
					<div class="riga3">&nbsp;</div>
				</div>
				<div class="textfine-crediti">
					<p>SMS ALTA QUALIT&Agrave; (&egrave; possibile personalizzare il mittente) + notifica di direzione GRATUITA.
						I nostri sms NON hanno scadenza - i prezzi si intendono iva esclusa.
					</p>
				</div>
			</div>
			
			<div id="guida" class="spazio-vuoto">&nbsp;</div>
			
			<div class="box-guida">
				<div class="header-guida">
					<div class="img-guida">
						<img src="images/libro.png" alt="">
						<h2>GUIDA</h2>
					</div>
				</div>
				<div class="contenuto-guida">
					<p>Con la nostra guida all'uso di Gestione Messaggi, potrete trovare rapidamente
						tutte le informazioni che vi servono per utilizzare al meglio il nostro
						software per la pubblicit&agrave; via SMS.
					</p>
					<p>Scaricalo in un comodo file in formato PDF o consulta la guida sul
						sito <a href="http://www.gestionemessaggi.com/">www.gestionemessaggi.com</a>
					</p>
					<div class="libreria">
						<img src="images/libreria.png" alt="">
					</div>
					<div class="botton-guida">
						<a href="http://wiki.gestionemessaggi.com">
							<div class="bottone">
								<p>VAI ALLA GUIDA</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="footer">
				
				<div class="footer-container">
					<div class="box-footer-left">
						<p>MAPPA DEL SITO</p>
						<ul>
							<li><a href="#container-body" title="perch&egrave; Gestione Messaggi">PERCH&Egrave; GM?</a></li>
							<li><a href="#clienti" title="chi usa gestione messaggi">CLIENTI</a></li>
							<li><a href="#scarica" title="scarica la demo">SCARICA</a></li>
							<li><a href="#licenza" title="acquista la licenza">ACQUISTA LICENZA</a></li>
							<li><a href="#box-crediti" title="acquista gli sms">ACQUISTA GLI SMS</a></li>
							<li><a href="#guida" title="guida gestione messaggi">GUIDA</a></li>
						</ul>
					</div>
					<div class="box-footer-center">
						<p>CHI SIAMO</p>
						<p class="text-left">
							<i>Arkosoft realizza siti internet e software innovativi da 7 anni, portando la
								qualit&agrave; del made in Italy anche nel mondo dell'informatica.
							</i>
						</p>
					</div>
					<div class="box-footer-center">
						<p>ISCRIVITI ALLA NEWSLETTER</p>
						<input class="newsletter-email-footer left" type="text" placeholder="INSERISCI LA TUA EMAIL">
						<div class="footer-bottom">	
							<a href="www.info@arkosoft.it">
								<div class="bottone">
									<p>ISCRIVITI</p>
								</div>
							</a>
						</div>
					</div>
					<div class="box-footer-right">
						<p>CONTATTACI</p>
						<div class="email">
							<img src="images/email.png" alt="">
							<a href="info@arkosft.it">
								info@arkosoft.it
							</a>
						</div>
						<div class="info">
							<p>Tel: 0831-1815236</p>
							<p>Fax: 0831-1815236</p>
						</div>
						<div id="logo-azienda">
							<img src="images/arkosoft-logo.png" alt="ARKOSOFT S.N.C.">
						</div>
					</div>
				
				</div>
			</div>
		
		</div> <!-- cd-main-content -->
		
		<div id="cd-lateral-nav">
			<ul class="cd-navigation cd-single-item-wrapper">
				<li><a class="current" href="#0">Tour</a></li>
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Register</a></li>
				<li><a href="#0">Pricing</a></li>
				<li><a href="#0">Support</a></li>
			</ul> <!-- cd-single-item-wrapper -->
		</div> 
		
		<!-- Javascript per mobile (effetto menu laterale) -->
		<script src="js/main.js"></script> <!-- Risorsa jQuery -->
		
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
	
	</body>
</html>