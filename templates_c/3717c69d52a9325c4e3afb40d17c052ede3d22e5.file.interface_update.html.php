<?php /* Smarty version Smarty-3.1.16, created on 2015-03-26 14:47:27
         compiled from "view_html\interface_update.html" */ ?>
<?php /*%%SmartyHeaderCode:214475513ab7f1a7f09-46184048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3717c69d52a9325c4e3afb40d17c052ede3d22e5' => 
    array (
      0 => 'view_html\\interface_update.html',
      1 => 1427110591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214475513ab7f1a7f09-46184048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flag' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513ab7f224079_51067222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513ab7f224079_51067222')) {function content_5513ab7f224079_51067222($_smarty_tpl) {?><script type="text/javascript">
		var s = <?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
;
		if(s==0){
			$.pdialog.closeCurrent();
		}
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="updateact.php?p=interface" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
				<p>
					<label>接口名：</label>
					<input name="interfaceName" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['interface_name'];?>
" alt="请输入接口名称"/>
				</p>
				<p>
					<label>接口URL：</label>
					<!-- <input name="code" class="digits" type="text" size="30" alt="请输入数字"/> -->
					<input name="interfaceURL" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['interface_url'];?>
" alt="请输入接口URL"/>
				</p>
				<p>
					<label>请求样例：</label>
					<textarea name="interfaceRequest" class="required" type="text" size="35" rows="8" cols="30"><?php echo $_smarty_tpl->tpl_vars['arr']->value['interface_request'];?>
</textarea>
					
				</p><p></p><p></p><p></p>
				<p>
					<label>响应样例：</label>
					<textarea name="interfaceResponse" class="required" type="text" size="35" alt="请输入请求样例" rows="8" cols="30"><?php echo $_smarty_tpl->tpl_vars['arr']->value['interface_response'];?>
</textarea>
					
				</p><p></p><p></p><p></p>
				<p>
					<label>创建人：</label>
					<input name="user" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['user'];?>
" alt="请输入接口创建人"/>
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
