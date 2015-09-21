<?				
				
				$nome=utf8_decode($nome);
				$cognome=utf8_decode($cognome);
				$citta=utf8_decode($citta);
				$provincia=utf8_decode($provincia);
				$telefono=utf8_decode($telefono);
				$email=utf8_decode($email);
				$richiesta=utf8_decode($richiesta);

				//ricezione dei parametri della mail
				$oggetto="Richiesta da Gestione Messaggi";
				$fullmsg="
					<html>
						<head>
							<title>Richiesta da Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Richiesta da Gestione Messaggi</b></h1>
								</center>
							</p>
							Nome: $nome; <br /> 
							Cognome: $cognome;<br />
							Città: $citta $provincia;<br />
							Telefono: $telefono;<br />
							E-mail: $email;<br />
							Richiesta: $richiesta;<br />
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