<!--peerxp-->

<html>
<?php
session_start();
$_SESSION["bashFile"] = 'img2pdf.sh';

if($_SESSION["uploadType"]==1 && $_SESSION["isPDF"]==0)
{
	//echo "multi upload <br>";
	$_SESSION["bashFile"] = 'multi_img2pdf.sh';
	//echo 'sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"];
	//echo "<br>";
}
elseif($_SESSION["uploadType"]==1 && $_SESSION["isPDF"]==1)
{
	//echo "multi upload <br>";
	$_SESSION["bashFile"] = 'multi_pdf2pdf.sh';
	//echo 'sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"];
	//echo "<br>";
}
elseif($_SESSION["uploadType"]==0 && $_SESSION["isPDF"]==0)
{
	//echo "multi upload <br>";
	$_SESSION["bashFile"] = 'img2pdf.sh';
	//echo 'sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"];
	//echo "<br>";
}
elseif($_SESSION["uploadType"]==0 && $_SESSION["isPDF"]==1)
{
	//echo "multi upload <br>";
	$_SESSION["bashFile"] = 'pdf2pdf.sh';
	//echo 'sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"];
	//echo "<br>";
}


//echo 'sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"]."_".$_SESSION["random_num"].' '.$_SESSION["isPDF"];
$output=shell_exec('sudo /usr/lib/cgi-bin/'.$_SESSION["bashFile"].' '.$_SESSION["userid"]."_".$_SESSION["random_num"].' '.$_SESSION["isPDF"]);
echo "<pre>$output</pre>";
?>

<body>
<?php include '../ocr_webapp/upload/header.php';?>

<script>
    var hidden = true;
    function convert_action() {
        if(hidden) {
            document.getElementById('download').style.visibility = 'visible';
        } 
    }
</script>

<br><br><br>
<center>
<form action = "download.php">
	<button id="download" class="btn btn-primary start btn-lg">
                    <i class="glyphicon glyphicon-download"></i>
                    <span>Download</span>
	</button>
</form>

<br><br><br>
<?php include '../ocr_webapp/ocr-main.php';?>
<center>

</body>
</html>
