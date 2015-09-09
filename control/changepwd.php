<?php
	$user=$_SESSION['user'];
	$smarty->assign("user",$user);
	$smarty->display("view_html/changepwd.html");
?>