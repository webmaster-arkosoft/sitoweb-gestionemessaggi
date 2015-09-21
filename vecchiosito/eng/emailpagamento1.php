<?				
				$prezzo=$_POST['prezzo']+(($_POST['prezzo']*20)/100);
				$prezzocript=base64_encode($prezzo);
				//ricezione dei parametri della mail
				$oggetto="Acquisto crediti per Gestione Messaggi";
				$oggetto1="Acquisto crediti per Gestione Messaggi";
				$mail1="
					<html>
						<head>
							<title>Acquisto crediti per Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Acquisto crediti per Gestione Messaggi</b></h1>
								</center>
							</p>
							<b>$nome $cognome</b> sta acquistando i crediti per Gestione Messaggi.<br />
						</body>
					</html>
				";
				$mail="
					<html>
						<head>
							<title>Istruzioni per acquistare la licenza d'uso di Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Acquisto crediti per Gestione Messaggi</b></h1>
								</center>
							</p>
							Salve <b>$nome $cognome</b>,<br />
							La ringraziamo per aver acquistato i Crediti per Gestione Messaggi.<br />
							Per completare l'operazione deve effettuare una ricarica Paypal <br /><br /> 
							<a href=\"http://www.gestionemessaggi.com/paypal.php?id=$prezzocript\">Paga con Paypal</a><br /><br /> 
							oppure mediante	Bonifico Bancario pari a <b>$prezzo</b> Euro (iva inclusa).<br /><br />
							Per pagare mediante Bonifico Bancario le cordinate sono: <br />
							Intestato a: <b>ARKOSOFT DI BASILE STEFANO & C. S.N.C.</b><br />
							IBAN: IT79 D052 6279 260C C032 6042 007 <br /><br />
							Ricevuto il pagamento provvederemo a fornirLe la relativa fattura.<br /><br />
							Per qualsiasi informazione o richiesta potete richiedere assistenza al Forum:<br /><br />
							<a href=\"http://www.arkosoft.it/forum/gestione-messaggi-f19.html\">http://www.arkosoft.it/forum/gestione-messaggi-f19.html</a>
							<br /><br />
							oppure contattarci telefonicamente al:<br />
							Telefono: <b>0831.1815236</b><br /><br />
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
				//invio dell'email all'acquirente
				mail($email,$oggetto,$mail,$header);
				mail("info@arkosoft.it",$oggetto1,$mail1,$header);
?>				