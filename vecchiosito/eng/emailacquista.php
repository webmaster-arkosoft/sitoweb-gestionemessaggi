<?				

				//ricezione dei parametri della mail
				$oggetto="License Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Licenza di Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Licenza di Gestione Messaggi</b></h1>
								</center>
							</p>
							<b>$nome $cognome</b>,<br />
							ha acquistato una licenza di Gestione Messaggi.<br /><br />
							
							E-mail: $email; <br />
							ID-macchina: $idmacchina; <br /><br /> 
							DISCOUNT CODE: $idsconto; <br /><br /> 
							Richiesta: $richiesta <br /><br /> 
							- <a href='http://www.gestionemessaggi.com/eng/linkpagamento.php?email=$email&nome=$nome&cognome=$cognome'>User sends the payment to be made</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/eng/linkinvio.php?email=$email&nome=$nome&cognome=$cognome'>Send registration form</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/eng/controlloemail.php?email=$email'>Check your email</a>
							<br /><br /> 
						</body>
					</html>
				";
				//header dell'e-mail
				$header="From: $email\r\n";
				$header.= "MIME-Version: 1.0\n";
				$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
				$header.="Content-Transfer-Encoding: 7bit\n";
				//invio dell'email al venditore e acquirente
				mail('info@arkosoft.it',$oggetto,$mail,$header);
?>				