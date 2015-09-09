<?php
$rand_num=rand(1000,2000);
$_SESSION['rand']=passport_encrypt($rand_num,KEY_WORD);
$smarty->assign("view_state",$_SESSION['rand']);
$smarty->display("view_html/login.html");
?>