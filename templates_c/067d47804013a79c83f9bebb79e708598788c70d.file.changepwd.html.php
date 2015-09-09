<?php /* Smarty version Smarty-3.1.16, created on 2015-07-07 09:05:38
         compiled from "view_html\changepwd.html" */ ?>
<?php /*%%SmartyHeaderCode:15724559b8c71025980-01570771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '067d47804013a79c83f9bebb79e708598788c70d' => 
    array (
      0 => 'view_html\\changepwd.html',
      1 => 1436259704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15724559b8c71025980-01570771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_559b8c711dfe71_48119747',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b8c711dfe71_48119747')) {function content_559b8c711dfe71_48119747($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
	<form method="post" action="index.php?p=changeCheck" class="pageForm" onsubmit="return validateCallback(this, dialogMyAjaxDone)">
		<div class="pageFormContent" layoutH="58">
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" name="user">
			<div class="unit">
				<label>旧密码：</label>
				<input type="password" name="oldPassword" size="30" maxlength="100" class="required"/>
			</div>
			<div class="unit">
				<label>新密码：</label>
				<input type="password" name="newPassword" size="30" class="required alphanumeric"/>
			</div>
			<div class="unit">
				<label>重复输入新密码：</label>
				<input type="password" name="rnewPassword" size="30" class="required alphanumeric"/>
			</div>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>
<?php }} ?>
