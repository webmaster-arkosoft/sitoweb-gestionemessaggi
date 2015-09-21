<html>
	<head>
		<title>Gestione Messaggi Scarica</title>
		<?php include "analitycs.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/download.js"></script>
	</head>
	<body>
		<div class="generale">
			<div class="sopra">
				<div class="boxsopra">
					<div class="logo"><a href="index.html" title="Gestione Messaggi"><img src="immagini/logo.png" /></a></div>
					<div class="mainsubmenu">
						<div class="submenu">
							<div class="submenu-active1">&nbsp;</div>
							<div class="submenu-active2">
								<a href="download.html" class="subattivo1" title="Ultima versione">Ultima versione</a>
							</div>
							<div class="submenu-active3">&nbsp;</div>
						</div>
					</div>
					<div class="mainmenu">
						<a href="index.html" class="linkmenu" title="Download">Perchè GM?</a>
						<div class="mainmenu-active">
							<div class="mainmenu-active1">&nbsp;</div>
							<div class="mainmenu-active2"><a href="" title="Download?">Scarica</a></div>
							<div class="mainmenu-active3">&nbsp;</div>
						</div>
						<a href="/sms-marketing/index.html" class="linkmenu" title="Permalink a Guida per software di Sms marketing">Guida</a> 
						<a href="acquista.html" class="linkmenu" title="Acquista">Acquista</a>
						<a href="azienda.html" class="linkmenu" title="Azienda">Azienda</a>
					</div>
				</div>
			</div>
			<div class="header3">
				<div class="descmotto">
					<h4>Scarica Gestione Messaggi</h4>
					<div>
						<a href="download.html#download" title="Scarica Gestione Messaggi">Scarica</a> la versione per 30 giorni di Gestione Messaggi e inizia da subito ad inviare sms ai tuoi clienti.<br /><br />
						
						Per tutti quelli che non hanno un telefonino supportato dal programma, <a href="crediti.html" title="Crediti Gestione Messaggi">cliccando qui</a> è possibile acquistare i nostri pacchetti di sms.
					</div>
				</div>
			</div>
			<div class="sotto">&nbsp;</div>
			<div <?php if(strlen($messaggio)>0){ print "class='boxdownload'";}else{ print "class='boxdownload1'";} ?>>
				<div class="download" id="download">
					<div <?php if(strlen($messaggio)>0){ print "class='totaledown'";}else{ print "class='totaledown1'";} ?>>
						<div class="boxsinistra">
							<div class="titolodownload">Scarica Gratis la versione per 30 giorni</div>
							<div class="sottotitolodownload">Compila i seguenti campi per effettuare il download</div>
							<div class="messaggio" id="messaggio"><?php print $messaggio; ?></div>
							<div class="campoobbligatorio">Campo obbligatorio(*)</div>
						</div>
						<div class="boxdestra">&nbsp;</div>	
					</div>	
				
				<form action="inviodownload.html#messaggio" method="POST" name="scarica" id="scarica" Onsubmit="javascript: return controllodownload();">
					<div class="campodownload"><div>Ragione Sociale</div></div>
					<div class="inputdownload"><input type="text" name="societa" id="societa" value="<?php print $ragionesociale; ?>" /></div>
					
					<div class="campodownload"><div>Tipologia</div></div>
					<div class="inputdownload1">
						<select name="tipo" id="tipo">
							<?php if(strlen($tipo)>0 and $tipo!='0'){ print "<option value=".$tipo.">".$tipo."</option>";}?>
							<option value="0">-----seleziona-----</option>
							<option value="S.A.S.">S.A.S.</option>
							<option value="S.N.C.">S.N.C.</option>
							<option value="S.R.L.">S.R.L.</option>
							<option value="S.P.A.">S.P.A.</option>
							<option value="Ditta Individuale">Ditta Individuale</option>
						</select>
						altro <input type="text" name="altro" id="altro" value="<? print $altro;?>" />
					</div>

					<div class="campodownload"><div>Cognome*</div></div>
					<div class="inputdownload"><input type="text" name="cognome" id="cognome" value="<?php print $cognome; ?>"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
					
					<div class="campodownload"><div>Nome*</div></div>
					<div class="inputdownload"><input type="text" name="nome" id="nome" value="<?php print $nome; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
					
					<div class="campodownload"><div>Partita Iva</div></div>
					<div class="inputdownload"><input type="text" name="piva" id="piva" value="<?php print $partitaiva; ?>" /></div>
					
					<div class="campodownload"><div>Cod. Fiscale</div></div>
					<div class="inputdownload"><input type="text" name="codfiscale" id="codfiscale" value="<?php print $codfiscale; ?>" /></div>
					
					<div class="campodownload"><div>Telefono</div></div>
					<div class="inputdownload"><input type="text" name="telefono" id="telefono" value="<?php print $telefono; ?>" /></div>

					<div class="campodownload"><div>E-mail*</div></div>
					<div class="inputdownload"><input type="text" name="email" id="email" value="<?php print $email; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
					
					<div class="campodownload"><div>Conferma E-mail*</div></div>
					<div class="inputdownload"><input type="text" name="cemail" id="cemail" value="<?php print $cemail; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>

					<div class="campodownload"><div>Cap*</div></div>
					<div class="inputdownload2">
						<input type="text" name="cap" id="cap" value="<?php print $cap; ?>" class="capdownload"  Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/>&nbsp;&nbsp; 
						Città* <input type="text" class="cittadownload" name="citta" id="citta" value="<?php print $citta; ?>"   Onclick="javascript: svuota(this.value);" onkeypress="javascript: svuota(this.value);"/>&nbsp;&nbsp;
						Prov* <select name="prov" id="prov">
							<?php if(strlen($prov)>0 and $prov!='0'){ print "<option value=".$prov.">".$prov."</option>";}?>
							<option value="0">Prov</option>
							<option value="AG">AG</option>
							<option value="AL">AL</option>
							<option value="AN">AN</option>
							<option value="AO">AO</option>
							<option value="AP">AP</option>
							<option value="AQ">AQ</option>
							<option value="AR">AR</option>
							<option value="AT">AT</option>
							<option value="AV">AV</option>
							<option value="BA">BA</option>
							<option value="BG">BG</option>
							<option value="BI">BI</option>
							<option value="BL">BL</option>
							<option value="BN">BN</option>
							<option value="BO">BO</option>
							<option value="BR">BR</option>
							<option value="BS">BS</option>
							<option value="BZ">BZ</option>
							<option value="CA">CA</option>
							<option value="CB">CB</option>
							<option value="CE">CE</option>
							<option value="CH">CH</option>
							<option value="CL">CL</option>
							<option value="CN">CN</option>
							<option value="CO">CO</option>
							<option value="CR">CR</option>
							<option value="CS">CS</option>
							<option value="CT">CT</option>
							<option value="CZ">CZ</option>
							<option value="EN">EN</option>
							<option value="FE">FE</option>
							<option value="FG">FG</option>
							<option value="FI">FI</option>
							<option value="FO">FO</option>
							<option value="FR">FR</option>
							<option value="GE">GE</option>
							<option value="GO">GO</option>
							<option value="GR">GR</option>
							<option value="IM">IM</option>
							<option value="IS">IS</option>
							<option value="KR">KR</option>
							<option value="LC">LC</option>
							<option value="LE">LE</option>
							<option value="LI">LI</option>
							<option value="LO">LO</option>
							<option value="LT">LT</option>
							<option value="LU">LU</option>
							<option value="MC">MC</option>
							<option value="ME">ME</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MO">MO</option>
							<option value="MS">MS</option>
							<option value="MT">MT</option>
							<option value="NA">NA</option>
							<option value="NO">NO</option>
							<option value="NU">NU</option>
							<option value="OR">OR</option>
							<option value="PA">PA</option>
							<option value="PC">PC</option>
							<option value="PD">PD</option>
							<option value="PE">PE</option>
							<option value="PG">PG</option>
							<option value="PI">PI</option>
							<option value="PN">PN</option>
							<option value="PO">PO</option>
							<option value="PR">PR</option>
							<option value="PS">PS</option>
							<option value="PT">PT</option>
							<option value="PV">PV</option>
							<option value="PZ">PZ</option>
							<option value="RA">RA</option>
							<option value="RC">RC</option>
							<option value="RE">RE</option>
							<option value="RG">RG</option>
							<option value="RI">RI</option>
							<option value="RM">RM</option>
							<option value="RN">RN</option>
							<option value="RO">RO</option>
							<option value="SA">SA</option>
							<option value="SI">SI</option>
							<option value="SO">SO</option>
							<option value="SP">SP</option>
							<option value="SR">SR</option>
							<option value="SS">SS</option>
							<option value="SV">SV</option>
							<option value="TA">TA</option>
							<option value="TE">TE</option>
							<option value="TN">TN</option>
							<option value="TO">TO</option>
							<option value="TP">TP</option>
							<option value="TR">TR</option>
							<option value="TS">TS</option>
							<option value="TV">TV</option>
							<option value="UD">UD</option>
							<option value="VA">VA</option>
							<option value="VB">VB</option>
							<option value="VC">VC</option>
							<option value="VE">VE</option>
							<option value="VI">VI</option>
							<option value="VR">VR</option>
							<option value="VT">VT</option>
							<option value="VV">VV</option>
						</select>
					</div>
					
					<div class="campodownload"><div>Indirizzo*</div></div>
					<div class="inputdownload"><input type="text" name="indirizzo" id="indirizzo" value="<?php print $indirizzo; ?>"   Onclick="javascript:  svuota(this.value);" onkeypress="javascript: svuota(this.value);"/></div>
					
					<div class="campodownload"><div>Cellulare/Fax</div></div>
					<div class="inputdownload"><input type="text" name="cellulare" id="cellulare" value="<?php print $cellulare; ?>" /></div>
					
					<div class="campodownload"><div>Legge Privacy*</div></div>
					<div class="textareadownload">
						<textarea name="richiesta" id="richiesta" cols="47" rows="7" READONLY>Ai sensi dell'art. 13 del D.Lgs 196/2003, i dati personali forniti ad Arkosoft saranno trattati in modo lecito, secondo correttezza e nell'assoluto rispetto della normativa vigente in materia di privacy, anche con l'ausilio di mezzi elettronici o comunque automatizzati che consentano la conservazione protetta degli stessi. Sempre per le medesime finalità, i dati personali possono venire a conoscenza dei dipendenti addetti all'Unità  di Arkosoft e/o di terzi che abbiano rapporti di servizio con la stessa, preposti al trattamento medesimo, in qualità  d'Incaricati del trattamento. I medesimi dati personali, previo suo specifico consenso, potranno anche essere utilizzati per finalità  di marketing (esempio invio di materiale pubblicitario omaggi e buoni sconti, indagini di mercato) da parte di Arkosoft. Tale consenso è facoltativo. Lei, quale soggetto interessato, ha la facoltà  di esercitare i diritti previsti dall'art. 7 del D.Lgs. 196/2003 ed, in particolare, ha il diritto di conoscere in ogni momento quali sono i suoi dati e come vengono utilizzati; ha anche il diritto di farli aggiornare, integrare, rettificare o cancellare, chiederne il blocco ed opporsi al loro trattamento.
La informiamo, inoltre, che il titolare del trattamento dei dati è Arkosoft, nella persona del Presidente del Consiglio di Amministrazione, domiciliato presso la sede della società  in via Casterllo 54 a San Pancrazio Salentino (Br) ,mentre il responsabile del trattamento dei dati è il Responsabile vendite clienti della divisione mercato di Arkosoft, domiciliato presso la sede della società  in via Castello,54 a San Pancrazio Salentino (Br).
						</textarea>
						<br />
					</div>
					<div class="checkdownload"><input type="checkbox" name="acconsento" id="acconsento" checked="checked"> Dichiaro di aver letto la Legge sulla Privacy</div>
					<input type="hidden" name="formscarica" id="formscarica" value="1" />
					<div class="bottonescarica"><input type="image" id="cmd" name="cmd" src="immagini/scarica.jpg" /></div>
				</form>
				</div>
			</div>
<?php 		include "footer.php"; ?> 
		</div>	
	</body>
</html>