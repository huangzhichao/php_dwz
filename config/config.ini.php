<?php
header("Content-type:text/html;charset=utf-8");
  /*
    网站前台整体配置程序
    网站错误信息的处理
    应用范围整个网站前台
  */
  /*
    设置出错信息报告发送邮箱
  */
$contact_email='503536307@qq.com';
ini_set('date.timezone','Asia/Shanghai');
  /*
    判断是否为本地调试
  */
if(stristr($_SERVER['HTTP_HOST'], 'local')||substr($_SERVER['HTTP_HOST'],0, 7)=='192.168'){
	$local=TRUE;
}else {
	$local=FALSE;
}
 /*
 如果是本地,配置出错信息处理错误
 */

if($local){
 	$debug=TRUE;
  	/*
        配置数据库
        前台根目录
        前台文件配置
  	*/

    define('DB_NAME','xxglxt');  
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','123456');
  	//前台根目录 
    define('BASEURL','http://localhost:85/school/xxglxt/');
    define('SMARTY','smarty/Smarty.class.php');//smarty存储位置
}else{
  	$debug=FALSE;

     /*
     define('DB_NAME','sq_hiedige');  
     define('DB_HOST','114.80.215.207');
     define('DB_USER','sq_hiedige');
     define('DB_PASSWORD','wqr12345');
     */
     //需修改
    // define('BASEURL','http://www.hiedige.com/wzdx/');
    define('SMARTY','smarty/Smarty.class.php');//smarty存储位置
    define('SMARTYCONFIG','config/smartyConfig.ini.php');//smarty存储位置
}
function myautoload($className){
//代码 这个里面找不到类不能退出，因为它还要继续搜寻下一个。退出的话就又报错了。
	require_once "classes_php/class.$className.php";
}

/*配置smarty*/
include(SMARTY);
$smarty= new Smarty();
spl_autoload_register('myautoload');
$smarty->template_dir="templates"; //设置模板存放目录
$smarty->compile_dir="templates_c"; // 设置编译目录
//设置左右界定符
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
$resource=BASEURL."view_html/";
$resource_up=BASEURL."/";
$smarty->assign("resource",$resource);
$smarty->assign("resource_up",$resource_up);
  /*
   错误处理函数
    1)如果是调试模式，显示错误信息
    2)如果不是,显示道歉信息，并发送电子邮件
    3)功能：非调试模式下，不会将错误暴露给任何用户
  */
function my_error_handler($e_number,$e_message,$e_file,$e_line,$e_vars){
	global $debug,$contact_email;
	$message="错误存在于文件".$e_file."第".$e_line."行:<br />".$e_message."<br />";
	$message.="时间：".date('n-j-y H:i:s')."<br>";
	$message.="<b>".print_r($e_vars,1)."</b><br>";
	if($debug){
		echo "<p class='errors'>".$message."</p>";
	}
	else{
          //error_log($message,1,$contact_email);//发送电子邮件
		if(($e_number!=E_NOTICE)&&($e_number<2048))
		{
            echo "<p class='errors'>由于我们的疏忽，导致系统故障。我们正在全力抢修，敬请谅解</p>";
		}
	}

}
   /*
    修改php默认错误处理
   */
set_error_handler('my_error_handler');
   //加密关键字
define("KEY_WORD","eage");
//
function _md5($str){
	return passport_encrypt($str,KEY_WORD);
}
function __md5($str){
	return passport_decrypt($str,KEY_WORD);
}
// 加密函数 适用于密码
function passport_encrypt($txt, $key) {
	srand((double)microtime() * 1000000);
	$encrypt_key = md5(rand(0, 32000));
	$ctr = 0;
	$tmp = '';
	for($i = 0;$i < strlen($txt); $i++) {
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		$tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
	}
	return base64_encode(passport_key($tmp, $key));
}
//解密函数 适用于密码
function passport_decrypt($txt, $key) {
	$txt = passport_key(base64_decode($txt), $key);
	$tmp = '';
	for($i = 0;$i < strlen($txt); $i++) {
		$md5 = $txt[$i];
		$tmp .= $txt[++$i] ^ $md5;
	}
	return $tmp;
}

function passport_key($txt, $encrypt_key) {
	$encrypt_key = md5($encrypt_key);
	$ctr = 0;
	$tmp = '';
	for($i = 0; $i < strlen($txt); $i++) {
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		$tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
	}
	return $tmp;
}
?>