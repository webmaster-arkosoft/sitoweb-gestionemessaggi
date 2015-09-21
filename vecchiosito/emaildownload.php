<?php
	$oggetto1="Download Gestione Messaggi";
	$mail1="
		<html>
			<head>
				<title>Download di Gestione Messaggi</title>
			</head>
			<body style=\"font-family:Verdana,Tahoma,sans-serif\">
				<p>
					<center>
						<h1>Download di Gestione Messaggi</b></h1>
					</center>
				</p>
				<b>$nome $cognome</b> ha effettuato l'iscrizione e il download di GM<br />
			</body>
		</html>
	";
	//header dell'e-mail
	$header="From: info@gestionemessaggi.com\r\n";
	$header.= "MIME-Version: 1.0\n";
	$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
	$header.="Content-Transfer-Encoding: 7bit\n";
	mail("info@arkosoft.it",$oggetto1,$mail1,$header);
?>