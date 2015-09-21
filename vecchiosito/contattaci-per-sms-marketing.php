<?php $inviato=false; ?>
<html>
	<head>
		<title>GM - contattaci per effettuare</title>
		<?php include "analitycs.php"; ?>
		<meta name="abstarct" content="contattaci per avere la soluzione per effettuare"/>
		<meta name="title" content="contattaci per avere la soluzione per effettuare " />
		<meta name="keywords" content="contatto"/>
		<meta name="description" content="contattaci per avere la soluzione per effettuare " />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/contattaci.css" media="screen" />
		<script src="js/contattaci.js" type="text/javascript"></script>
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Permalink a Gestione Messaggi"><img  alt="Gestione Messaggi software per sms" src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="index.html" class="linksubmenu" title="Permalink a Gestione messaggi">Descrizione</a>
								<a href="galleria-sms-marketing.html" class="linksubmenu" title="Permalink a Galleria del Prodotto">Galleria del prodotto</a> 
								<a href="inostriclienti-di-sms-marketing.html" class="linksubmenu" title="Permalink a I nostri clienti">I Nostri Clienti</a> 
								<a href="contattaci-per-sms-marketing.html" class="subattivo" title="Permalink a Contattaci">Contattaci</a> 
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
						<a href="scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica Gestione Messaggi" class="linkmenu">Scarica</a>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida Gestione Messaggi">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header6">
				<div class="descmotto1">
					<h4>Problemi durante l'installazione ?</h4>
					<div>
						Per qualsiasi informazione o richiesta  non esiti a contattarci compilando il modulo sottostante.<br /><br />
						Oppure chiamaci al numero: <b>0831.1815236</b>
					</div>
				</div>
			</div>
			<div class="sotto1">&nbsp;</div>
			<div <?php if(strlen($messaggio)>0){ print "class='boxcontattaci'";}else{ print "class='boxcontattaci1'";} ?>>
				<div class="download" id="download">
					<div <?php if(strlen($messaggio)>0){ print "class='totalecont'";}else{ print "class='totalecont1'";} ?>>
						<div class="boxsinistra">
							<div class="titolocontattaci">Contattaci</div>
							<div class="messaggio" id="messaggio"><?php print $messaggio; ?></div>
							<div class="campoobbligatorio">Campo obbligatorio(*)</div>
						</div>
						<div class="boxdestra">&nbsp;</div>	
					</div>	
					<form action="inviocontattaci.html" name="contattaci" id="contattaci" method="post" Onsubmit="javascript: return controllocontattaci();">
						<div class="campodownload"><div>Nome*</div></div>
						<div class="inputdownload"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

						<div class="campodownload"><div>Cognome*</div></div>
						<div class="inputdownload"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>Citt&agrave;*</div></div>
						<div class="inputdownload"><input type="text" name="citta" id="citta" value="<?php print $citta; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

						<div class="campodownload"><div>Provincia*</div></div>
						<div class="inputdownload"><input type="text" name="provincia" id="provincia" value="<?php print $provincia; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>Telefono</div></div>
						<div class="inputdownload"><input type="text" name="telefono" id="telefono" value="<?php print $telefono; ?>" /></div>

						<div class="campodownload"><div>E-mail*</div></div>
						<div class="inputdownload"><input type="text" name="email" id="email" value="<?php print $email; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
						
						<div class="campodownload"><div>Richiesta*</div></div>
						<div class="textareadownload">
							<textarea name="richiesta" id="richiesta" cols="47" rows="7"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"><?php print $richiesta; ?></textarea>
						</div>
						
						<input type="hidden" name="formcontattaci" id="formcontattaci" value="1" />
						<div class="bottonescarica"><input type="image" id="cmd" name="cmd" src="immagini/invia.jpg" /></div>
				</form>
			</div>
		</div>	
<?php 		include "footer.php"; ?>
	</body>
</html>		