<?php /* Smarty version Smarty-3.1.19, created on 2016-09-05 01:18:50
         compiled from "C:\xampp\htdocs\pollitonena\admin322g0r7zg\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160657cd0e4ab36081-02120991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702eb4f90a297a2e70bdd7f4e9ff913d22bf3bb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pollitonena\\admin322g0r7zg\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1466024474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160657cd0e4ab36081-02120991',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57cd0e4ab3fa09_75717384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd0e4ab3fa09_75717384')) {function content_57cd0e4ab3fa09_75717384($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
