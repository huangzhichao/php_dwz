<?php
/*
 导入配置文件
*/
ini_set('session.save_path', dirname(__FILE__).'/session'); 
session_start();
$lifeTime =  3600; 
setcookie(session_name(), session_id(), time() + $lifeTime, "/"); 
if(!isset($_SESSION['flag'])){
	$_SESSION['flag']=0;
	$_SESSION['user']="";
	
}
function check_session(){
	 if(isset($_SESSION['flag'])&&$_SESSION['flag']==1&&isset($_SESSION['user'])&&$_SESSION['user']!="")
	 	return true;
	 else
	 	return false;
}
include("config/config.ini.php");

$smarty->assign("username",$_SESSION['user']);
$smarty->assign("flag",$_SESSION['flag']);
if(!isset($_GET['p'])||!check_session()){
	include("control/login.php");
}else{
	$p=$_GET['p'];
	if(isset($_GET['id'])&&$_GET['id']){
		$str = explode('@@',$_GET['p']);
		$p = $str[0];
		$type = $str[1];
		$control = new Control($smarty);
		$arr = $control->detail($p,$_GET['id'],$type);
		$smarty->assign("arr",$arr);
		$smarty->assign("flag",1);
		$smarty->assign("id",$_GET['id']);
		$smarty->assign("result",$arr['result']);
		$smarty->assign("type",$type);
		$smarty->display("view_html/".$p."_detail.html");
	}else{
		$smarty->assign("flag",0);
  		$smarty->display("view_html/".$p."_detail.html");
	}
}
?>