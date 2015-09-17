
<?php 
	session_start();
	include "estensionepagine.php"; 
	$paginainiziale="http://www.gestionemessaggi.com/";
	$primapagina="carrello.php";
	$secondapagina="carrello-passo-2.php";
	$terzapagina="carrello-passo-3.php";
	$confermaordine="carrello-passo-4.php";

?>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/attiva.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="carrello/css/carrello.css" media="screen" />
	<script type="text/javascript">
		// <![CDATA[
			(function(d,e,c,i,b,el,it) {
				d._da_=d._da_||[];_da_.oldErr=d.onerror;_da_.err=[];
				d.onerror=function(){_da_.err.push(arguments);_da_.oldErr&&_da_.oldErr.apply(d,Array.prototype.slice.call(arguments));};
				d.DecibelInsight=b;d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments);};
				el=e.createElement(c),it=e.getElementsByTagName(c)[0];el.async=1;el.src=i;it.parentNode.insertBefore(el,it);
			})(window,document,'script','//decibelinsight.net/i/20448/di.js','decibelInsight');
		// ]]>
		</script>
		<!-- Fine -->
		</head>

	<div class="screenshot">
		<img src="immages/assistenza.gif" alt="">
	</div>
<?php 
	include "carrello/carrello.php"; 
?>

