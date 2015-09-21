<?php	

	if(isset($_GET['email']) and strlen($_GET['email'])>0){

	//settaggio variabili
	$email=$_GET['email'];
	$nome=$_GET['nome'];
	$cognome=$_GET['cognome'];	
	
		//ricezione dei parametri della mail
		$oggetto="Registrati a Gestione Messaggi";
		$mail="
			<html>
				<head>
					<title>Registrati a Gestione Messaggi</title>
				</head>
				<body style=\"font-family:Verdana,Tahoma,sans-serif\">
					<p>
						<center>
							<h1>Registrati a Gestione Messaggi</b></h1>
						</center>
					</p>
					Salve <b>$nome $cognome</b>,<br />
					Abbiamo ricevuto la Vostra richiesta.<br /><br />
					
					La preghiamo di iscriversi al Nostro sito:
					<a href=\"http://www.gestionemessaggi.com/registrazioneutente.php\">Registrati ora</a>
					<br /><br /> 
				</body>
			</html>
		";
		//header dell'e-mail
		$header="From: info@gestionemessaggi.com\r\n";
		$header.= "MIME-Version: 1.0\n";
		$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
		$header.="Content-Transfer-Encoding: 7bit\n";
		//invio dell'email al venditore e acquirente
		mail($email,$oggetto,$mail,$header);
		print "Email Inviata correttamente!";
	}
?>				