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
		<title>Gestione Messaggi Controllo</title>
		<?php include "analitycs.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body class="nessuno">
	<div class="boxregistro">
		<div class="titolocontrollo">Controllo Utente</div>
		<form name="acquista" id="acquista" method="POST" action="#">
			<div class="campocontrollo"><div>Nome*</div></div>
			<div class="inputcontrollo"><input type="text" name="nome" id="nome" value=""/></div>

			<div class="campocontrollo"><div>Cognome*</div></div>
			<div class="inputcontrollo"><input type="text" name="cognome" id="cognome" value=""/></div>

			<div class="campocontrollo"><div>Email*</div></div>
			<div class="inputcontrollo"><input type="text" name="email" id="email" value="<?php print $_GET['email']; ?>"/></div>
			<input type="hidden" name="registrazione" id="registrazione" value="1" />
			<div class="bottonescaricareg"><input type="image" id="cmd" name="cmd" src="immagini/invia.jpg" /></div>
		</form>
	</div>	
	
<?php
	if(isset($_POST['registrazione']) and strlen($_POST['registrazione'])>0){
		$email=$_POST['email'];
		$nome=$_POST['nome'];
		$cognome=$_POST['cognome'];
		
		//cerco l'utente
		$querycontr=mysql_query("select * from download where email='$email' or nome='$nome' or cognome='$cognome'") or die ("Query controlloemail non eseguita!");
		$verifica=mysql_num_rows($querycontr);
		
		if($verifica==0){
?>			<p>&nbsp;</p><p>&nbsp;</p>
			<div class="titoloacquista">Nessun risultato trovato!</div>
<?php	}else{
	?>			<p>&nbsp;</p><p>&nbsp;</p>
				<table border="1">
					<tr>
						<td><div style="width:200px;">Ragione sociale</div></td>
						<td><div style="width:200px;">Nome</div></td>
						<td><div style="width:200px;">Cognome</div></td>
						<td><div style="width:200px;">Partita Iva</div></td>
						<td><div style="width:200px;">Cod. Fiscale</div></td>
						<td><div style="width:200px;">Telefono</div></td>
						<td><div style="width:200px;">E-mail</div></td>
						<td><div style="width:200px;">Cap</div></td>
						<td><div style="width:200px;">Citt�</div></td>
						<td><div style="width:200px;">Prov</div></td>
						<td><div style="width:200px;">Indirizzo</div></td>
						<td><div style="width:200px;">Cellulare</div></td>
					</tr>
				<table>
<?php		while($data=mysql_fetch_array($querycontr)){
?>				<table border="1">
					<tr>
						<td><div style="width:200px;"><?php if(strlen($data[1])>0){print $data[1];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[4])>0){print $data[4];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[3])>0){print $data[3];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[5])>0){print $data[5];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[6])>0){print $data[6];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[7])>0){print $data[7];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[8])>0){print $data[8];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[9])>0){print $data[9];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[10])>0){print $data[10];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[11])>0){print $data[11];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[12])>0){print $data[12];}else{ print "0";} ?></div></td>
						<td><div style="width:200px;"><?php if(strlen($data[13])>0){print $data[13];}else{ print "0";} ?></div></td>
					</tr>
				<table>
<?php		}
		}
	}
?>	
</body>
</html>