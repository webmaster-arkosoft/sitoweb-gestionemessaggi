<html>
	<head>
		<title>GM - Module for the purchase of software sms marketing</title>
		<link rel="stylesheet" type="text/css" href="css/acquista.css" media="screen" />
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
					<div class="logo"><a href="index.html" title="Gestione Messaggi software for SMS Marketing"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="buy.html" class="subattivo" title="Buy License">Buy License</a>
								<a href="credits.html" class="linksubmenu" title="Credits">Buy credits</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Why GM ?">Why GM?</a>
						<a href="download-software-for-the-sms-marketing.html" title="download the software for sms marketing" class="linkmenu">Download</a> 
						<a href="../eng/sms-marketing/index.html" class="linkmenu" title="Permalink to Guide to SMS marketing software">Help</a> 
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="buy.html" title="Buy">Buy</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="company.html" class="linkmenu" title="Company">Company</a>
					</div>
				</div>
			</div>
			<div class="header5">
				<div class="descmotto1">
					<h4>Buy License</h4>
					<div>
						We thank you for the interest you shown for our product. In order to buy it, you will only have to insert the  <u>Machine ID</u> that Gestione Messaggi generated in the <b>Buy License</b> Window.<br /><br />					
						You will then receive  an email, containing all details and the related costs, in order to confirm the buying. 
					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadreacquistaaa">
				<div class="boxacquista">
					<div class="boxsinistra">
						<div class="titoloacquista1">Buy License</div>
						<div class="modalita">
							The accepted payment methods are:<br />
							Paypal, the most sure method for your online payments or Bank Transfert.<br />
							For more buying infos, call our <u>phone assistance</u> at this number: +39 0831.1815236.
							<div class="campoobbligatorio3">The buyed license does not need of annual renewals.</div>
						</div>
						<div class="titolo1"><span class="spacee">Code</span><span class="space1">Description</span><span class="spacee">Q.ty</span><span class="spacee">Price <label>(no vat)</label></span></div>	
						<div class="titolo2"><span class="spacee">FK.2A</span><span class="space3a">User License GM </span><span class="space3"> 1</span><span class="spaceex">€ 300,00</span></div>	
						<div class="titolo4"><div>Only for the first 100</div>€ 30,00</div>
						<div class="titolo5"><div>with 100 free SMS</div></div>	
						<div class="titolo3"><span class="space2">VAT</span><span class="spacee">€ 6,00</span></div>	
						<div class="titolo3"><span class="space0">Total</span><span class="space0">€ 36,00 <label>(vat included)</label></span></div>	
						<br /><hr />
						<?php if(strlen($messaggio)>0){?><div class="messaggio1" id="messaggio"><?php print $messaggio; ?></div><?php } ?>
						<div class="campoobbligatorio2">Required fields for buy(*)</div>
						<form name="acquista" id="acquista" method="POST" action="invioacquista.html#messaggio"  Onsubmit="javascript: return controlloacquista();">
							<div class="campoacquista"><div>Name*</div></div>
							<div class="inputacquista"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>Surname*</div></div>
							<div class="inputacquista"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

							<div class="campoacquista"><div>Email*</div></div>
							<div class="inputacquista"><input type="text" name="email" id="email" value="<?php print $email; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
				
							<div class="campoacquista"><div>Discount Code</div><div style="font-size: 10px; color: #ff0000; margin-top: -13px;">(if available)</div></div>
							<div class="inputacquista"><input type="text" name="idsconto" id="idsconto" value="<?php print $idmacchina; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

							<div class="campoacquista"><div>MACHINE ID*</div></div>
							<div class="inputacquista"><input type="text" name="idmacchina" id="idmacchina" value="<?php print $idmacchina; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/><a href="immagini/idmacchina.jpg" rel="lightbox"><img src="immagini/anteprimaid.jpg" class="anteprima"/></a></div>
							
							<div class="campoacquista"><div>Request</div></div>
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
					In Software and Web your ideas come true<br />
					OFFICE Via Castello 54, 72026 San Pancrazio Salentino<br />
					Phone: 0831/1815236<br />
					Fax: 0831/1815238<br />
					<a href="http://www.arkosoft.it" alt="Software house puglia" title="Software house puglia">http://www.arkosoft.it</a><br />
					P.IVA <b>02166630745</b>
				</div>
			</div> 
		</div>	
	</body>
</html>