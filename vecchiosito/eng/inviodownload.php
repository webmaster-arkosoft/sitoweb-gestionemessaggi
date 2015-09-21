<?php

	// include config
	include "config.php";
	//connessione al database
	$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione.");
	//selezione del database
	mysql_select_db($database) or die ("Non riesco a selezionare il database");
	
	//settaggio variabili
	$errore=false;
	//controllo se si sta facendo un invio
	if(isset($_POST['formscarica']) and $_POST['formscarica']=='1'){
		
		/*controllo se i campi sono vuoti*/
		if(strlen($_POST['nome'])>0){$nome=$_POST['nome'];}else{$errore=true;$msg=" nome,";}
		if(strlen($_POST['cognome'])>0){$nome=$_POST['cognome'];}else{$errore=true;$msg.=" cognome,";}
		if($_POST['tipo']=='Ditta Individuale' and strlen($_POST['altro'])==0 and strlen($_POST['codfiscale'])==0){$errore=true;$msg.=" codice fiscale,";}
		if(strlen($_POST['email'])>0){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['email'])>0 and strstr($_POST['email'],'@')==true){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['cemail'])>0){$cemail=$_POST['cemail'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['cemail'])>0 and strstr($_POST['cemail'],'@')==true){$cemail=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if($_POST['email']!=$_POST['cemail']){$errore=true;$msg.=" email,";}
		if(strlen($_POST['citta'])>0){$citta=$_POST['citta'];}else{$errore=true;$msg.=" città,";}
		if($_POST['prov']!='0'){$prov=$_POST['prov'];}else{$errore=true;$msg.=" provincia,";}
		if(strlen($_POST['cap'])>0 and is_numeric($_POST['cap'])==true){$cap=$_POST['cap'];}else{$errore=true;$msg.=" cap,";}
		if(strlen($_POST['indirizzo'])>0){$indirizzo=$_POST['indirizzo'];}else{$errore=true;$msg.=" indirizzo,";}
		if($_POST['acconsento']!="on"){$errore=true;$msg.=" Legge sulla Privacy.";}
		/*fine controllo*/
		
		//formattazione del messaggio
		$msg1=explode(",",$msg);
		$msg2=array_unique($msg1); 
		$msg3=implode(",",$msg2);
		$msg=substr($msg3,0,-1);
		//fine formattazione
		
		//Settaggio variabili
		$ragionesociale=$_POST['societa'];
		$tipo=$_POST['tipo'];
		if(strlen($tipo)==0){$altro=$_POST['altro']; $tipo=$_POST['altro'];}
		$cognome=$_POST['cognome'];
		$nome=$_POST['nome'];
		$partitaiva=$_POST['piva'];
		$codfiscale=$_POST['codfiscale'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$cemail=$_POST['cemail'];
		$citta=$_POST['citta'];
		$cap=$_POST['cap'];
		$prov=$_POST['prov'];
		$indirizzo=$_POST['indirizzo'];
		$cellulare=$_POST['cellulare'];
		//fine settaggio
		
		//cerco l'utente
		$querycontr=mysql_query("select * from download where email='$email'") or die ("Query controlloemail non eseguita!");
		$verifica=mysql_num_rows($querycontr);
		
		//se c'è qualke errore stampa il messaggio di errore
		if($errore==true){
			$messaggio="<div class=\"errore\">I seguenti campi risultano vuoti o inseriti non correttamente: <br /><br /><b>".$msg.".</b></div>";
		}else{
			//Se l'utente non esiste inseriscilo
			if($verifica==0){
				$messaggio="<div class=\"esatto\">E' stata inviata un'email con le istruzioni per scaricare Gestione Messaggi all'indirizzo da Lei specificato</div>";

				//inserimento dell'utente
				$query = mysql_query("insert into download values('default','".mysql_real_escape_string($ragionesociale)."', '".mysql_real_escape_string($tipo)."','".mysql_real_escape_string($cognome)."', '".mysql_real_escape_string($nome)."','".mysql_real_escape_string($partitaiva)."', '".mysql_real_escape_string($codfiscale)."','".mysql_real_escape_string($telefono)."','".mysql_real_escape_string($email)."','$cap','".mysql_real_escape_string($citta)."','$prov','".mysql_real_escape_string($indirizzo)."','".mysql_real_escape_string($cellulare)."')") or die("Errore.La query inserimento non è stata eseguita");
				//ultimo id inserito
				$id=mysql_insert_id();
				//codice per il download
				$codice=base64_encode(substr($nome,0,3).substr($cognome,0,3).substr($email,0,3).strlen($citta));
				//query per lo stato del utente che lo setta a zero indicando ke ancora deve confermare via email il download
				$query1 = mysql_query("insert into statodownload values('default','$id','$codice','0')") or die("Errore.La query statodownload non è stata eseguita");
				mysql_close($db); //chiusura db
				//email di conferma all'utente
				include "emailscarica.php";	
			
				$ragionesociale='';
				$cognome='';
				$altro='';
				$nome='';
				$partitaiva='';
				$codfiscale='';
				$telefono='';
				$email='';
				$cemail='';
				$citta='';
				$cap='';
				$indirizzo='';
				$cellulare='';
			}else{
				$messaggio="<div class=\"errore\">L'email è già esistente</div>";
			}	
		}	
		include "download.php";
	}
?>