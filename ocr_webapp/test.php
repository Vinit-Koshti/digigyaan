<!--peerxp-->

<?php
session_start();
echo session_id();
$_SESSION["userid"]=substr(session_id(),15);
echo $_SESSION["userid"];
$output=shell_exec('sudo /usr/lib/cgi-bin/img2pdf.sh '.$_SESSION["userid"]);
echo "<pre>$output</pre>";
?>

