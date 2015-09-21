/*FUNZIONE PER IL CONTROLLO DEI VALORI INSERITI NELDOWNLOAD*/
 
function controllodownload(){
	//Controllo se il cognome risulta vuoto
	if(document.scarica.cognome.value=='' || document.scarica.cognome.value=='Inserisci il tuo cognome!'){
		alert('Il cognome risulta vuoto!');
		document.scarica.cognome.focus();
		document.scarica.cognome.style.border='2px solid #ff0000';
		document.scarica.cognome.style.color='#ff0000';
		document.scarica.cognome.value='Inserisci il tuo cognome!';
		return false;
	}
	//Controllo se il nome risulta vuoto
	if(document.scarica.nome.value=='' || document.scarica.nome.value=='Inserisci il tuo nome!'){
		alert('Il nome risulta vuoto!');
		document.scarica.nome.focus();
		document.scarica.nome.style.border='2px solid #ff0000';
		document.scarica.nome.style.color='#ff0000';
		document.scarica.nome.value='Inserisci il tuo nome!';
		return false;
	}
	//controllo se è stata inserita la tipologia
	if(document.getElementById('tipo').options.value=='Ditta Individuale' && document.scarica.codfiscale.value==''){
		alert('Inserisci il codice fiscale!');
		document.scarica.codfiscale.focus();
		document.scarica.codfiscale.style.border='2px solid #ff0000';
		document.scarica.codfiscale.style.color='#ff0000';
		return false;
	}
	//Controllo se l'email risulta vuota
	if(document.scarica.email.value=='' || document.scarica.email.value=='Inserisci la tua e-mail!'){
		alert('l\'e-mail risulta vuota!');
		document.scarica.email.focus();
		document.scarica.email.style.border='2px solid #ff0000';
		document.scarica.email.style.color='#ff0000';
		document.scarica.email.value='Inserisci la tua e-mail!';
		return false;
	}
	if(document.scarica.cemail.value=='' || document.scarica.cemail.value=='Conferma la tua e-mail!'){
		alert('la conferma dell\'e-mail risulta vuota!');
		document.scarica.cemail.focus();
		document.scarica.cemail.style.border='2px solid #ff0000';
		document.scarica.cemail.style.color='#ff0000';
		document.scarica.cemail.value='Conferma la tua e-mail!';
		return false;
	}
	if(document.scarica.email.value.indexOf("@") == -1 || document.scarica.email.value=='Inserisci la tua e-mail correttamente!'){
		alert('l\'e-mail risulta non corretta!');
		document.scarica.email.focus();
		document.scarica.email.style.border='2px solid #ff0000';
		document.scarica.email.style.color='#ff0000';
		document.scarica.email.value='Inserisci la tua e-mail correttamente!';
		return false;
	}
	if(document.scarica.email.value != document.scarica.cemail.value){
		alert('l\'e-mail non corrisponde!');
		document.scarica.email.focus();
		return false;
	}
	//Controllo se il cap risulta vuoto
	if(document.scarica.cap.value==''){
		alert('Il cap risulta vuoto!');
		document.scarica.cap.focus();
		document.scarica.cap.style.border='2px solid #ff0000';
		document.scarica.cap.style.color='#ff0000';
		return false;
	}
	if(isNaN(document.scarica.cap.value)==true){
		alert("Il cap non e' un numero!");
		document.scarica.cap.focus();
		document.scarica.cap.style.border='2px solid #ff0000';
		document.scarica.cap.style.color='#ff0000';
		return false;
	}
	//Controllo se la città risulta vuota
	if(document.scarica.citta.value=='' || document.scarica.citta.value=='Inserisci la città!'){
		alert("La citta' risulta vuota!");
		document.scarica.citta.focus();
		document.scarica.citta.style.border='2px solid #ff0000';
		document.scarica.citta.style.color='#ff0000';
		document.scarica.citta.value="Inserisci la citta'!";
		return false;
	}
	//controllo se la prov è stata selezionata
	if(document.getElementById('prov').options.value=='0'){
		alert('Inserisci la Provincia!');
		document.scarica.prov.focus();
		return false;
	}
	//Controllo se l'indirizzo risulta vuota
	if(document.scarica.indirizzo.value=='' || document.scarica.indirizzo.value=='Inserisci l\'indirizzo!'){
		alert('L\'indirizzo risulta vuota!');
		document.scarica.indirizzo.focus();
		document.scarica.indirizzo.style.border='2px solid #ff0000';
		document.scarica.indirizzo.style.color='#ff0000';
		document.scarica.indirizzo.value='Inserisci l\'indirizzo!';
		return false;
	}
	//Controllo se la legge privacy
	if(document.scarica.acconsento.checked==false){
		alert('Devi accettare la legge sulla privacy!');
		return false;
	}
}
/*FINE CONTROLLO*/	

/*SVUOTA I CAMPI DOPO IL CONTROLLO*/
function svuota(read){
	switch(read) { 
		case 'Inserisci il tuo cognome!': 
		document.scarica.cognome.value='';
		document.scarica.cognome.style.border='1px solid #000';
		document.scarica.cognome.style.color='#000';
		break;  

		case 'Inserisci il tuo nome!': 
		document.scarica.nome.value='';
		document.scarica.nome.style.border='1px solid #000';
		document.scarica.nome.style.color='#000';
		break;  
		
		case 'Inserisci la tua e-mail!': 
		document.scarica.email.value='';
		document.scarica.email.style.border='1px solid #000';
		document.scarica.email.style.color='#000';
		break;  

		case 'Conferma la tua e-mail!': 
		document.scarica.cemail.value=''; 
		document.scarica.cemail.style.border='1px solid #000';
		document.scarica.cemail.style.color='#000';
		break;  
		
		case 'Inserisci la tua e-mail correttamente!': 
		document.scarica.email.value='';
		document.scarica.cemail.value='';
		document.scarica.email.style.border='1px solid #000';
		document.scarica.email.style.color='#000';
		document.scarica.cemail.style.border='1px solid #000';
		document.scarica.cemail.style.color='#000';
		break; 
		
		case "Inserisci la citta'!": 
		document.scarica.citta.value='';
		document.scarica.citta.style.border='1px solid #000';
		document.scarica.citta.style.color='#000';
		break;

		case 'Inserisci l\'indirizzo!': 
		document.scarica.indirizzo.value='';
		document.scarica.indirizzo.style.border='1px solid #000';
		document.scarica.indirizzo.style.color='#000';
		break; 

	}
}	
/*FINE SVUOTA*/