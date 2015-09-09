<?php
header("Content-type: text/html; charset=utf-8");
$db=new DB();
$db->_connect();
$num = $_POST['num'];
$nicheng = $_POST['nicheng'];
$level = $_POST['level'];
$information = $_POST['information'];
$sql = "insert into admin(num,nicheng,level,information) values('$num','$nicheng','$level','$information') ";
// $open=fopen("a.txt","a" );
// fwrite($open,$sql);
// fwrite($open,"Sd");
// fclose($open);
$result = @mysql_query($sql);
$arr = array();
if ($result){
	$arr = array ('statusCode'=>200,'message'=>"添加成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
	
} else {
	$arr = array ('statusCode'=>300,'message'=>"操作失败",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
}
foreach ( $arr as $key => $value ) {
    $arr[$key] = urlencode ( $value );
}
echo urldecode ( json_encode ( $arr ) );
?>