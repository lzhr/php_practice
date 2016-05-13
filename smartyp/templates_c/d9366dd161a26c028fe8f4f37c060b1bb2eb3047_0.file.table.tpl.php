<?php
/* Smarty version 3.1.29, created on 2016-05-12 17:48:56
  from "D:\WorkSpace\myphp1\smartyp\templates\table.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5734a5e8592236_48779929',
  'file_dependency' => 
  array (
    'd9366dd161a26c028fe8f4f37c060b1bb2eb3047' => 
    array (
      0 => 'D:\\WorkSpace\\myphp1\\smartyp\\templates\\table.tpl',
      1 => 1463068133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5734a5e8592236_48779929 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
    <body>
		<table border="1" width="98%" align="center" id="table1">
		<caption>mysql查询</caption>
			<tr><th>用户</th><th>信息</th></tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_u_0_saved_item = isset($_smarty_tpl->tpl_vars['u']) ? $_smarty_tpl->tpl_vars['u'] : false;
$_smarty_tpl->tpl_vars['u'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['u']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$__foreach_u_0_saved_local_item = $_smarty_tpl->tpl_vars['u'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['info'];?>
</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['u'] = $__foreach_u_0_saved_local_item;
}
if ($__foreach_u_0_saved_item) {
$_smarty_tpl->tpl_vars['u'] = $__foreach_u_0_saved_item;
}
?>		
		</table>
		
		
		JavaScript输出：
		
			<?php echo '<script'; ?>
>
				document.write("Hello World!")
			<?php echo '</script'; ?>
>
		
    </body>
</html><?php }
}
