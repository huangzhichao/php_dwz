<?php
$date= date('y-m-d h:i:s',time());
$smarty->assign("date",$date);
$smarty->assign("people",$_SESSION['name']);
$smarty->display("view_html/index.html");
?>