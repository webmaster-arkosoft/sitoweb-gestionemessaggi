<?php
include "contatore.php";
$filename= "contatore.php";
$aggbando=$download+1;
$contenuto1 = "<?php ".chr(36)."download=".$aggbando."; ?>";
$handle1=fopen($filename,"w"); //apre il file
fwrite($handle1, $contenuto1);
fclose($handle1);

header('Location: http://www.gestionemessaggi.com/download/gestionemessaggi.exe');
?>