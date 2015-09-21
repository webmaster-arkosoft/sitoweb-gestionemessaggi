<?
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
?>
<html>
	<head>
		<title>Gestione Messaggi - 404 Pagina non trovata</title>
		<?php include "analitycs.php"; ?> 
		<meta name="abstarct" content="Gestione Messaggi - 404 Pagina non trovata."/>
		<meta name="title" content="Gestione Messaggi - 404 Pagina non trovata." />
		<meta name="keywords" content="Gestione Messaggi - 404 Pagina non trovata."/>
		<meta name="description" content="Gestione Messaggi - 404 Pagina non trovata. " />
		<link rel="stylesheet" type="text/css" href="css/error404.css" media="screen" />
		 
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi software per sms marketing"><img src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Perch&egrave; GM ?">Perch&egrave; GM?</a>
						<a href="scarica-il-software-per-sms-marketing.html" class="linkmenu" title="Permalink a Scarica il software per sms marketing">Scarica</a>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida per software di Sms marketing">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header9">
				<div class="descmotto">
					<h4>Pagina Non Trovata! </h4>
					
					<p>La pagina da te richiesta su Gestione Messaggi non pu&ograve; essere trovata.</p>
				</div>	
			</div>
			<div class="sotto1">&nbsp;</div>
			<div class="boxmadre3">
				<div class="errore404">
				<span class="titolo404">HTTP Status 404 - Pagina non Trovata</span><br /><br />
				La pagina da te richiesta su Gestione Messaggi non pu&ograve; essere trovata, probabilmente hai seguito un link corrotto. <br /><br />
				Possibili Cause:<br />
				<b><a href="index.html" title="Pagina Inesistente">» Pagina Inesistente</a></b><br />
				<b><a href="index.html" title="Pagina Spostata">» Pagina Spostata</a></b>
				</div>
			</div>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>