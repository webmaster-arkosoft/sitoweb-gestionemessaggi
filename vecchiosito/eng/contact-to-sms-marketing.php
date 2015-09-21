<?php $inviato=false; ?>
<html>
	<head>
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
		<title>GM - Contact us to make sms marketing</title>
		<meta name="abstarct" content="contact us for the solution to make sms marketing"/>
		<meta name="title" content="contact us for the solution to make sms marketing" />
		<meta name="keywords" content="Contact sms marketing"/>
		<meta name="description" content="contact us for the solution to make sms marketing" />
		<link rel="stylesheet" type="text/css" href="css/contattaci.css" media="screen" />
		<script src="js/contattaci.js" type="text/javascript"></script>
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Permalink to Gestione Messaggi software for SMS Marketing"><img  alt="Gestione Messaggi software for SMS Marketing" src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="index.html" class="linksubmenu" title="Permalink a Gestione messaggi software for sms marketing">Description</a>
								<a href="gallery-sms-marketing.html" class="linksubmenu" title="Permalink to Product Gallery for sms marketing">Product Gallery</a>  
								<a href="ourcustomers-to-sms-marketing.html" class="linksubmenu" title="Permalink to our customers sms marketing">Our Customers</a>  
								<a href="contact-to-sms-marketing.html" class="subattivo" title="Permalink to Contact Us to make sms marketing">Contact</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="index.html" title="Why GM ?">Why GM?</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
						<a href="download-software-for-the-sms-marketing.html" title="Permalink to download the software for sms marketing" class="linkmenu">Download</a>
						<a href="../eng/sms-marketing/index.html" class="linkmenu" title="Permalink Guide to SMS marketing software">Help</a> 
						<a href="buy.html" class="linkmenu" title="Buy">Buy</a>
						<a href="company.html" class="linkmenu" title="Company">Company</a>
					</div>
				</div>
			</div>
			<div class="header6">
				<div class="descmotto1">
					<h4>Contact us if u want to do sms marketing</h4>
					<div>
						For all info and requests, dont you hesitate to contact us, compyling the module.<br /><br />
						Or call us on: <b>0831.1815236</b>
					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div <?php if(strlen($messaggio)>0){ print "class='boxcontattaci'";}else{ print "class='boxcontattaci1'";} ?>>
				<div class="download" id="download">
					<div <?php if(strlen($messaggio)>0){ print "class='totalecont'";}else{ print "class='totalecont1'";} ?>>
						<div class="boxsinistra">
							<div class="titolocontattaci">Contact us</div>
							<div class="messaggio" id="messaggio"><?php print $messaggio; ?></div>
							<div class="campoobbligatorio">Required field(*)</div>
						</div>
						<div class="boxdestra">&nbsp;</div>	
					</div>	
					<form action="inviocontattaci.html" name="contattaci" id="contattaci" method="post" Onsubmit="javascript: return controllocontattaci();">
						<div class="campodownload"><div>Name*</div></div>
						<div class="inputdownload"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

						<div class="campodownload"><div>Surname*</div></div>
						<div class="inputdownload"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>City*</div></div>
						<div class="inputdownload"><input type="text" name="citta" id="citta" value="<?php print $citta; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

						<div class="campodownload"><div>State*</div></div>
						<div class="inputdownload"><input type="text" name="provincia" id="provincia" value="<?php print $provincia; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>Telephone</div></div>
						<div class="inputdownload"><input type="text" name="telefono" id="telefono" value="<?php print $telefono; ?>" /></div>

						<div class="campodownload"><div>E-mail*</div></div>
						<div class="inputdownload"><input type="text" name="email" id="email" value="<?php print $email; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>Request*</div></div>
						<div class="textareadownload">
							<textarea name="richiesta" id="richiesta" cols="47" rows="7"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"><?php print $richiesta; ?></textarea>
						</div>
						
						<input type="hidden" name="formcontattaci" id="formcontattaci" value="1" />
						<div class="bottonescarica"><input type="image" id="cmd" name="cmd" src="immagini/invia.jpg" /></div>
				</form>
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
	</body>
</html>		