<?php
$db=new DB();
$user=$_POST['user'];
$oldPassword=$_POST['oldPassword'];
$newPassword=$_POST['newPassword'];

$oldPassword=$db->escapeStringTODb($oldPassword);
$newPassword=$db->escapeStringTODb($newPassword);
$user=$db->escapeStringTODb($user);

$oldPassword=md5($oldPassword);
$newPassword=md5($newPassword);
$arr = array();
$sql="select * from admin where username='$user' and password='$oldPassword'";
$row = $db->getObjListBySql($sql);
if(!$row){
	$arr = array ('statusCode'=>200,'message'=>"密码错误",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
}
else{
	//$sql="update  admin set password='".$newPassword."' where username='$user' and password='$oldPassword'";
	$columns[0] = "password";
	$values[0] = $newPassword;
	$row = $db->updateParamById("admin",$columns,$values,"username",$user);
	$arr = array ('statusCode'=>200,'message'=>"修改成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
}
echo json_encode($arr);
?>