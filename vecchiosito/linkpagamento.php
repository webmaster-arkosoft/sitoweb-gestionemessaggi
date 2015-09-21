<?php
	// include config
	include "config.php";
	//connessione al database
	$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione.");
	//selezione del database
	mysql_select_db($database) or die ("Non riesco a selezionare il database");

?>	
<html>
	<head>
		<title>Gestione Messaggi invio pagamento</title>
		<?php include "analitycs.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body class="nessuno">
	<div class="boxregistro">
		<div class="titolocontrollo">Invio Pagamento</div>
		<form name="acquista" id="acquista" method="POST" action="#">
			<div class="campocontrollo"><div>Nome*</div></div>
			<div class="inputcontrollo"><input type="text" name="nome" id="nome" value="<?php print $_GET['nome']; ?>"/></div>

			<div class="campocontrollo"><div>Cognome*</div></div>
			<div class="inputcontrollo"><input type="text" name="cognome" id="cognome" value="<?php print $_GET['cognome']; ?>"/></div>

			<div class="campocontrollo"><div>Email*</div></div>
			<div class="inputcontrollo"><input type="text" name="email" id="email" value="<?php print $_GET['email']; ?>"/></div>
		
			<div class="campocontrollo"><div>Prezzo*</div></div>
			<div class="inputcontrollo"><input type="text" name="prezzo" id="prezzo" value="" /></div>
			<input type="hidden" name="registrazione" id="registrazione" value="1" />
			<div class="bottonescaricareg"><input type="image" id="cmd" name="cmd" src="immagini/invia.jpg" /></div>
		</form>
	</div>	
	
<?php

	if(isset($_POST['registrazione']) and strlen($_POST['registrazione'])>0){
		$email=$_POST['email'];
		$nome=$_POST['nome'];
		$cognome=$_POST['cognome'];
		$prezzo=$_POST['prezzo'];
		
		//cerco l'utente
		$querycontr=mysql_query("select * from download where email='$email' or nome='$nome' or cognome='$cognome'") or die ("Query controlloemail non eseguita!");
		$verifica=mysql_num_rows($querycontr);
		
		//controllo se esiste l'utente
		if($verifica>0){
			print "<p>&nbsp;</p><p>&nbsp;</p><div class=\"titoloacquista\">1. L'utente è già registrato!</div>";
		}else{
			print "<p>&nbsp;</p><p>&nbsp;</p><div class=\"titoloacquista\">1. L'utente non è registrato!</div>";
		}
		include "emailpagamento.php";
		print "<p>&nbsp;</p><div class=\"titoloacquista\">2. Email inviata correttamente!</div>";
	}
?>	
</body>
</html>