<?				

				//ricezione dei parametri della mail
				$oggetto="Iscrizione al Download di Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Iscrizione al Download di Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Iscrizione al Download di Gestione Messaggi</b></h1>
								</center>
							</p>
							Salve <b>$nome $cognome</b>,<br />
							La ringraziamo per aver effettuato l'iscrizione al nostro Sito.<br />
							Per scaricare Gestione Messaggi <a href='http://www.gestionemessaggi.com/statodownload.php?idutente=".$id."&codice=".$codice."'><b>clicca qui</b></a><br /><br />
							Se hai problemi nello scaricamento potete richiedere assistenza al Forum:<br />
							<br />
							oppure contattarci telefonicamente al:<br />
							Telefono: <b>0831.1815236</b> (Il costo della chiamata dipende dal vostro operatore)<br /><br />
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