<?php /* Smarty version Smarty-3.1.16, created on 2015-03-26 14:47:30
         compiled from "view_html\interface_add.html" */ ?>
<?php /*%%SmartyHeaderCode:322445513ab824c9de1-32252586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294140d06578d737089c6b9e06bfa13d2e81a7c9' => 
    array (
      0 => 'view_html\\interface_add.html',
      1 => 1427109983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322445513ab824c9de1-32252586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513ab825262b8_19534375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513ab825262b8_19534375')) {function content_5513ab825262b8_19534375($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="addact.php?p=interface&project=<?php echo $_smarty_tpl->tpl_vars['project']->value;?>
" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<p>
					<label>接口名：</label>
					<input name="interfaceName" class="required" type="text" size="30" alt="请输入接口名称"/>
				</p>
				<p>
					<label>接口URL：</label>
					<!-- <input name="code" class="digits" type="text" size="30" alt="请输入数字"/> -->
					<input name="interfaceURL" class="required" type="text" size="30" alt="请输入接口URL"/>
				</p>
				<p>
					<label>请求样例：</label>
					<textarea name="interfaceRequest" class="required" type="text" size="30" alt="请输入请求样例"></textarea>
				</p>
				<p>
					<label>响应样例：</label>
					<textarea name="interfaceResponse" class="required" type="text" size="30" alt="请输入请求样例"></textarea>
				</p>
				<p>
					<label>创建人：</label>
					<input name="user" class="required" type="text" size="30" alt="请输入接口创建人"/>
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
