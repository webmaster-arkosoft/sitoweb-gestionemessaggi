<?				

				//ricezione dei parametri della mail
				$oggetto="Registration for downloads Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Registration for downloads Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Registration for downloads Gestione Messaggi</b></h1>
								</center>
							</p>
							Hi <b>$nome $cognome</b>,<br />
							Thank you for having signed up to our Site<br />
							To download Gestione Messaggi <a href='http://www.gestionemessaggi.com/eng/statodownload.php?idutente=".$id."&codice=".$codice."'><b>clicca qui</b></a><br /><br />
							If you have trouble downloading please ask for assistance at the Forum:<br />
							<br />
							or call us at:<br />
							Phone: <b>0831.1815236</b> (The cost of the call depends on your operator)<br /><br />
							Best Regards<br />
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