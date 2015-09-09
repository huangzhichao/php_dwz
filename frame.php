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
//自动导入class
/*
function __autoload($className) {
    require "kc_classes_php/".$className.'.class.php';
}
*/

if(!isset($_GET['p'])||!check_session()){
	$p="login";
	$page="control/login.php";
}else{
	$p=$_GET['p'];
	$page="control/".$p.".php";
}
include($page);
?>