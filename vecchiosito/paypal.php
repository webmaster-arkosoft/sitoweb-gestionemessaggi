<?php
	$read=base64_decode($_GET['id']);
	$prezzo=str_replace(",",".",$read);
?>
<html>
	<head>
		<title>Gestione Messaggi invio pagamento</title>
		<?php include "analitycs.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<script language="javascript">
		setTimeout( "document.forms['paypal'].submit()", 500 );
	</script>
	
	<body class="nessuno" > 
		<p>&nbsp;</p><p>&nbsp;</p>
		<center><img src="immagini/attendere.gif">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="paypal" id="paypal" >
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="business" value="info@arkosoft.it">
			<input type="hidden" name="item_name_1" value="Licenza d'uso di Gestione Messaggi">
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="amount_1" value="<? print $prezzo; ?>">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="return" value="http://www.webbay.it/pagamento_effettuato.html">
			<input type="image" src="immagini/paypal-credit.gif" alt="Effettua i tuoi pagamenti con PayPal. &egrave; un sistema rapido, gratuito e sicuro.">
		</form>
		</center>
	</body>
</html>	