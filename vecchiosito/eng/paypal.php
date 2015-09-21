<?php
	$read=base64_decode($_GET['id']);
	$prezzo=str_replace(",",".",$read);
?>
<html>
	<head>
		<title>Gestione Messaggi invio pagamento</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2503096-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
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