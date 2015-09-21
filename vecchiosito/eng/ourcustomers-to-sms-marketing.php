<?php
	session_start();
	// include config
	include "../config.php";
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
		if(strlen($_POST['nome'])>0){$nome=$_POST['nome'];}else{$errore=true;$msg="Enter your name<br />";}
		if(strlen($_POST['email'])>0){$email=$_POST['email'];}else{$errore=true;$msg.="Enter your email address<br />";}
		if(strlen($_POST['email'])>0 and strstr($_POST['email'],'@')==true){$email=$_POST['email'];}else{$errore=true;$msg.="Enter your email address correctly<br />";}
		if(strlen($_POST['avatar'])>0){$avatar="avatar/avatar".$_POST['avatar'].".jpg";}
		if(strlen($_POST['sito'])>0){$sito=$_POST['sito']; $esatto=true;}else{$sito='';}
		if(strlen($_POST['testo'])>0){$richiesta=$_POST['testo'];}else{$errore=true;$msg.="Enter your comment<br />";}
		/*fine controllo*/

		//query di inserimento comenti
		if($errore==false){
			$sito='0';
			$query = mysql_query("insert into `commenti-eng` values('default','".mysql_real_escape_string($nome)."', '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($sito)."','$avatar', '".mysql_real_escape_string($richiesta)."','$data','0')") or die("Errore.La query non è stata eseguita");
			//ultimo id inserito
			$id=mysql_insert_id();
			//Email di approvazione
			include "approvazionecommento.php";
			$_SESSION['invio']=1;
		}
	}
	//divisione dei commenti in pagine
	include "divisione_pagine.php";
?>
<html>
	<head>
	<script type="text/javascript">
		  var _gaq = _gaq || [];i nostri clienti che effettuano sms marketing
		  _gaq.push(['_setAccount', 'UA-2503096-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<title>GM - i nostri clienti che effettuano sms marketing</title>
		<meta name="abstarct" content="our customers who sms marketing"/>
		<meta name="title" content="our customers who sms marketing" />
		<meta name="keywords" content="campaign sms marketing, sms marketing, software for sending sms"/>
		<meta name="description" content="our customers who sms marketing" />
		<link rel="stylesheet" type="text/css" href="css/clienti.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="../js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="../js/lightbox.js" type="text/javascript"></script>
		<script src="../js/commento.js" type="text/javascript"></script>
		 
	</head>
	<body class="bodygalleria">
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi software for SMS Marketing"><img alt="Gestione Messaggi software for SMS Marketing" src="../immagini/logo-sms-marketing.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="index.html" class="linksubmenu" title="Permalink a Gestione messaggi software for sms marketing">Description</a>
								<a href="gallery-sms-marketing.html" class="linksubmenu" title="Permalink to Product Gallery for sms marketing">Product Gallery</a> 
								<a href="ourcustomers-to-sms-marketing.html" class="subattivo" title="Permalink to our customers sms marketing">Our Customers</a>  
								<a href="contact-to-sms-marketing.html" class="linksubmenu" title="Permalink to Contact Us to make sms marketing">Contact</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
								<div class="mainmenu-active2"><a href="index.html" title="Why GM ?">Why GM?</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div> 
						<a href="download-software-for-the-sms-marketing.html" title="Permalink to download the software for sms marketing" class="linkmenu">Download</a>
						<a href="../eng/sms-marketing/index.html" class="linkmenu" title="Permalink Guide to SMS marketing software">Help</a> 
						<a href="buy.html" class="linkmenu" title="Buy">Buy</a>
						<a href="company.html" class="linkmenu" title="Company">Company</a>
					</div>
				</div>
			</div>
			<div class="header2">
				<div class="descmotto1">
					<h4>Our custimers doing <a href="http://www.gestionemessaggi.com/index.html" title="Permalink a Gestione messaggi software for sms marketing" class="market">sms marketing</a></h4>
					<div>
						 In order to grant the limpidity of our products, we invite you to share your opinions about Gestione Messaggi, helping us to improve this innovative product.
					</div>
				</div>
			</div>
			<div class="sotto">&nbsp;</div>
<?php		//Stampa errori se è stato lasciato un commento
			if(isset($_POST['inv']) and $_POST['inv']==1){
				if($errore==false and $_SESSION['invio']==1){
					print "<div class='corretto'>Your comment is in the approval phase.</div>";
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
			print "<div class='titolopagina'>".$righe." Comments </div>";
			//visualizzazione commenti approvati
			$query=mysql_query("select * from `commenti-eng` where approvato='1' order by id asc LIMIT ".$partenza.",".$num."") or die ("Query marche non eseguita!");
			$contatore=0;
			while($data=mysql_fetch_array($query)){
			//contatore per fare una div di colore bianca e una di colore grigia
			$contatore=$contatore+1;
?>				<div <?php if($contatore%2==0){ print "class='boxcommenti'"; }else{ print "class='boxcommenti1'";} ?>>
					<div class="nome"><?php print $data[1]; ?></div>
					<div class="data"><img src="immagini/orologiocommento.gif" /><?php print formattadata($data[6]); ?></div>
					<div class="imgcommenti"><img src="<?php print "../".$data[4]; ?>"></div>
					<div class="imgdescrizione"><?php print $data[5]; ?></div>
				</div>
<?php 		}
			mysql_close($db); //chiusura db
			if($pagine>1){
?>				<div class="pagine"><?php print divisioneprodotti($corrente,$pagine); ?></div>	
<?php			}
?>			
			<form action="ourcustomers-to-sms-marketing.html" method="POST" name="commento" id="commento" Onsubmit="javascript: return controllocampi();">
			<div class="boxlasciacommento">
				<div class="titolocommento">Leave a commento</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>" Onclick="javascript: this.value='';"></div>
					<div class="campo1">Name(Required)</div>
				</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="email" id="email" value="<?php print $email; ?>" Onclick="javascript: this.value='';"></div>
					<div class="campo1">Mail (It will not be displayed) (Required)</div>
				</div>
				<div class="campocommento">
					<div class="campo"><input type="text" name="sito" id="sito" value="<?php print $sito; ?>" Onclick="javascript: this.value='';"></div>
					<div class="campo1"><div>Website</div></div>
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
					<div class="campo2"><textarea name="testo" id="testo" cols="50" rows="10" Onclick="javascript: this.value='';"><?php print $testo; ?></textarea></div>
				</div>
				<div class="bottonecommento"><input type="image" id="cmd" name="cmd" src="immagini/lasciacommento.jpg" /></div>
				<input type="hidden" name="inv" id="inv" value="1">
			</div>
			</form>
			<div class="copyright">
				<hr />
				<div class="logocopyright">
					<img src="immagini/logocopyright.gif" alt="Software house puglia" alt="software house puglia"><span class="arkocopyright">Copyright &copy; 2010 <a href="http://www.arkosoft.it" alt="Software house puglia" title="Software house puglia">Arkosoft</a>. All rights reserved.</span>
				</div>
				<div class="piva">
					<b>ARKOSOFT - Software House</b><br />
					In Software and Web your ideas come true<br />
					OFFICE Via Castello 54, 72026 San Pancrazio Salentino<br />
					Phone: 0831/1815236<br />
					Fax: 0831/1815238<br />
					<a href="http://www.arkosoft.it" alt="Software house puglia" title="Software house puglia">http://www.arkosoft.it</a><br />
					P.IVA <b>02166630745</b>
				</div>
			</div> 
		</div>	
	</body>
</html>