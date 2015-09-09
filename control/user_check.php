<?php
$db=new DB();
$view_state=$_POST['view_state'];
$username=$_POST['username'];
$password=$_POST['password'];

$view_state=$db->escapeStringTODb($view_state);
$username=$db->escapeStringTODb($username);
$password=$db->escapeStringTODb($password);

$password=md5($password);

if(strcasecmp($_SESSION['rand'], $view_state)){
	echo "<script>window.location.href='".BASEURL."'</script>";
}
else
{
	$sql="select * from admin where username='$username' and password='$password'";
	$row = $db->getObjListBySql($sql);
	if(!$row){
		 echo "<script>window.alert('账号密码错误');window.location.href='".BASEURL."'</script>";
	}
	else{
		$_SESSION['name']=$row[0]['name'];
		$_SESSION['user']=$row[0]['username'];	
		$_SESSION['flag']=1;
		echo "<script>window.location.href='".BASEURL."frame.php?p=index'</script>";
	}
}
?>