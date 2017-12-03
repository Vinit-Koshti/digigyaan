<!--peerxp-->

<?php

session_start();

if (!isset($_SESSION["random_num"])) {
    $_SESSION["random_num"] = 1;
}
else
{
	$_SESSION["random_num"] += 1;
}


$_SESSION["userid"] = substr(session_id(),15);//substring of session, last 11 char

$_SESSION["isPDF"] = 0;//not a pdf
$_SESSION["uploadType"] = 0; //0 for single upload, 1 for multiple upload

$dirdest = "upload/server/php/files/".$_SESSION["userid"]."_".$_SESSION["random_num"];
mkdir($dirdest,0777);


?>


<html>
<head>
    <meta charset="utf-8" />
    <title>Raj DigiGyaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  
<?php include '../ocr_webapp/header.php';?>
<?php include '../ocr_webapp/ocr-main.php';?>

</body>
</html>
