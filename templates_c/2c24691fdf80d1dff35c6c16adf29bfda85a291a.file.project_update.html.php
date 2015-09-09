<?php /* Smarty version Smarty-3.1.16, created on 2015-03-29 09:14:39
         compiled from "view_html\project_update.html" */ ?>
<?php /*%%SmartyHeaderCode:20352551751ffafbff4-91007022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c24691fdf80d1dff35c6c16adf29bfda85a291a' => 
    array (
      0 => 'view_html\\project_update.html',
      1 => 1427109163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20352551751ffafbff4-91007022',
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
  'unifunc' => 'content_551751ffd55dc3_96111614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551751ffd55dc3_96111614')) {function content_551751ffd55dc3_96111614($_smarty_tpl) {?><script type="text/javascript">
		var s = <?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
;
		if(s==0){
			$.pdialog.closeCurrent();
		}
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="updateact.php?p=project" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
				<p>
					<label>项目名：</label>
					<input name="projectName" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['project_name'];?>
" alt="请输入项目名称"/>
				</p>
				<p>
					<label>项目负责人：</label>
					<input name="projectManager" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['project_manager'];?>
" alt="请输入项目负责人"/>
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
