<?php /* Smarty version Smarty-3.1.16, created on 2015-07-08 10:03:12
         compiled from "view_html\test_add.html" */ ?>
<?php /*%%SmartyHeaderCode:28157559b6cb7bba998-76683484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e454b885c5705ffeb86bc4b0a1a6b8c2be591dd' => 
    array (
      0 => 'view_html\\test_add.html',
      1 => 1436257541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28157559b6cb7bba998-76683484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_559b6cb7ca2166_04254388',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b6cb7ca2166_04254388')) {function content_559b6cb7ca2166_04254388($_smarty_tpl) {?><script type="text/javascript">
	document.body.oncopy=function(){
		return true;
	}
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="addact.php?p=test" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<p>
					<label>字段1：</label>
					<input name="field1" class="required" type="text" size="30" alt="请输入字段1"/>
				</p>
				<p>
					<label>字段2：</label>
					<!-- <input name="code" class="digits" type="text" size="30" alt="请输入数字"/> -->
					<input name="field2" class="required" type="text" size="30" alt="请输入字段2"/>
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
