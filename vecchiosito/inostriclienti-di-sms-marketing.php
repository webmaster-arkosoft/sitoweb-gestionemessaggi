<?php
	if (strlen(strstr($_SERVER["REQUEST_URI"],'php')) > 0){
		Header("HTTP/1.1 301 Moved Permanently" ); 
		Header("Location: http://www.gestionemessaggi.com".str_replace(".php",".html",$_SERVER["REQUEST_URI"])); 	
	}
	
	session_start();
	// include config
	include "config.php";
	include "libs.php";
	//connessione al database
	$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione.");
	//selezione del database
	mysql_select_db($database) or die ("Non riesco a selezionare il database");
	
	//settaggio variabili
	$errore=false;
	$esatto=false;
	
	//ricavo la data e l'ora
	$data=date('Y-m-d H:i:s');
	
	if(isset($_POST['inv']) and $_POST['inv']==1){
		/*controllo se i campi sono vuoti*/
		if(strlen($_POST['nome'])>0){$nome=$_POST['nome'];}else{$errore=true;$msg="Inserisci il tuo nome<br />";}
		if(strlen($_POST['email'])>0){$email=$_POST['email'];}else{$errore=true;$msg.="Inserisci la tua email<br />";}
		if(strlen($_POST['email'])>0 and strstr($_POST['email'],'@')==true){$email=$_POST['email'];}else{$errore=true;$msg.="Inserisci la tua email correttamente<br />";}
		if(strlen($_POST['avatar'])>0){$avatar="avatar/avatar".$_POST['avatar'].".jpg";}
		if(strlen($_POST['sito'])>0){$sito=$_POST['sito']; $esatto=true;}else{$sito='';}
		if(strlen($_POST['testo'])>0){$richiesta=$_POST['testo'];}else{$errore=true;$msg.="Inserisci il tuo commento<br />";}
		/*fine controllo*/

		//query di inserimento comenti
		if($errore==false){
			$query = mysql_query("insert into commenti values('default','".mysql_real_escape_string(utf8_decode($nome))."', '".mysql_real_escape_string(utf8_decode($email))."', '".mysql_real_escape_string(utf8_decode($sito))."','$avatar', '".mysql_real_escape_string(utf8_decode($richiesta))."','$data','0')") or die("Errore.La query non &egrave; stata eseguita");
			//ultimo id inserito
			$id=mysql_insert_id();
			//Email di approvazione
			include "approvazionecommento.php";
			$_SESSION['invio']=1;
			$sito='0';
		}
	}
	//divisione dei commenti in pagine
	include "divisione_pagine.php";
?>
<html>
	<head>
		<title>GM - i nostri clienti</title>
		<?php include "analitycs.php"; ?>
		<meta name="abstarct" content="i nostri clienti che usano Gestione Messaggi "/>
		<meta name="title" content="clienti che utilizzano gestione messaggi" />
		<meta name="keywords" content="campagne di sms marketing,sms,sms marketing,software per invio sms"/>
		<meta name="description" content="Gestione Messaggi i nostri clienti" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/clienti.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script src="js/commento.js" type="text/javascript"></script>
		 
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="http://www.gestionemessaggi.com" title="Gestione Messaggi"><img alt="Gestione Messaggi" src="immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="http://www.gestionemessaggi.com" class="linksubmenu" title="Permalink a Gestione messaggi">Descrizione</a>
								<a href="galleria-sms-marketing.html" class="linksubmenu" title="Permalink a Galleria del prodotto">Galleria del prodotto</a> 
								<a href="inostriclienti-di-sms-marketing.html" class="subattivo" title="Permalink a I nostri clienti">I Nostri Clienti</a> 
								<a href="contattaci-per-sms-marketing.html" class="linksubmenu" title="Permalink a Contattaci">Contattaci</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="index.html" title="Perch&egrave; GM ?">Perch&egrave; GM?</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
						<a href="scarica-il-software-per-sms-marketing.html" title="Permalink a Scarica" class="linkmenu">Scarica</a>
						<a href="http://www.gestionemessaggi.com/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header2">
				<div class="descmotto1">
					<h4>I Nostri clienti che utilizzano Gestione Messaggi</h4>
					<div>
						Per garantire la trasparenza sui nostri prodotti, vi invitiamo a condividere le vostre opinioni su Gestione Messaggi, aiutandoci cos&igrave; a migliorare questo innovativo prodotto.
					</div>
				</div>
			</div>
			<div class="sotto">&nbsp;</div>
<?php		//Stampa errori se è stato lasciato un commento
			if(isset($_POST['inv']) and $_POST['inv']==1){
				if($errore==false and $_SESSION['invio']==1){
					print "<div class='corretto'>Il tuo commento &egrave; in fase di approvazione.</div>";
					$_SESSION['invio']='';
					$testo='';
					$sito='';
					$email='';
					$nome='';
				}else{
					print "<div class='errato'>".$msg."</div>";
					$testo=$_POST['testo'];
					$sito=$_POST['sito'];
					$email=$_POST['email'];
					$nome=$_POST['nome'];
				}
			}	
			//titolo pagina
			print "<div class='titolopagina'>".$righe." Commenti </div>";
			//visualizzazione commenti approvati
			$query=mysql_query("select * from commenti where approvato='1' order by id asc LIMIT ".$partenza.",".$num."") or die ("Query marche non eseguita!");
			$contatore=0;
			while($data=mysql_fetch_array($query)){
			//contatore per fare una div di colore bianca e una di colore grigia
			$contatore=$contatore+1;
?>				<div <?php if($contatore%2==0){ print "class='boxcommenti'"; }else{ print "class='boxcommenti1'";} ?>>
					<div class="nome"><?php print htmlentities($data[1]); ?></div>
					<div class="data"><img src="immagini/orologiocommento.gif" /><?php print formattadata($data[6]); ?></div>
					<div class="imgcommenti"><img src="<?php print $data[4]; ?>"></div>
					<div class="imgdescrizione"><?php print htmlentities($data[5]); ?></div>
				</div>
<?php 		}
			mysql_close($db); //chiusura db
			if($pagine>1){
?>				<div class="pagine"><?php print divisioneprodotti($corrente,$pagine); ?></div>	
<?php			}
?>			
			<form action="inostriclienti-di-sms-marketing.html" method="POST" name="commento" id="commento" Onsubmit="javascript: return controllocampi();">
			<div class="boxlasciacommento">
				<div class="titolocommento">Lascia un commento</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"></div>
					<div class="campo1">Nome(obbligatorio)</div>
				</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="email" id="email" value="<?php print $email; ?>"></div>
					<div class="campo1">Mail (Non verr&agrave; visualizzato) (obbligatorio)</div>
				</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="sito" id="sito" value="<?php print $sito; ?>"></div>
					<div class="campo1"><div>Sito</div></div>
				</div>
				<div class="campoavatar">
					<div class="avatar"><img src="avatar/avatar.jpg" /><input type="radio" name="avatar" value="1" checked></div>
					<div class="avatar"><img src="avatar/avatar1.jpg" /><input type="radio" name="avatar" value="2"></div>
					<div class="avatar"><img src="avatar/avatar2.jpg" /><input type="radio" name="avatar" value="3"></div>
					<div class="avatar"><img src="avatar/avatar3.jpg" /><input type="radio" name="avatar" value="4"></div>
					<div class="avatar"><img src="avatar/avatar4.jpg" /><input type="radio" name="avatar" value="5"></div>
					<div class="avatar1">Avatar</div>
				</div>
				<div class="campocommento1">
					<div class="campo2"><textarea name="testo" id="testo" cols="50" rows="10"><?php print $testo; ?></textarea></div>
				</div>
				<div class="bottonecommento"><input type="image" id="cmd" name="cmd" src="immagini/lasciacommento.jpg" /></div>
				<input type="hidden" name="inv" id="inv" value="1">
			</div>
			</form>
<?php 		include "footer.php"; ?>
		</div>	
	</body>
</html>