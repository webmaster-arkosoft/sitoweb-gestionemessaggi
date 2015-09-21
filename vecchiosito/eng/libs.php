<?
	function formattadata($read){
		$dataeora=explode(' ',$read);
		$data=explode('-',$dataeora[0]);
		switch($data[1]){
			case "01":
			$mese=" Gennaio ";
			break;
			
			case "02":
			$mese=" Febbraio ";
			break;
			
			case "03":
			$mese=" Marzo ";
			break;
			
			case "04":
			$mese=" Aprile ";
			break;
			
			case "05":
			$mese=" Maggio ";
			break;
			
			case "06":
			$mese=" Giugno ";
			break;
			
			case "07":
			$mese=" Luglio ";
			break;
			
			case "08":
			$mese=" Agosto ";
			break;
			
			case "09":
			$mese=" Settembre ";
			break;
			
			case "10":
			$mese=" Ottobre ";
			break;
			
			case "11":
			$mese=" Novembre ";
			break;
			
			case "12":
			$mese=" Docembre ";
			break;
		}
		$data1=$data[2]." ".$mese.$data[0];
		$ora=$dataeora[1];
		
		return $data1."&nbsp;&nbsp;&nbsp;".$ora;
	}
	
	function verso($verso){
		switch($verso){
			case "0":
			$verso="";
			break;
			
			case "1":
			$verso="Dritto";
			break;
			
			case "2":
			$verso="Rovescio (a specchio)";
			break;
		}
		return $verso;
	}
		
	function riempimento($riempimento){	
		switch($riempimento){
			case "0":
			$riempimento="";
			break;
			
			case "1":
			$riempimento="Pieno";
			break;
			
			case "2":
			$riempimento="Vuoto (mascheratura)";
			break;
		}
		return $riempimento;
	}
	
	function superficie($superficie){
		switch($superficie){
			case "0":
			$superficie="";
			break;
			
			case "1":
			$superficie="Lucida";
			break;
			
			case "2":
			$superficie="Opaca";
			break;
		}
		return $superficie;
	}
	
	//Pulisci testo
	function puliscitesto($read){
		$risultato=str_replace(chr(92).'"','"',$read);
		$risultato1=str_replace(chr(92)."'","'",$risultato);
		$risultato2=str_replace(chr(92),"",$risultato1);
		
		return $risultato2;
	}
	
	function titles($id){
		include "config.php"; 
		$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione. Verificare i parametri nel file config.inc.php");
		mysql_select_db($database) or die ("Non riesco a selezionare il database");
		$ris=mysql_query("select * FROM `categorie` Where  idcategoria  ='".$id."';");
		return stripslashes(mysql_result($ris,0,1));
	}
	function stella($counter){
		for ($start = 1; $start < $counter; $start++){
			 $stella .= "+"; 
		}
		return $stella;
	}
	
	function controlloalbero($idchk,$counter){
		include "config.php";
		$db = mysql_connect($host, $user, $psw) or die ("Errore nella connessione. Verificare i parametri nel file config.inc.php");
		mysql_select_db($database) or die ("Non riesco a selezionare il database");
	 
		$ris=mysql_query("select * FROM `categorie` Where appartenenza ='".$idchk."';");
 
		 ?> <option value="<? print $idchk; ?>"><? print  stella($counter).titles($idchk); ?></option>
		<?
		while($data=mysql_fetch_array($ris)){ controlloalbero($data[0],($counter+1)); }
		 
 }
	function imgf($read){
		$t = explode("/",$read);
		for ($start = 0; $start < count($t); $start++){
					if ($start == 0){
						$f .= $t[$start]; 
					} else {
						if ($start == count($t)-1){				
							$f .= "/min-".$t[$start];
						} else {
							$f .= "/".$t[$start];
						}
					 }
		}
		return $f;
	}

//aggiunge gli zeri per trasformali in euro
function decimali($importo){
	if($importo=="0"){
		return "0.00";
	}else{	
		$punto=strpos($importo,".");
		$cifre=strlen(substr($importo,($punto+1)));
		if(strlen($punto)=="0"){
			$risultato=$importo.".00";
		}else{
			switch ($cifre) {
				case 1:
					$risultato=$importo."0";
					break;
				case 2:
					$risultato=substr($importo,($punto+3));
					break;
			}
		}
		return $risultato;
	}
}

//PULIZIA tag html
function puliziatag($read){
	$salta = false;
	for ($start = 0; $start <= strlen($read); $start++){
		if (substr($read,0,$start) == "<"){ $salta = true; }
		if (substr($read,0,$start) == ">"){ $salta = false;}
		if ($salta == false){ $totale .= substr($read,$start,1); }  
	}
	return $totale;
}

//riduce il testo a un numero stabilito di caratteri e lo interrompe con i puntini ...
function riducitesto($testo,$caratteri){
		if(strlen($testo)>$caratteri){
			$risultato=substr($testo,0,$caratteri)."...";
		}else{
			$risultato=$testo;
		}
	print html_entity_decode($risultato);
}

//prezzo ivato con stampa
function totaleivato($prezzo,$iva,$approssima){
	$totaleivato=(($prezzo*$iva)/100)+$prezzo;
	$posizionepunto=strpos($totaleivato,".");
	$cifre=strlen(substr($totaleivato,($posizionepunto+1)));
	$centesimi=($posizionepunto+3);
	$decimi=$posizionepunto+2;
	if($approssima=="si"){
		if($posizionepunto==""){
			$totaleivato=$totaleivato.".00";
		}else{
			if($posizionepunto=="2"){
				$totaleivato=substr($totaleivato,0,$decimi)."0";
			}else{
				if(substr($totaleivato,0,($centesimi+1))>5){
					$totaleivato=(substr($totaleivato,0,$centesimi))+0.01;
				}else{
					$totaleivato=substr($totaleivato,0,$centesimi);
				}
			}
		}
		if(strpos($totaleivato,".")==""){
			$totaleivato=$totaleivato.".00";
		}
	}else{
		$totaleivato=substr($totaleivato,0,($posizionepunto+3));
		if($posizionepunto==""){
			$totaleivato=$totaleivato.".00";
		}else{
			if($cifre==1){
				$totaleivato=substr($totaleivato,0,$decimi)."0";
			}
		}	
	}	
	print $totaleivato." Euro";
}

//prezzo ivato senza stampa
function totaleivato2($prezzo,$iva,$approssima){
	$totaleivato=(($prezzo*$iva)/100)+$prezzo;
	$posizionepunto=strpos($totaleivato,".");
	$cifre=strlen(substr($totaleivato,($posizionepunto+1)));
	$centesimi=($posizionepunto+3);
	$decimi=$posizionepunto+2;
	if($approssima=="si"){
		if($posizionepunto==""){
			$totaleivato=$totaleivato.".00";
		}else{
			if($posizionepunto=="2"){
				$totaleivato=substr($totaleivato,0,$decimi)."0";
			}else{
				if(substr($totaleivato,0,($centesimi+1))>5){
					$totaleivato=(substr($totaleivato,0,$centesimi))+0.01;
				}else{
					$totaleivato=substr($totaleivato,0,$centesimi);
				}
			}
		}
		if(strpos($totaleivato,".")==""){
			$totaleivato=$totaleivato.".00";
		}
	}else{
		$totaleivato=substr($totaleivato,0,($posizionepunto+3));
		//print $totaleivato;
		if($posizionepunto==""){
			$totaleivato=$totaleivato.".00";
		}else{
			if($cifre==1){
				$totaleivato=substr($totaleivato,0,$decimi)."0";
			}
		}	
	}	
	return $totaleivato;
}

function puliziapage($read){
	$t = explode("&page=",$read);
	if (count($t) > 1) {
		return $t[0];
	} else {
		$t = explode("?page=",$read);
		return  $t[0];
	}
}

function divisioneprodotti($corrente,$fine){
	if(strlen($_SERVER['QUERY_STRING'])>0 and strstr($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],"?page=")==false){
		$percorso=puliziapage("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."&";
	}else{
		$percorso=puliziapage("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])."?";
	}
	
	
	
	if($fine>7){
		print "<a href='".$percorso."page=0' title='Inizio' class='altrilink'>Inizio </a>".chr(126);
	}	
	//print " Pagina: ";
	
	if(($corrente)>1 and $fine>7){
		print "<a href='".$percorso."page=".($corrente-1)."' title='Precedente' class='altrilink'>Indietro</a> ... ";
	}
	
	if($corrente>0){
		$a=$corrente;
	}else{
		$a=1;
	}
	$end=$a+6;
	if($end<=$fine){
		for($a;$a<=$end;$a++){
				if($a==($corrente+1)){
					print "<span class='linkcorrente'>".$a." "."</span>";
				}else{
					print "<a href='".$percorso."page=".($a-1)."' class='altrilink'>".$a." </a>";
				}	
		}
	}else{
	$e=($a+8)-$fine;
	$e=($corrente+2)-$e;
	if($e<0){
		$e=1;
	}
		for($e;$e<=$fine;$e++){
			if($e==($corrente+1)){
				print "<span class='linkcorrente'>".$e." "."</span>";
			}else{
				print "<a href='".$percorso."page=".($e-1)."' class='altrilink'>".$e." </a>";
			}
		}
	}
	if(($corrente+6)<=$fine){
		print " ... <a href='".$percorso."id=".($corrente+1)."' title='Successivo' class='altrilink'>Avanti</a>";
	}

}
function paginefooter2($corrente,$fine){
	$percorso="http://".$_SERVER['SERVER_NAME']."/categoria.php?cat=".$_GET['cat'].$_SERVER['REDIRECT_URL']."&";
	if($fine>7){
		print "<a href='".$percorso."page=0' title='Inizio' class='altrilink'>Inizio </a>".chr(126);
	}	
	print " Pagina: ";
	if(($corrente)>1 and $fine>7){
		print "<a href='".$percorso."page=".($corrente-1)."' title='Precedente' class='altrilink'>Indietro</a> ... ";
	}
	if($corrente>0){
		$a=$corrente;
	}else{
		$a=1;
	}
	$end=$a+6;
	if($end<=$fine){
		for($a;$a<=$end;$a++){
				if($a==($corrente+1)){
					print "<span class='linkcorrente'>".$a." "."</span>";
				}else{
					print "<a href='".$percorso."page=".($a-1)."' class='altrilink'>".$a." </a>";
				}	
		}
	}else{
	$e=($a+8)-$fine;
	$e=($corrente+2)-$e;
	if($e<0){
		$e=1;
	}
		for($e;$e<=$fine;$e++){
			if($e==($corrente+1)){
				print "<span class='linkcorrente'>".$e." "."</span>";
			}else{
				print "<a href='".$percorso."page=".($e-1)."' class='altrilink'>".$e." </a>";
			}
		}
	}
	if(($corrente+6)<=$fine){
		print " ... <a href='".$percorso."id=".($corrente+1)."' title='Successivo' class='altrilink'>Avanti</a>";
	}
}
//Visualizzazione delle pagine sotto ogni pagina
function paginefooter($corrente,$fine){
	$variabile=explode("&",$_SERVER['REDIRECT_QUERY_STRING']);
	if($_SERVER['argc']>0){
		$percorso="http://".$_SERVER['SERVER_NAME']."/ricerca.php".$_SERVER['REDIRECT_URL']."?".$variabile[0]."&m=".urlencode($_GET['m'])."&".$variabile[1]."&";
	}else{
		$percorso="http://".$_SERVER['SERVER_NAME']."/ricerca.php".$_SERVER['REDIRECT_URL']."?";
	}
	if($fine>7){
		print "<a href='".$percorso."page=0' title='Inizio' class='altrilink'>Inizio </a>".chr(126);
	}	
	print " Pagina: ";
	if(($corrente)>1 and $fine>7){
		print "<a href='".$percorso."page=".($corrente-1)."' title='Precedente' class='altrilink'>Indietro</a> ... ";
	}
	if($corrente>0){
		$a=$corrente;
	}else{
		$a=1;
	}
	$end=$a+6;
	if($end<=$fine){
		for($a;$a<=$end;$a++){
				if($a==($corrente+1)){
					print "<span class='linkcorrente'>".$a." "."</span>";
				}else{
					print "<a href='".$percorso."page=".($a-1)."' class='altrilink'>".$a." </a>";
				}	
		}
	}else{
	$e=($a+8)-$fine;
	$e=($corrente+2)-$e;
	if($e<0){
		$e=1;
	}
		for($e;$e<=$fine;$e++){
			if($e==($corrente+1)){
				print "<span class='linkcorrente'>".$e." "."</span>";
			}else{
				print "<a href='".$percorso."page=".($e-1)."' class='altrilink'>".$e." </a>";
			}
		}
	}
	if(($corrente+6)<=$fine){
		print " ... <a href='".$percorso."id=".($corrente+1)."' title='Successivo' class='altrilink'>Avanti</a>";
	}
}
//fine visualizza pagina


//Visualizzazione delle pagine sotto ogni pagina
function paginefooter1($corrente,$fine){
	if($fine>7){
		print "<a href='".$_SERVER['REDIRECT_SCRIPT_URI']."?page=carrello/index.php&id=0' title='Inizio' class='altrilink'>Inizio </a>".chr(126);
	}	
	print " Pagina: ";
	if(($corrente)>1 and $fine>7){
		print "<a href='".$_SERVER['REDIRECT_SCRIPT_URI']."?page=carrello/index.php&id=".($corrente-1)."' title='Precedente' class='altrilink'>Indietro</a> ... ";
	}
	if($corrente>0){
		$a=$corrente;
	}else{
		$a=1;
	}
	$end=$a+6;
	if($end<=$fine){
		for($a;$a<=$end;$a++){
				if($a==($corrente+1)){
					print "<span class='linkcorrente'>".$a." "."</span>";
				}else{
					print "<a href='".$_SERVER['REDIRECT_SCRIPT_URI']."?page=carrello/index.php&id=".($a-1)."' class='altrilink'>".$a." </a>";
				}	
		}
	}else{
	$e=($a+8)-$fine;
	$e=($corrente+2)-$e;
	if($e<0){
		$e=1;
	}
		for($e;$e<=$fine;$e++){
			if($e==($corrente+1)){
				print "<span class='linkcorrente'>".$e." "."</span>";
			}else{
				print "<a href='".$_SERVER['REDIRECT_SCRIPT_URI']."?page=carrello/index.php&id=".($e-1)."' class='altrilink'>".$e." </a>";
			}
		}
	}
	if(($corrente+6)<=$fine){
		print " ... <a href='".$_SERVER['REDIRECT_SCRIPT_URI']."?page=carrello/index.php&id=".($corrente+1)."' title='Successivo' class='altrilink'>Avanti</a>";
	}
}
//fine visualizza pagina


/*registrazione utenti*/
function datanascita($giorno,$mese,$anno){
	if($giorno=="true"){
	print 	"<select name='giorno' size='1'>
				<option>--Giorno--</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>
			</label>&nbsp;<label>";
	}
	if($mese=="true"){
	print 	"<select name='mese' size='1'>
				<option selected>--Mese--</option>
				<option>Gennaio</option>
				<option>Febbraio</option>
				<option>Marzo</option>
				<option>Aprile</option>
				<option>Maggio</option>
				<option>Giugno</option>
				<option>Luglio</option>
				<option>Agosto</option>
				<option>Settembre</option>
				<option>Ottobre</option>
				<option>Novembre</option>
				<option>Dicembre</option>
            </select>
			</label>&nbsp;<label>";
	}
	if($anno=="true"){
	print "<select name='anno' size='1'>
			  <option>--Anno--</option>
			  <option>1900</option>
			  <option>1901</option>
			  <option>1902</option>
			  <option>1903</option>
			  <option>1904</option>
			  <option>1905</option>
			  <option>1906</option>
			  <option>1907</option>
			  <option>1908</option>
			  <option>1909</option>
			  <option>1910</option>
			  <option>1911</option>
			  <option>1912</option>
			  <option>1913</option>
			  <option>1914</option>
			  <option>1915</option>
			  <option>1916</option>
			  <option>1917</option>
			  <option>1918</option>
			  <option>1919</option>
			  <option>1920</option>
			  <option>1921</option>
			  <option>1922</option>
			  <option>1923</option>
			  <option>1924</option>
			  <option>1925</option>
			  <option>1926</option>
			  <option>1927</option>
			  <option>1928</option>
			  <option>1929</option>
			  <option>1930</option>
			  <option>1931</option>
			  <option>1932</option>
			  <option>1933</option>
			  <option>1934</option>
			  <option>1935</option>
			  <option>1936</option>
			  <option>1937</option>
			  <option>1938</option>
			  <option>1939</option>
			  <option>1940</option>
			  <option>1941</option>
			  <option>1942</option>
			  <option>1943</option>
			  <option>1944</option>
			  <option>1945</option>
			  <option>1946</option>
			  <option>1947</option>
			  <option>1948</option>
			  <option>1949</option>
			  <option>1950</option>
			  <option>1951</option>
			  <option>1952</option>
			  <option>1953</option>
			  <option>1954</option>
			  <option>1955</option>
			  <option>1956</option>
			  <option>1957</option>
			  <option>1958</option>
			  <option>1959</option>
			  <option>1960</option>
			  <option>1961</option>
			  <option>1962</option>
			  <option>1963</option>
			  <option>1964</option>
			  <option>1965</option>
			  <option>1966</option>
			  <option>1967</option>
			  <option>1968</option>
			  <option>1969</option>
			  <option>1970</option>
			  <option>1971</option>
			  <option>1972</option>
			  <option>1973</option>
			  <option>1974</option>
			  <option>1975</option>
			  <option>1976</option>
			  <option>1977</option>
			  <option>1978</option>
			  <option>1979</option>
			  <option>1980</option>
			  <option>1981</option>
			  <option>1982</option>
			  <option>1983</option>
			  <option>1984</option>
			  <option>1985</option>
			  <option>1986</option>
			  <option>1987</option>
			  <option>1988</option>
			  <option>1989</option>
			  <option>1990</option>
			  <option>1991</option>
			  <option>1992</option>
			  <option>1993</option>
			  <option>1994</option>
			  <option>1995</option>
			  <option>1996</option>
			  <option>1997</option>
			  <option>1998</option>
			  <option>1999</option>
			  <option>2000</option>
			  <option>2001</option>
			  <option>2002</option>
			  <option>2003</option>
			  <option>2004</option>
			  <option>2005</option>
			  <option>2006</option>
			  <option>2007</option>
			  <option>2008</option>
			  <option>2009</option>
			  <option>2010</option>
		</select>";
	}	
}

function continente($continente){
	if($continente=="true"){
	print "<select name='continente'>
			<option>Seleziona Paese</option>
			<option>APO/FPO</option>
			<option>Afghanistan</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>Andorra</option>
			<option>Angola</option>
			<option>Anguilla</option>
			<option>Antigua e Barbuda</option>
			<option>Antille Olandesi</option>
			<option>Arabia Saudita</option>
			<option>Argentina</option>
			<option>Armenia</option>
			<option>Aruba</option>
			<option>Australia</option>
			<option>Austria</option>
			<option>Bahamas</option>
			<option>Bahrein</option>
			<option>Bangladesh</option>
			<option>Barbados</option>
			<option>Belgio</option>
			<option>Belize</option>
			<option>Benin</option>
			<option>Bermuda</option>
			<option>Bhutan</option>
			<option>Bielorussia</option>
			<option>Bolivia</option>
			<option>Bosnia e Herzegovina</option>
			<option>Botswana</option>
			<option>Brasile</option>
			<option>Brunei Darussalam</option>
			<option>Bulgaria</option>
			<option>Burkina Faso</option>
			<option>Burma</option>
			<option>Burundi</option>
			<option>Cambogia</option>
			<option>Camerun</option>
			<option>Canada</option>
			<option>Ciad</option>
			<option>Cile</option>
			<option>Cina</option>
			<option>Cipro</option>
			<option>Citt&iuml;&iquest;&frac12;del Vaticano</option>
			<option>Colombia</option>
			<option>Comoros</option>
			<option>Congo, Repubblica</option>
			<option>Congo, Repubblica Democratica</option>
			<option>Corea del Sud</option>
			<option>Costa d'Avorio</option>
			<option>Costa Rica</option>
			<option>Croazia, Repubblica</option>
			<option>Danimarca</option>
			<option>Dominica</option>
			<option>Ecuador</option>
			<option>Egitto</option>
			<option>El Salvador</option>
			<option>Emirati Arabi Uniti</option>
			<option>Eritrea</option>
			<option>Estonia</option>
			<option>Etiopia</option>
			<option>Federazione Russa</option>
			<option>Figi</option>
			<option>Filippine</option>
			<option>Finlandia</option>
			<option>Francia</option>
			<option>Gambia</option>
			<option>Georgia</option>
			<option>Germania</option>
			<option>Ghana</option>
			<option>Giamaica</option>
			<option>Giappone</option>
			<option>Gibilterra</option>
			<option>Gibuti</option>
			<option>Giordania</option>
			<option>Grecia</option>
			<option>Grenada</option>
			<option>Groenlandia</option>
			<option>Guadalupe</option>
			<option>Guam</option>
			<option>Guatemala</option>
			<option>Guernsey</option>
			<option>Guinea</option>
			<option>Guinea-Bissau</option>
			<option>Guinea Equatoriale</option>
			<option>Guyana</option>
			<option>Guyana Francese</option>
			<option>Haiti</option>
			<option>Honduras</option>
			<option>Hong Kong</option>
			<option>India</option>
			<option>Indonesia</option>
			<option>Irlanda</option>
			<option>Islanda</option>
			<option>Isole di Capo Verde</option>
			<option>Isole Cayman</option>
			<option>Isole Cook</option>
			<option>Isole Falkland (Islas Malvinas)</option>
			<option>Isole Marshall</option>
			<option>Isole Salomone</option>
			<option>Isole Turks e Caicos</option>
			<option>Isole Vergini Britanniche</option>
			<option>Isole Vergini (U.S.A.)</option>
			<option>Israele</option>
			<option>Italia</option>
			<option>Jan Mayen</option>
			<option>Jersey</option>
			<option>Kazakistan</option>
			<option>Kenya</option>
			<option>Kiribati</option>
			<option>Kuwait</option>
			<option>Kyrgyzstan</option>
			<option>Laos</option>
			<option>Lesotho</option>
			<option>Lettonia</option>
			<option>Libano</option>
			<option>Liberia</option>
			<option>Liechtenstein</option>
			<option>Lituania</option>
			<option>Lussemburgo</option>
			<option>Macao</option>
			<option>Macedonia</option>
			<option>Madagascar</option>
			<option>Malawi</option>
			<option>Maldive</option>
			<option>Malesia</option>
			<option>Mali</option>
			<option>Malta</option>
			<option>Marocco</option>
			<option>Martinica</option>
			<option>Mauritania</option>
			<option>Mauritius</option>
			<option>Mayotte</option>
			<option>Messico</option>
			<option>Micronesia</option>
			<option>Moldova</option>
			<option>Monaco</option>
			<option>Mongolia</option>
			<option>Montserrat</option>
			<option>Mozambico</option>
			<option>Namibia</option>
			<option>Nauru</option>
			<option>Nepal</option>
			<option>Nicaragua</option>
			<option>Niger</option>
			<option>Nigeria</option>
			<option>Niue</option>
			<option>Norvegia</option>
			<option>Nuova Caledonia</option>
			<option>Nuova Zelanda</option>
			<option>Oman</option>
			<option>Paesi Bassi</option>
			<option>Pakistan</option>
			<option>Palau</option>
			<option>Panama</option>
			<option>Papuasia Nuova Guinea</option>
			<option>Paraguay</option>
			<option>Per</option>
			<option>Polinesia Francese</option>
			<option>Polonia</option>
			<option>Portogallo</option>
			<option>Porto Rico</option>
			<option>Qatar</option>
			<option>Regno Unito</option>
			<option>Repubblica dell'Azerbaijan</option>
			<option>Repubblica Ceca</option>
			<option>Repubblica Centrafricana</option>
			<option>Repubblica Dominicana</option>
			<option>Repubblica di Gabon</option>
			<option>Romania</option>
			<option>Ruanda</option>
			<option>Sahara Occidentale</option>
			<option>Samoa Americane</option>
			<option>Samoa Occidentale</option>
			<option>St. Elena</option>
			<option>St. Kitts-Nevis</option>
			<option>St. Pierre e Miquelon</option>
			<option>San Marino</option>
			<option>San Vincenzo e Grenadine</option>
			<option>Santa Lucia</option>
			<option>Senegal</option>
			<option>Seychelles</option>
			<option>Sierra Leone</option>
			<option>Singapore</option>
			<option>Siria</option>
			<option>Slovacchia</option>
			<option>Slovenia</option>
			<option>Somalia</option>
			<option>Spagna</option>
			<option>Sri Lanka</option>
			<option>Stati Uniti</option>
			<option>Sudafrica</option>
			<option>Suriname</option>
			<option>Svalbard</option>
			<option>Svezia</option>
			<option>Svizzera</option>
			<option>Swaziland</option>
			<option>Tahiti</option>
			<option>Tailandia</option>
			<option>Taiwan</option>
			<option>Tajikistan</option>
			<option>Tanzania</option>
			<option>Togo</option>
			<option>Tonga</option>
			<option>Trinidad e Tobago</option>
			<option>Tunisia</option>
			<option>Turchia</option>
			<option>Turkmenistan</option>
			<option>Tuvalu</option>
			<option>Ucraina</option>
			<option>Uganda</option>
			<option>Ungheria</option>
			<option>Uruguay</option>
			<option>Uzbekistan</option>
			<option>Vanuatu</option>
			<option>Venezuela</option>
			<option>Vietnam</option>
			<option>Wallis e Futuna</option>
			<option>Yemen</option>
			<option>Yugoslavia</option>
			<option>Zambia</option>
			<option>Zimbabwe</option>
	  </select>";
	}
}
/*fine utenti*/
	
?>