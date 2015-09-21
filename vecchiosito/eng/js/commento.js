/*FUNZIONE PER IL CONTROLLO DEI VALORI INSERITI NELLA RICHIESTA DEI COMMENTI*/
 
function controllocampi(){
	//Controllo se il nome risulta vuoto
	if(document.commento.nome.value=='' || document.commento.nome.value=='Inserisci il tuo nome!'){
		alert('Il nome risulta vuoto!');
		document.commento.nome.focus();
		document.commento.nome.style.border='2px solid #ff0000';
		document.commento.nome.style.color='#ff0000';
		document.commento.nome.value='Inserisci il tuo nome!';
		return false;
	}
	//Controllo se il cognome risulta vuoto
	if(document.commento.email.value=='' || document.commento.email.value=='Inserisci la tua e-mail!'){
		alert('l\'e-mail risulta vuota!');
		document.commento.email.focus();
		document.commento.email.style.border='2px solid #ff0000';
		document.commento.email.style.color='#ff0000';
		document.commento.email.value='Inserisci la tua e-mail!';
		return false;
	}
	if(document.commento.email.value.indexOf("@") == -1 || document.commento.email.value=='Inserisci la tua e-mail correttamente!'){
		alert('l\'e-mail risulta non corretta!');
		document.commento.email.focus();
		document.commento.email.style.border='2px solid #ff0000';
		document.commento.email.style.color='#ff0000';
		document.commento.email.value='Inserisci la tua e-mail correttamente!';
		return false;
	}
	//Controllo se il paese risulta vuoto
	if(document.commento.testo.value=='' || document.commento.testo.value=='Inserisci il commento!'){
		alert('Il commento risulta vuoto!');
		document.commento.testo.focus();
		document.commento.testo.style.border='2px solid #ff0000';
		document.commento.testo.style.color='#ff0000';
		document.commento.testo.value='Inserisci il commento!';
		return false;
	}
}
/*FINE CONTROLLO*/	