<?php
	
	//settaggio variabili
	$errore=false;
	//controllo se si sta facendo un invio
	if(isset($_POST['formcontattaci']) and $_POST['formcontattaci']=='1'){
		
		/*controllo se i campi sono vuoti*/
		if(strlen($_POST['nome'])>0){$nome=$_POST['nome'];}else{$errore=true;$msg=" nome,";}
		if(strlen($_POST['cognome'])>0){$nome=$_POST['cognome'];}else{$errore=true;$msg.=" cognome,";}
		if(strlen($_POST['email'])>0){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['email'])>0 and strstr($_POST['email'],'@')==true){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['citta'])>0){$citta=$_POST['citta'];}else{$errore=true;$msg.=" citt&agrave;,";}
		if(strlen($_POST['provincia'])>0){$provincia=$_POST['provincia'];}else{$errore=true;$msg.=" provincia,";}
		if(strlen($_POST['richiesta'])>0){$richiesta=$_POST['richiesta'];}else{$errore=true;$msg.=" richiesta,";}
		/*fine controllo*/
		
		//formattazione del messaggio
		$msg1=explode(",",$msg);
		$msg2=array_unique($msg1); 
		$msg3=implode(",",$msg2);
		$msg=substr($msg3,0,-1);
		//fine formattazione
		
		//Settaggio variabili
		$cognome=$_POST['cognome'];
		$nome=$_POST['nome'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$citta=$_POST['citta'];
		$provincia=$_POST['provincia'];
		$richiesta=$_POST['richiesta'];
		//fine settaggio
				
		//se c'è qualke errore stampa il messaggio di errore
		if($errore==true){
			$messaggio="<div class=\"errore\">I seguenti campi risultano vuoti o inseriti non correttamente: <br /><br /><b>".$msg.".</b></div>";
		}else{
			if($inviato==false){
				$messaggio="<div class=\"esatto\">Grazie per la sua richiesta. La ricontatteremo al pi&ugrave; presto!</div>";
				include "emailcontattaci.php";	
			
				$cognome='';
				$nome='';
				$telefono='';
				$email='';
				$citta='';
				$provincia='';
				$richiesta='';	
				$inviato=true;
			}	
		}	
		include "contattaci-per-sms-marketing.php";
	}
?>