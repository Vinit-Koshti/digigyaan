<!--peerxp-->

<?php
session_start();

$file = "upload/server/php/downloads/".$_SESSION["userid"]."_".$_SESSION["random_num"]."_ocr.pdf";
$naam = $_SESSION["userid"]."_".$_SESSION["random_num"]."_ocr.pdf";

if(!$file){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$naam");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
	
}
//$output=shell_exec('rm '.$file);

?>

