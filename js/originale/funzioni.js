// controllo Login
function controllologin(){
	if (document.getElementById("email").value ==""){
			alert("Attenzione prima di continuare inserire una e-mail.");
			return false;
	}
	if (document.getElementById("email").value =="INSERISCI LA TUA EMAIL"){
		alert("Attenzione prima di continuare inserire una e-mail.");
		return false;
	}

	var n = document.getElementById("email").value.search("@");
	if (n ==-1){
		alert("Attenzione prima di continuare inserire una e-mail valida.");
		return false;
	}
	return true;
}

// funzione per ie8 
function avviacarrello(numero,div){
 
if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){
	var ieversion=new Number(RegExp.$1) 
	 
		if (ieversion<=8){
			
			document.location='/carrello.php?prodottodb=1'
			}else{
				document.getElementById(div).innerHTML='<iframe src="carrello-mini.php?prodottodb='+numero+'" width="845" height="550"></iframe>';
			}
	}else{
		document.getElementById(div).innerHTML='<iframe src="carrello-mini.php?prodottodb='+numero+'" width="845" height="550"></iframe>';
	}
}

function scaricaora(){
if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){
	var ieversion=new Number(RegExp.$1) 
	if (ieversion<=8){
					document.location="/inserisci-email.html";
	}
 }
}