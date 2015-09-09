<?php /* Smarty version Smarty-3.1.16, created on 2015-07-07 13:44:19
         compiled from "view_html\test_update.html" */ ?>
<?php /*%%SmartyHeaderCode:5543559b663be23c76-49754469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bbfc3c42677a311abdd70c985d23b8063931ee' => 
    array (
      0 => 'view_html\\test_update.html',
      1 => 1436247850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5543559b663be23c76-49754469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_559b663c0cd526_07225280',
  'variables' => 
  array (
    'flag' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b663c0cd526_07225280')) {function content_559b663c0cd526_07225280($_smarty_tpl) {?><script type="text/javascript">
		var s = <?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
;
		if(s==0){
			$.pdialog.closeCurrent();
		}
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="updateact.php?p=test" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
				<p>
					<label>字段1：</label>
					<input name="field1" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['field1'];?>
" alt="请输入字段1"/>
				</p>
				<p>
					<label>字段2：</label>
					<input name="field2" class="required" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['field2'];?>
" alt="请输入字段2"/>
				</p>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
					<li>
						<div class="button"><div class="buttonContent"><button class="close" type="Button" value="关闭">取消</button></div></div>
					</li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>
