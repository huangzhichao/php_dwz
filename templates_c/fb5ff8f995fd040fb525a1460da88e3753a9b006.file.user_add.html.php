<?php /* Smarty version Smarty-3.1.16, created on 2015-03-26 14:36:59
         compiled from "view_html\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:298125513a7e4ddde63-27665286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb5ff8f995fd040fb525a1460da88e3753a9b006' => 
    array (
      0 => 'view_html\\user_add.html',
      1 => 1427351815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298125513a7e4ddde63-27665286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513a7e4e29eb0_38518635',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513a7e4e29eb0_38518635')) {function content_5513a7e4e29eb0_38518635($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="addact.php?p=user" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<p>
					<label>用户名：</label>
					<input name="name" class="required" type="text" value="" size="30" alt="请输入用户名："/>
				</p>
				<p>
					<label>账号：</label>
					<input name="uname" class="required" type="text" value="" size="30" alt="请输入账号"/>
				</p>
				<p>
					<label>密码：</label>
					<input name="password" class="required" value="" type="password" size="30" alt="请输入密码"/>
				</p>
			</div>
			<div class="formBar">
				<ul>
					<!-- <li><a class="buttonActive" href="#"><span>保存</span></a></li>
					<li><input type="submit" class="buttonActive" href="#" value="保存" /></li> -->
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
					<li>
						<div class="button"><div class="buttonContent"><button class="close" type="Button" value="关闭">取消</button></div></div>
						<!-- <div class="button"><div class="buttonContent"><button type="Button" onclick="navTab.closeCurrentTab()">取消</button></div></div> -->
					</li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>
