<?php
/*
 导入配置文件
*/
ini_set('session.save_path', dirname(__FILE__).'/session'); 
session_start();
$lifeTime =  3600; 
setcookie(session_name(), session_id(), time() + $lifeTime, "/"); 
if(!isset($_SESSION['flag']))
{
	$_SESSION['wzdx_flag']=0;
	$_SESSION['wzdx_user']="";
	
}
function check_session()
{
	 if(isset($_SESSION['wzdx_flag'])&&$_SESSION['wzdx_flag']==1&&isset($_SESSION['wzdx_user'])&&$_SESSION['wzdx_user']!="")
	 	return true;
	 else
	 	return false;
}
include("wzdx_config/config.ini.php");
include("wzdx_config/main.ini.php");
include("wzdx_classes_php/selectPage.class.php");

$smarty->assign("username",$_SESSION['user']);
$smarty->assign("flag",$_SESSION['flag']);
//自动导入class
/*
function __autoload($className) {
    require "kc_classes_php/".$className.'.class.php';
}
*/
 

if(!isset($_GET['p']))
{
	$p="login";
	$page="wzdx_control/index.php";
}
else
{
$p=$_GET['p'];
$selectPageT=new selectPage($p);
$page=$selectPageT->_get_list_page();
if(strcasecmp("index.php", $page)==0)
{
	$page="wzdx_control/index.php";
}  
else
{
$page="ajax_jquery/".$page;
}
}
include($page);


?>