<?				
				$nome=utf8_decode($nome);
				$email=utf8_decode($email);
				$sito=utf8_decode($sito);
				$richiesta=utf8_decode($richiesta);
				
				//ricezione dei parametri della mail
				$oggetto="Un Commento su Gestione Messaggi è in attesa di essere approvato!";
				$fullmsg="
					<html>
						<head>
							<title>Un Commento su Gestione Messaggi è in attesa di essere approvato!</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Un Commento su Gestione Messaggi è in attesa di essere approvato!</b></h1>
								</center>
							</p>
							<b>$nome</b> ha lasciato un commento:<br /><br />
							<b>Nome:</b> $nome;<br />
							<b>E-mail:</b> $email;<br />
							<b>Sito:</b> $sito;<br />
							<b>Richiesta:</b><br />
							$richiesta
							<br /><br />
							Per approvare il commento clicca su	<a href='http://www.gestionemessaggi.com/approva.php?id=".$id."'><b>Approva</b></a><br /><br />
							Altrimenti elimina il commento <a href='http://www.gestionemessaggi.com/eliminacommento.php?id=".$id."''><b>Elimina</b></a><br /><br />
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