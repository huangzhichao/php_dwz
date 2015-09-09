<?php /* Smarty version Smarty-3.1.16, created on 2015-04-09 14:23:52
         compiled from "view_html\project_add.html" */ ?>
<?php /*%%SmartyHeaderCode:105255513abdde1ec56-91106828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c59b652a6f9aad009af7ac1d1a524296539da1' => 
    array (
      0 => 'view_html\\project_add.html',
      1 => 1428560624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105255513abdde1ec56-91106828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513abdde67969_48985250',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513abdde67969_48985250')) {function content_5513abdde67969_48985250($_smarty_tpl) {?><script type="text/javascript">
	document.body.oncopy=function(){
		return true;
	}
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="addact.php?p=project" class="pageForm required-validate" onsubmit="return validateCallback(this,dialogMyAjaxDone );">
			<div class="pageFormContent" layoutH="56">
				<p>
					<label>项目名：</label>
					<input name="projectName" class="required" type="text" size="30" alt="请输入项目名称"/>
				</p>
				<p>
					<label>项目负责人：</label>
					<!-- <input name="code" class="digits" type="text" size="30" alt="请输入数字"/> -->
					<input name="projectManager" class="required" type="text" size="30" alt="请输入项目负责人"/>
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
