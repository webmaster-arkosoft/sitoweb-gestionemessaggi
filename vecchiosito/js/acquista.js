/*FUNZIONE PER IL CONTROLLO DEI VALORI INSERITI NELL'ACQUISTO*/
 
function controlloacquista(){
	//Controllo se il nome risulta vuoto
	if(document.acquista.nome.value=='' || document.acquista.nome.value=='Inserisci il tuo nome!'){
		alert('Il nome risulta vuoto!');
		document.acquista.nome.focus();
		document.acquista.nome.style.border='2px solid #ff0000';
		document.acquista.nome.style.color='#ff0000';
		document.acquista.nome.value='Inserisci il tuo nome!';
		return false;
	}
	//Controllo se il cognome risulta vuoto
	if(document.acquista.cognome.value=='' || document.acquista.cognome.value=='Inserisci il tuo cognome!'){
		alert('Il cognome risulta vuoto!');
		document.acquista.cognome.focus();
		document.acquista.cognome.style.border='2px solid #ff0000';
		document.acquista.cognome.style.color='#ff0000';
		document.acquista.cognome.value='Inserisci il tuo cognome!';
		return false;
	}
	//Controllo se l'email risulta vuota
	if(document.acquista.email.value=='' || document.acquista.email.value=='Inserisci la tua e-mail!'){
		alert('l\'e-mail risulta vuota!');
		document.acquista.email.focus();
		document.acquista.email.style.border='2px solid #ff0000';
		document.acquista.email.style.color='#ff0000';
		document.acquista.email.value='Inserisci la tua e-mail!';
		return false;
	}
	if(document.acquista.email.value.indexOf("@") == -1 || document.acquista.email.value=='Inserisci la tua e-mail correttamente!'){
		alert('l\'e-mail risulta non corretta!');
		document.acquista.email.focus();
		document.acquista.email.style.border='2px solid #ff0000';
		document.acquista.email.style.color='#ff0000';
		document.acquista.email.value='Inserisci la tua e-mail correttamente!';
		return false;
	}
	//Controllo se la città risulta vuota
	if(document.acquista.idmacchina.value=='' || document.acquista.idmacchina.value=='Inserisci l\'ID MACCHINA!'){
		alert('L\'ID MACCHINA risulta vuota!');
		document.acquista.idmacchina.focus();
		document.acquista.idmacchina.style.border='2px solid #ff0000';
		document.acquista.idmacchina.style.color='#ff0000';
		document.acquista.idmacchina.value='Inserisci l\'ID MACCHINA!';
		return false;
	}
}	


/*SVUOTA I CAMPI DOPO IL CONTROLLO*/
function svuota(read){
	switch(read) { 
		case 'Inserisci il tuo cognome!': 
		document.acquista.cognome.value='';
		document.acquista.cognome.style.border='1px solid #000';
		document.acquista.cognome.style.color='#000';
		break;  

		case 'Inserisci il tuo nome!': 
		document.acquista.nome.value='';
		document.acquista.nome.style.border='1px solid #000';
		document.acquista.nome.style.color='#000';
		break;  
		
		case 'Inserisci la tua e-mail!': 
		document.acquista.email.value='';
		document.acquista.email.style.border='1px solid #000';
		document.acquista.email.style.color='#000';
		break;  
		
		case 'Inserisci la tua e-mail correttamente!': 
		document.acquista.email.value='';
		document.acquista.email.style.border='1px solid #000';
		document.acquista.email.style.color='#000';
		break; 
		
		case 'Inserisci l\'ID MACCHINA!': 
		document.acquista.idmacchina.value='';
		document.acquista.idmacchina.style.border='1px solid #000';
		document.acquista.idmacchina.style.color='#000';
		break;

	}
}	
/*FINE SVUOTA*/