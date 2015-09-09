<?php
$name=$_SESSION['wzdx_name'];
$position=$_SESSION['wzdx_position'];
$smarty->assign("position",$position);
$smarty->assign("name",$name);
$smarty->display("wzdx_view_html/admin.html");

?>