<?				
				$prezzo=$_POST['prezzo']+(($_POST['prezzo']*22)/100);
				$prezzocript=base64_encode($prezzo);
				
				$nome=utf8_decode($nome);
				$cognome=utf8_decode($cognome);
				$ragionesociale=utf8_decode($ragionesociale);
				$indirizzo=utf8_decode($indirizzo);
				$citta=utf8_decode($citta);
				$cap=utf8_decode($cap);
				$codfiscale=utf8_decode($codfiscale);
				$provincia=utf8_decode($provincia);
				$partitaiva=utf8_decode($partitaiva);
				$telefono=utf8_decode($telefono);
				$cellulare=utf8_decode($cellulare);
				$email=utf8_decode($email);
				
				//ricezione dei parametri della mail
				$oggetto1="Vendita crediti per Gestione Messaggi";
				$oggetto="Acquisto crediti per Gestione Messaggi";
				$fullmsg1="
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
							<b>$nome $cognome</b> sta acquistando <b>$crediti</b> crediti per Gestione Messaggi pari a <b>$prezzo</b> euro ivati.<br /><br />
							<table style=\"border: 1px solid #ccc; margin-bottom: 20px;\">
							<tr>
								<td>Ragione Sociale: </td>
								<td>$ragionesociale $tipo</td>
							</tr>
							<tr>
								<td>Nome/Cognome: </td>
								<td>$nome $cognome</td>
							</tr>
							<tr>
								<td>Indirizzo: </td>
								<td>$indirizzo</td>
							</tr>
							<tr>
								<td>Residenza: </td>
								<td>$cap $citta ($prov)</td>
							</tr>
							<tr>
								<td>Cod. Fiscale: </td>
								<td>$codfiscale</td>
							</tr>
							<tr>
								<td>P.iva: </td>
								<td>$partitaiva</td>
							</tr>
							<tr>
								<td>Telefono: </td>
								<td>$telefono</td>
							</tr>
							<tr>
								<td>Cellulare: </td>
								<td>$cellulare</td>
							</tr>							
							<tr>
								<td>Email: </td>
								<td>$email</td>
							</tr>
							</table>
						</body>
					</html>
				";
				$fullmsg="
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
							Per qualsiasi informazione o richiesta contattaci telefonicamente al:<br />
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
				
				require("phpmailer/class.phpmailer.php");
				
				//VENDITORE
				$mail = new PHPMailer();
				//Invio preventivo via email
				$mail->IsHTML(true);
				$mail->From = "info@gestionemessaggi.com";
				$mail->FromName = "Gestione Messaggi";
				$mail->AddAddress("info@arkosoft.it");
				$mail->Subject=$oggetto1;
				$mail->Body=$fullmsg1;
				$mail->Send();
				
				//CLIENT
				$mail1 = new PHPMailer();
				//Invio preventivo via email
				$mail1->IsHTML(true);
				$mail1->From = "info@gestionemessaggi.com";
				$mail1->FromName = "Gestione Messaggi";
				$mail1->AddAddress($email);
				$mail1->Subject=$oggetto;
				$mail1->Body=$fullmsg;
				$mail1->Send();
?>				