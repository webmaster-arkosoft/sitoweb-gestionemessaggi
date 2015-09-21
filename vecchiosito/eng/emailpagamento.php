<?				
				$prezzocript=base64_encode($prezzo);
				//ricezione dei parametri della mail
				$oggetto="Instructions to purchase a license to use Gestione Messaggi";
				$mail="
					<html>
						<head>
							<title>Instructions to purchase a license to use Gestione Messaggi</title>
						</head>
						<body style=\"font-family:Verdana,Tahoma,sans-serif\">
							<p>
								<center>
									<h1>Licenze Gestione Messaggi</b></h1>
								</center>
							</p>
							hi <b>$nome $cognome</b>,<br />
							Thank you for your purchase of Gestione Messaggi.<br />
							To complete the operation must make a charge Paypal <br /><br /> 
							<a href=\"http://www.gestionemessaggi.com/eng/paypal.php?id=$prezzocript\">Pay with Paypal</a><br /><br /> 
							or through a bank amounting to <b>$prezzo</b> Euro (vat included).<br /><br />
							To pay by bank transfer the coordinates are: <br />
							Payable to: <b>ARKOSOFT DI BASILE STEFANO & C. S.N.C.</b><br />
							IBAN: IT79 D052 6279 260C C032 6042 007 <br /><br />
							Payment is received we will provide you with the serial ID on machinery which has given us and the invoice.<br /><br />
							For any questions or concerns you may request assistance at the Forum:<br /><br />
							<a href=\"http://www.arkosoft.it/forum/gestione-messaggi-f19.html\">http://www.arkosoft.it/forum/gestione-messaggi-f19.html</a>
							<br /><br />
							or call us at:<br />
							Phone: <b>0831.1815236</b><br /><br />
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
				//invio dell'email all'acquirente
				mail($email,$oggetto,$mail,$header);
?>				