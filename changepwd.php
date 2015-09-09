<?php
	include("config/config.ini.php");
	session_start();
	$user=$_SESSION['user'];
	$smarty->assign("user",$user);
	$open=fopen("a.txt","a" );
	fwrite($open,$user);
	fclose($open);
	$smarty->display("view_html/changepwd.html");
?>