<?php
if(isset($_POST['banner']) and strlen($_POST['banner'])>0){
	$filename= "controllo.php";
	if($_POST['banner']=="1"){ 
		$contenuto = "<?php ".chr(36)."assistenza='attivo'; ?>"; 
	}else{
		$contenuto = "<?php ".chr(36)."assistenza='disattivo'; ?>"; 
	}
	
	$handle=fopen($filename,"w"); //apre il file
	fwrite($handle, $contenuto);
	fclose($handle);
}

include "controllo.php";
?>
<div style="color: #ff0000; font-size: 20px; height: 30px; padding: 10px; width: 170px; border: 1px solid #ff0000; margin-bottom: 10px;">
	Banner <?php print $assistenza; ?>
</div>


<div style="float: left; margin-right: 10px;">
<form action="banner.php" method="POST">
	<input type="hidden" name="banner" id="banner" value="1" />
	<input type="Submit" name="cmd" id="cmd" value="Attiva" />
</form>	
</div>

<div style="float: left;">
<form action="banner.php" method="POST">
	<input type="hidden" name="banner" id="banner" value="0" />
	<input type="Submit" name="cmd" id="cmd" value="Disattiva" />
</form>	
</div>