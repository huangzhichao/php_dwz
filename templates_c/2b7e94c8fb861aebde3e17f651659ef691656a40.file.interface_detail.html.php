<?php /* Smarty version Smarty-3.1.16, created on 2015-04-09 14:56:48
         compiled from "view_html\interface_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:248385513ab7bc95047-80857209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7e94c8fb861aebde3e17f651659ef691656a40' => 
    array (
      0 => 'view_html\\interface_detail.html',
      1 => 1428562601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248385513ab7bc95047-80857209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5513ab7bd12ba5_23595490',
  'variables' => 
  array (
    'flag' => 0,
    'type' => 0,
    'id' => 0,
    'result' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513ab7bd12ba5_23595490')) {function content_5513ab7bd12ba5_23595490($_smarty_tpl) {?><script type="text/javascript">

	var s = <?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
;
	if(s==0){
		$.pdialog.closeCurrent();
	}
	var objBtn = document.getElementById("add");
	objBtn.onclick=function(){
		$("#addp").before("<p><input name='interfaceName' class='required' type='text' size='20' alt='请输入接口名称'/><input name='interfaceName' class='required' type='text' size='20' alt='请输入接口名称'/></p>");
	}
	var objForm = document.getElementById("form");
	objForm.onsubmit = function(){
		var inp = document.getElementById("main").getElementsByTagName("input");
		//alert(inp.length);
		var len = inp.length-1;
		var str = "";
		for (var i = 2; i < len; i++) {
			str += inp[i].value;
			if(i%2==0)
				str += "::";
			else
				str += "&&";
		};
		document.getElementById("request").value = str;
		return validateCallback(this,dialogMyAjaxDone);
	}

</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="detailact.php?p=interface&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="pageForm required-validate" id="form">
			<div class="pageFormContent" layoutH="56" id="main">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<textarea rows="8" cols="50" readonly="readonly"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</textarea>
				
				<input type="hidden" name="request" id="request">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
				<p>
					<input name="interfaceName" class="required" type="text" size="20" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['name'];?>
" alt="请输入请求名称"/>
					<input name="interfaceName" class="required" type="text" size="20" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['main'];?>
" alt="请输入请求注释"/>
				</p>
				<?php endfor; endif; ?>
				<p id="addp"><input type="button" value="添加" id="add"></p>
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
