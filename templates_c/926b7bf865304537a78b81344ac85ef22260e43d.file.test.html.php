<?php /* Smarty version Smarty-3.1.16, created on 2015-07-07 14:25:13
         compiled from "view_html\test.html" */ ?>
<?php /*%%SmartyHeaderCode:14745559b5a59acdae6-06995376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926b7bf865304537a78b81344ac85ef22260e43d' => 
    array (
      0 => 'view_html\\test.html',
      1 => 1436249931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14745559b5a59acdae6-06995376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_559b5a59c3f4b6_23079302',
  'variables' => 
  array (
    'param' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559b5a59c3f4b6_23079302')) {function content_559b5a59c3f4b6_23079302($_smarty_tpl) {?><script type="text/javascript">
$(document).ready(function(){
    var PerPage = <?php echo $_smarty_tpl->tpl_vars['param']->value['PerPage'];?>
;
    var selectObj = document.getElementsByTagName("select")[0];
    var length = selectObj.options.length; 
    for (var i = 0; i < length; i++) {       
        if (selectObj.options[i].value == PerPage) { 
            selectObj.options[i].selected = true;        
            break;        
        }        
    }         
    $(".needid").click(function(){
        var url = $(this).attr("href").split("&")[0];
        var urlvalue = $("#data .selected .id")[0];
        if(typeof urlvalue !="undefined"){
        	$(this).attr("href",url+"&id="+ urlvalue.innerText);
        }else{
        	alertMsg.info('请选中条目后修改！');
        	
        }
    });
})

</script>
<form id="pagerForm" method="post" action="view.php?p=test">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" id="numPerPage" value="20" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>
<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="view.php?p=test" method="post">
		<input type="hidden" id="selectedId_demo"/>
		<div class="searchBar">
			<ul class="searchContent">
				<li>
					<label>项目名称：</label>
					<input name="keyword" type="text" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['keyword'];?>
" />
				</li>
			</ul>
			<div class="subBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
					<li><a class="button" href="demo_page6.html" target="dialog" rel="dlg_page1" title="查询框"><span>高级检索</span></a></li>
				</ul>
			</div>
		</div>
		</form>
	</div>
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">
				<li><a class="add" href="add.php?p=test" target="dialog"><span>添加</span></a></li>
				<li><a class="delete needid" href="del.php?p=test&id=" target="navTabTodo" title="确定要删除吗?"><span>删除</span></a></li>
				<li><a class="edit needid" id="update" href="update.php?p=test&id=" target="dialog" mask="true"><span>修改</span></a></li>
				<li class="line">line</li>
				<li><a class="icon" href="excel.php?p=test"><span>导入EXCEL</span></a></li>
			</ul>
		</div>
		<table class="table" layouth="142" navTabId="test">
			<thead>
				<tr>
					<th style="display:none">号码</th>
					<th style="width:120px;">字段1</th>
					<th style="width:140px;">字段2</th>
				</tr>
			</thead>
			<tbody id="data">
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
				<tr target="selectedId_demo" rel="<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
">
					<td class="id" style="display:none"><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['field1'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['field2'];?>
</td>
				</tr>
				<?php endfor; endif; ?>
			</tbody>
		</table>
		<div class="panelBar">
			<div class="pages">
				<span>显示</span>
				<select name="numPerPage" id="numPerPage" onchange="$('#numPerPage').val(this.value);navTabPageBreak({numPerPage:this.value})">
					<option value="20">20</option>
					<option value="50">50</option>
					<option value="100">100</option>
					<option value="200">200</option>
				</select>
				<span>条，共<?php echo $_smarty_tpl->tpl_vars['param']->value['rc'];?>
条</span>
			</div>
			
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['param']->value['rc'];?>
" numPerPage="<?php echo $_smarty_tpl->tpl_vars['param']->value['PerPage'];?>
" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['param']->value['page'];?>
"></div>

		</div>
	</div>
</div><?php }} ?>
