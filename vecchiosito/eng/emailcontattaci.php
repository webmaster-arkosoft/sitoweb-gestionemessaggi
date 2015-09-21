<?				

				//ricezione dei parametri della mail
				$oggetto="Richiesta da Gestione Messaggi";
				$mail="
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
				//header dell'e-mail
				$header="From: $email\r\n";
				$header.= "MIME-Version: 1.0\n";
				$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
				$header.="Content-Transfer-Encoding: 7bit\n";
				//invio dell'email al venditore e acquirente
				mail('info@arkosoft.it',$oggetto,$mail,$header);
?>				