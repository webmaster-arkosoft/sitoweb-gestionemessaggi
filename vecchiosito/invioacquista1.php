<?php
	//settaggio variabili
	$errore=false;
	//controllo se si sta facendo un invio
	if(isset($_POST['formacquista']) and $_POST['formacquista']=='1'){
		
		/*controllo se i campi sono vuoti*/
		if(strlen($_POST['nome'])>0){$nome=$_POST['nome'];}else{$errore=true;$msg=" nome,";}
		if(strlen($_POST['cognome'])>0){$nome=$_POST['cognome'];}else{$errore=true;$msg.=" cognome,";}
		if(strlen($_POST['email'])>0){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['email'])>0 and strstr($_POST['email'],'@')==true){$email=$_POST['email'];}else{$errore=true;$msg.=" email,";}
		if(strlen($_POST['idmacchina'])>0){$idmacchina=$_POST['idmacchina'];}else{$errore=true;$msg.=" id-macchina,";}
		/*fine controllo*/
		
		//formattazione del messaggio
		$msg1=explode(",",$msg);
		$msg2=array_unique($msg1); 
		$msg3=implode(",",$msg2);
		$msg=substr($msg3,0,-1);
		//fine formattazione
		
		$cognome=$_POST['cognome'];
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$idmacchina=$_POST['idmacchina'];
		$richiesta=$_POST['richiesta'];
		
		//se c'� qualke errore stampa il messaggio di errore
		if($errore==true){
			$messaggio="<div class=\"errore\">I seguenti campi risultano vuoti o inseriti non correttamente: <br /><br /><b>".$msg.".</b></div>";
		}else{
			$messaggio="<div class=\"esatto\">Esamineremo la sua richiesta e le invieremo al pi� presto le informazioni per l'acquisto della licenza.</div>";
			//email di conferma all'utente
			include "emailacquista.php";	
			

			$cognome='';
			$nome='';
			$email='';
			$idmacchina='';
			$richiesta='';	
		}	
		include "acquista.php";
	}	
?>		