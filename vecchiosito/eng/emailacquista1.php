<?				

				//ricezione dei parametri della mail
				$oggetto="Lincenza Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Licenza Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Licenza Gestione Messaggi</b></h1>
								</center>
							</p>
							<b>$nome $cognome</b>,<br />
							ha acquistato una licenza di Gestione Messaggi.<br /><br />
							
							E-mail: $email; <br />
							ID-macchina: $idmacchina; <br /><br /> 
							Richiesta: $richiesta <br /><br /> 
							- <a href='http://www.gestionemessaggi.com/linkpagamento.php?email=$email&nome=$nome&cognome=$cognome'>Invia all'utente il pagamento da effettuare</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/linkinvio.php?email=$email&nome=$nome&cognome=$cognome'>Invia il modulo di registrazione</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/controlloemail.php?email=$email'>Controlla l'email</a>
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