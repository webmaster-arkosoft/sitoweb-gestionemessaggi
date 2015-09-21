<?
	session_start();

	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>GM - Modulo per l'acquisto del software di sms</title>
		<?php include "analitycs.php"; ?>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/acquista.css" media="screen" />
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
					<div class="logo"><a href="index.html" title="Gestione Messaggi software per SMS Marketing"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="acquista.html" class="subattivo" title="Permalink a Acquista licenza">Acquista Licenza</a>
								<a href="crediti.html" class="linksubmenu" title="Permalink a Crediti">Acquista Crediti</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="http://www.gestionemessaggi.com/index.html" class="linkmenu" title="Perch&egrave; GM ?">Perch&egrave; GM?</a>
						<a href="http://www.gestionemessaggi.com/scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica" class="linkmenu">Scarica</a> 
						<a href="http://www.gestionemessaggi.com/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida">Guida</a> 
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="acquista.html" title="Permalink a Acquista">Acquista</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="azienda.html" class="linkmenu" title="Permalink a Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header5">
				<div class="descmotto1">
					<h4>Acquista Licenza</h4>
					<div>
						Vi ringraziamo per l'interesse fin qui dimostrato per il nostro prodotto. Per procedere all'acquisto, baster&agrave; inserire <u>l'id macchina</u> generato da Gestione Messaggi in <b>Acquista Licenza</b>.<br /><br />					
						Riceverete quindi un'email con tutti i dettagli e i relativi costi per confermare l'acquisto.
					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadreacquistaaa">
				<div class="boxacquista">
					<div class="boxsinistra">
						<div class="titoloacquista1">Acquista licenza</div>
						<div class="modalita">
							E' possibile effettuare il pagamento tramite:<br />
							il circuito Paypal, il metodo pi&ugrave; sicuro per i vostri pagamenti online oppure mediante Bonifico bancario.<br />
							Per ulteriori informazioni sull'acquisto, rivolgetevi alla nostra <u>assistenza telefonica</u> al numero: 0831.1815236.
							<div class="campoobbligatorio3">Il costo della licenza acquistata &egrave; annuale.</div>
						</div>
						<div class="titolo1"><span class="spacee">Codice</span><span class="space1">Descrizione</span><span class="spacee">Q.ta</span><span class="spacee">Prezzo <label>(iva esclusa)</label></span></div>	
						<div class="titolo2"><span class="spacee">FK.2A</span><span class="space3a">Licenza d'uso di GM </span><span class="space3"> 1</span><span class="spacee">&euro; 99,00</span></div>			
						<div class="omaggio">1000 SMS <span class="smsgratuiti">Gratuiti</span></div>		
						<div class="titolo3"><span class="space2">IVA</span><span class="space0">&euro; 21,78</span></div>	
						<div class="titolo3"><span class="space0">Totale</span><span class="space0">&euro; 120,78 <label>(iva inclusa)</label></span></div>	
						<br /><hr />
						<?php if(strlen($messaggio)>0){?><div class="messaggio1" id="messaggio"><?php print $messaggio; ?></div><?php } ?>
						<div class="campoobbligatorio2">Campo obbligatori per l'acquisto(*)</div>
						<form name="acquista" id="acquista" method="POST" action="invioacquista.html#messaggio"  Onsubmit="javascript: return controlloacquista();">
							<div class="campoacquista"><div>Nome*</div></div>
							<div class="inputacquista"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>Cognome*</div></div>
							<div class="inputacquista"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

							<div class="campoacquista"><div>Email*</div></div>
							<div class="inputacquista"><input type="text" name="email" id="email" value="<?php print $email; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>Codice sconto</div><div style="font-size: 10px; color: #ff0000; margin-top: -13px;">(Se disponibile)</div></div>
							<div class="inputacquista"><input type="text" name="idsconto" id="idsconto" value="<?php print $idmacchina; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

							<div class="campoacquista"><div>ID MACCHINA*</div></div>
							<div class="inputacquista"><input type="text" name="idmacchina" id="idmacchina" value="<?php print $idmacchina; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/><a href="immagini/idmacchina.jpg" rel="lightbox"><img src="immagini/anteprimaid.jpg" class="anteprima"/></a></div>
							
							<div class="campoacquista"><div>Richiesta</div></div>
							<div class="textareaacquista">
								<textarea name="richiesta" id="richiesta" cols="45" rows="7"><?php print $richiesta; ?></textarea>
							</div>
							
							<div class="campoacquista"><div>Captcha</div></div>
							<div class="textareaacquista1">
								Inserisci il testo che vedi nell'immagine*:<br />
								<img src="captcha/captcha.php" id="captcha" />
							</div>
							
							<div class="campoacquista"><div>&nbsp;</div></div>
							<div class="inputacquista">
								<input type="text" name="captcha" id="captcha-form" autocomplete="off" /><br />
								<a href="#captcha" onclick="document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();document.getElementById('captcha-form').focus();" id="change-image">Non riesci a Leggerlo? Aggiorna</a>
							</div>
							
							<input type="hidden" name="formacquista" id="formacquista" value="1" />
							<div class="bottonescarica1"><input type="image" id="cmd" name="cmd" src="immagini/richiediseriale.jpg" /></div>
						</form>
					</div>
					<div class="boxdestra">&nbsp;</div>
				</div>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>