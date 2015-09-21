<?				

				//ricezione dei parametri della mail
				$oggetto="Registrazione a Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Registrazione a Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Registrazione a Gestione Messaggi</b></h1>
								</center>
							</p>
							Salve <b>$nome $cognome</b>,<br />
							Grazie per essersi registrato al nostro sito per confermare la sua registrazione clicca sul seguente link.<br /><br />
							- <a href='http://www.gestionemessaggi.com/attivautente.php?idutente=".$id."&codice=".$codice."''>Conferma Registrazione</a>
							<br /><br />
							Cordiali Saluti<br />
							Arkosoft<br /><br />
							*******************************************<br />
							ARKOSOFT S.N.C. <br />
							Via Castello, 54 San Pancrazio Sal.no <br />
							72026, Brindisi Italia <br /><br />
							 
							Tel: 08311815236 <br />
							Fax: 08311815238 <br />
							P.IVA 02166630745 <br />
							********************************************<br />
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
?>				