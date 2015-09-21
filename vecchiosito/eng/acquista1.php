<html>
	<head>
		<title>Gestione Messaggi Acquista</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/acquista.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2503096-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi"><img src="immagini/logo.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="acquista.html" class="subattivo" title="Ultima versione">Acquista Licenza</a>
								<a href="crediti.html" class="linksubmenu" title="Crediti">Acquista Crediti</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Perche GM">Perchè GM?</a>
						<a href="download.html" class="linkmenu" title="Download">Scarica</a> 
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida per software di Sms marketing">Guida</a> 
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="acquista.html" title="Acquista">Acquista</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header5">
				<div class="descmotto1">
					<h4>Acquista Licenza</h4>
					<div>
						Vi ringraziamo per l'interesse fin qui dimostrato per il nostro prodotto. Per procedere all'acquisto, basterà inserire <u>l'id macchina</u> generato da Gestione Messaggi in <b>Acquista Licenza</b>.<br /><br />					
						Riceverete quindi un'email con tutti i dettagli e i relativi costi per confermare l'acquisto.
					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadreacquista">
				<div class="boxacquista">
					<div class="boxsinistra">
						<div class="titoloacquista1">Acquista lincenza</div>
						<div class="modalita">
							Le modalità di pagamento accettate sono:
							Paypal, il circuito di pagamenti online più sicuro, ideato dal noto sito di aste online, eBay oppure mediante Bonifico bancario.
							Per ulteriori chiarimenti inerenti l'acquisto del prodotto, rivolgetevi alla nostra <u>assistenza telefonica</u> al numero: 0831.1815236.
						</div>
						<?php if(strlen($messaggio)>0){?><div class="messaggio1" id="messaggio"><?php print $messaggio; ?></div><?php } ?>
						<div class="campoobbligatorio2">Campo obbligatorio(*)</div>
						<form name="acquista" id="acquista" method="POST" action="invioacquista.html#messaggio"  Onsubmit="javascript: return controlloacquista();">
							<div class="campoacquista"><div>Nome*</div></div>
							<div class="inputacquista"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>Cognome*</div></div>
							<div class="inputacquista"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

							<div class="campoacquista"><div>Email*</div></div>
							<div class="inputacquista"><input type="text" name="email" id="email" value="<?php print $email; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>ID MACCHINA*</div></div>
							<div class="inputacquista"><input type="text" name="idmacchina" id="idmacchina" value="<?php print $idmacchina; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/><a href="immagini/idmacchina.jpg" rel="lightbox"><img src="immagini/anteprimaid.jpg" class="anteprima"/></a></div>
							
							<div class="campoacquista"><div>Richiesta</div></div>
							<div class="textareaacquista">
								<textarea name="richiesta" id="richiesta" cols="45" rows="7"><?php print $richiesta; ?></textarea>
							</div>
							<input type="hidden" name="formacquista" id="formacquista" value="1" />
							<div class="bottonescarica1"><input type="image" id="cmd" name="cmd" src="immagini/richiediseriale.jpg" /></div>
						</form>
					</div>
					<div class="boxdestra">&nbsp;</div>
				</div>
			</div>
			<div class="copyright">
				<hr />
				<div class="logocopyright">
					<img src="immagini/logocopyright.gif" alt="Software house puglia" title="Software house puglia"><span class="arkocopyright">Copyright &copy; 2010 <a href="http://www.arkosoft.it" alt="Software house puglia" title="Software house puglia">Arkosoft</a>. All rights reserved.</span>
				</div>
				<div class="piva">
					<b>ARKOSOFT - Software House</b><br />
					Nel Software e nel Web le tue Idee che diventano Realtà<br />
					SEDE Via Castello 54, 72026 San Pancrazio Salentino<br />
					Telefono: 0831/1815236<br />
					Fax: 0831/1815238<br />
					<a href="http://www.arkosoft.it" alt="Software house puglia" title="Software house puglia">http://www.arkosoft.it</a><br />
					P.IVA <b>02166630745</b>
				</div>
			</div> 
		</div>	
	</body>
</html>