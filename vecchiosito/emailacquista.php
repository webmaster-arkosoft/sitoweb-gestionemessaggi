<?				

				$nome=utf8_decode($nome);
				$cognome=utf8_decode($cognome);
				$idmacchina=utf8_decode($idmacchina);
				$idsconto=utf8_decode($idsconto);
				$email=utf8_decode($email);
				$richiesta=utf8_decode($richiesta);

				//ricezione dei parametri della mail
				$oggetto="Licenza Gestione Messaggi";
				$fullmsg="
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
							CODICE SCONTO: $idsconto; <br /><br /> 
							Richiesta: $richiesta <br /><br /> 
							- <a href='http://www.gestionemessaggi.com/linkpagamento.php?email=$email&nome=$nome&cognome=$cognome'>Invia all'utente il pagamento da effettuare</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/linkinvio.php?email=$email&nome=$nome&cognome=$cognome'>Invia il modulo di registrazione</a><br /><br /> 
							- <a href='http://www.gestionemessaggi.com/controlloemail.php?email=$email'>Controlla l'email</a>
							<br /><br /> 
						</body>
					</html>
				";

				
				require("phpmailer/class.phpmailer.php");
				$mail = new PHPMailer();

				//Invio preventivo via email
				$mail->IsHTML(true);
				$mail->From = "info@gestionemessaggi.com";
				$mail->FromName = "Gestione Messaggi";
				$mail->AddAddress("info@arkosoft.it");
				$mail->Subject=$oggetto;
				$mail->Body=$fullmsg;
				$mail->Send();
?>				