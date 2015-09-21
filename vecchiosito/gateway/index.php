<?
/***
SCRIPT simple_get.php
***/
//http://www.gestionemessaggi.com/gateway/index.php
function get_data($url)
{
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
if (strlen($_GET["user"]) > 0 && strlen($_GET["pass"]) > 0 &&  $_GET["type"] =="hqs" ) {
	print get_data("http://sms.tol.it/sms/credit.php?user=".$_GET["user"]."&pass=".$_GET["pass"]."&type=lqs");
	
}
if (strlen($_GET["user"]) > 0 && strlen($_GET["pass"]) > 0 &&  strlen($_GET["data"]) > 0 ) {

	 
	print get_data("http://sms.tol.it/sms/send.php?user=".$_GET["user"]."&pass=".$_GET["pass"]."&sender=".urlencode($_GET["sender"])."&rcpt=%2b39".$_GET["rcpt"]."&data=".urlencode($_GET["data"])."&qty=ll");
	
}
?>


