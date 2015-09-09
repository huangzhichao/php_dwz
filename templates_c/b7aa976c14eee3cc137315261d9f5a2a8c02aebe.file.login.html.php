<?php /* Smarty version Smarty-3.1.16, created on 2015-03-26 14:37:51
         compiled from "view_html\login.html" */ ?>
<?php /*%%SmartyHeaderCode:287715513a93f20fd43-96216356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7aa976c14eee3cc137315261d9f5a2a8c02aebe' => 
    array (
      0 => 'view_html\\login.html',
      1 => 1427083079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287715513a93f20fd43-96216356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513a93f260b54_45881710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513a93f260b54_45881710')) {function content_5513a93f260b54_45881710($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台系统登录</title>

<link href="resourse/css/main.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div class="login">
    <div class="box png">
		<div class="logo png"></div>
		<div class="input">
			<div class="log">
			<form action="index.php?p=user_check"  method="post">
				<div class="name">
					<label>用户名</label><input type="text" class="text" id="username" placeholder="用户名" name="username" tabindex="1">
					<input type="hidden" name="view_state" value="<?php echo $_smarty_tpl->tpl_vars['view_state']->value;?>
">
				</div>
				<div class="pwd">
					<label>密　码</label><input type="password" class="text" id="value_2" placeholder="密码" name="password" tabindex="2">
					<input type="submit" class="submit" tabindex="3" value="登录">
					<div class="check"></div>
				</div>
			</form>	
				<div class="tip"></div>
			</div>
		</div>
	</div>
    <div class="air-balloon ab-1 png"></div>
	<div class="air-balloon ab-2 png"></div>
    <div class="footer"></div>
</div>

<script type="text/javascript" src="resourse/js/jQuery.js"></script>
<script type="text/javascript" src="resourse/js/fun.base.js"></script>
<script type="text/javascript" src="resourse/js/script.js"></script>


<!--[if IE 6]>
<script src="resourse/js/DD_belatedPNG.js" type="text/javascript"></script>
<script>DD_belatedPNG.fix('.png')</script>
<![endif]-->

</body>
</html><?php }} ?>
