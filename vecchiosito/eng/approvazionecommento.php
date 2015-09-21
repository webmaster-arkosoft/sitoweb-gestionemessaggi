<?				

				//ricezione dei parametri della mail
				$oggetto="Un Commento su Gestione Messaggi è in attesa di essere approvato!";
				$mail="
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
							<b>$nome</b> ha lasciato il seguente commento:<br /><br />
							$richiesta
							<br /><br />
							Per approvare il commento clicca su	<a href='http://www.gestionemessaggi.com/eng/approva.php?id=".$id."'><b>Approva</b></a><br /><br />
							Altrimenti elimina il commento <a href='http://www.gestionemessaggi.com/eng/eliminacommento.php?id=".$id."''><b>Elimina</b></a><br /><br />
						</body>
					</html>
				";
				//header dell'e-mail
				$header="From: info@gestionemessaggi.com\r\n";
				$header.= "MIME-Version: 1.0\n";
				$header.= "Content-type: text/html; charset=\"iso-8859-1\"\n";
				$header.="Content-Transfer-Encoding: 7bit\n";
				//invio dell'email al venditore e acquirente
				mail("info@arkosoft.it",$oggetto,$mail,$header);
?>				