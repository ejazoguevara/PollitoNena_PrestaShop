<?php /* Smarty version Smarty-3.1.19, created on 2016-09-05 01:28:29
         compiled from "C:\xampp\htdocs\pollitonena\admin322g0r7zg\themes\default\template\controllers\backup\helpers\list\list_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2901757cd108d53eff2-15607217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f43ffedecb83333235ad1f0873ef9194bba7cb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pollitonena\\admin322g0r7zg\\themes\\default\\template\\controllers\\backup\\helpers\\list\\list_header.tpl',
      1 => 1466024474,
      2 => 'file',
    ),
    'f66af6b4101616a3d9784805a4c469aaa501890b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pollitonena\\admin322g0r7zg\\themes\\default\\template\\helpers\\list\\list_header.tpl',
      1 => 1466024474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2901757cd108d53eff2-15607217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'is_order_position' => 0,
    'list_id' => 0,
    'order_way' => 0,
    'simple_header' => 0,
    'name_controller' => 0,
    'hookName' => 0,
    'sql' => 0,
    'link' => 0,
    'action' => 0,
    'page' => 0,
    'selected_pagination' => 0,
    'icon' => 0,
    'title' => 0,
    'toolbar_btn' => 0,
    'list_total' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
    'sql_manager' => 0,
    'show_toolbar' => 0,
    'bulk_actions' => 0,
    'has_bulk_actions' => 0,
    'fields_display' => 0,
    'y' => 0,
    'param' => 0,
    'use_overflow' => 0,
    'table_id' => 0,
    'table_dnd' => 0,
    'params' => 0,
    'order_by' => 0,
    'key' => 0,
    'hint' => 0,
    'show_filters' => 0,
    'currentIndex' => 0,
    'token' => 0,
    'identifier' => 0,
    'shop_link_type' => 0,
    'has_actions' => 0,
    'row_hover' => 0,
    'option_value' => 0,
    'option_display' => 0,
    'filters_has_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57cd108dd95ae7_28231842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd108dd95ae7_28231842')) {function content_57cd108dd95ae7_28231842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\pollitonena\\tools\\smarty\\plugins\\function.math.php';
?>
<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>
	<script type="text/javascript">
		$(function () {
			$(".ajax_table_link").click(function () {
				var link = $(this);
				$.post($(this).attr('href'), function (data) {
					if (data.success == 1) {
						showSuccessMessage(data.text);
						if (link.hasClass('action-disabled')){
							link.removeClass('action-disabled').addClass('action-enabled');
						} else {
							link.removeClass('action-enabled').addClass('action-disabled');
						}
						link.children().each(function () {
							if ($(this).hasClass('hidden')) {
								$(this).removeClass('hidden');
							} else {
								$(this).addClass('hidden');
							}
						});
					} else {
						showErrorMessage(data.text);
					}
				}, 'json');
				return false;
			});
		});
	</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_order_position']->value) {?>
	<script type="text/javascript" src="../js/jquery/plugins/jquery.tablednd.js"></script>
	<script type="text/javascript">
		var come_from = '<?php echo addslashes($_smarty_tpl->tpl_vars['list_id']->value);?>
';
		var alternate = <?php if ($_smarty_tpl->tpl_vars['order_way']->value=='DESC') {?>'1'<?php } else { ?>'0'<?php }?>;
	</script>
	<script type="text/javascript" src="../js/admin/dnd.js"></script>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<script type="text/javascript">
		$(function() {
			$('table.<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
 .filter').keypress(function(e){
				var key = (e.keyCode ? e.keyCode : e.which);
				if (key == 13)
				{
					e.preventDefault();
					formSubmit(e, 'submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
');
				}
			})
			$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click(function() {
				$('#submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').val(1);
			});

			if ($("table .datepicker").length > 0) {
				$("table .datepicker").datepicker({
					prevText: '',
					nextText: '',
					altFormat: 'yy-mm-dd'
				});
			}
		});
	</script>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<div class="leadin">
		
	</div>
<?php }?>



	<?php if (isset($_smarty_tpl->tpl_vars['backup_url']->value)&&isset($_smarty_tpl->tpl_vars['backup_weight']->value)) {?>
	<div class="panel">
		<h3>
			<i class="icon-download"></i>
			<?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>

		</h3>
		<p>
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['backup_url']->value;?>
">
				<i class="icon-download"></i>
				<?php echo smartyTranslate(array('s'=>'Download the backup file (%s MB)','sprintf'=>$_smarty_tpl->tpl_vars['backup_weight']->value),$_smarty_tpl);?>

			</a>
		</p>
		<p><?php echo smartyTranslate(array('s'=>'Tip: You can also download this file from your FTP server. Backup files are located in the "/adminXXXX/backups" directory.'),$_smarty_tpl);?>
</p>
	</div>
	<?php }?>

		<div class="alert alert-warning">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<h4><?php echo smartyTranslate(array('s'=>'Disclaimer before creating a new backup'),$_smarty_tpl);?>
</h4>
			<ol>
				<li><?php echo smartyTranslate(array('s'=>'PrestaShop is not responsible for your database, its backups and/or recovery.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'PrestaShop is open-source software. You are using it at your own risk under the license agreement.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'You should back up your data on a regular basis (both files and database).'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'This function only backs up your database, not your files.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'By default, your existing database tables will be dropped during the backup recovery (see "Backup options" below).'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Always verify the quality and integrity of your backup files!'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Always check your data.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Never restore a backup on a live site.'),$_smarty_tpl);?>
</li>
			</ol>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;add<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-horizontal">
				<button type="submit" class="btn btn-default">
					<i class="icon-save"></i>
					<?php echo smartyTranslate(array('s'=>'I have read the disclaimer. Please create a new backup.'),$_smarty_tpl);?>

				</button>
			</form>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>
		<div class="alert alert-info">
			<h4><?php echo smartyTranslate(array('s'=>'How to restore a database backup'),$_smarty_tpl);?>
</h4>
			<?php echo smartyTranslate(array('s'=>'If you need to restore a database backup, we invite you to subscribe to a [1][2]technical support plan[/2][/1].','tags'=>array('<strong>','<a class="_blank" href="http://addons.prestashop.com/support/16298-support-essentiel-plan.html">')),$_smarty_tpl);?>

			<br />
			<?php echo smartyTranslate(array('s'=>'Our team will take care of restoring your database safely.'),$_smarty_tpl);?>

			<br />
			<br />
			<?php echo smartyTranslate(array('s'=>'Why can\'t I restore it by myself?'),$_smarty_tpl);?>

			<br />
			<?php echo smartyTranslate(array('s'=>'Your shop is hosted by PrestaShop. Although you can create backup files here below, there are core settings you cannot access for security reasons, like the database management. Thus, only our team can proceed to a restoration.'),$_smarty_tpl);?>

		</div>
		<?php } else { ?>
		<div class="alert alert-info">
			<h4><?php echo smartyTranslate(array('s'=>'How to restore a database backup in 10 easy steps'),$_smarty_tpl);?>
</h4>
			<ol>
				<li><?php echo smartyTranslate(array('s'=>'Set "Enable Shop" to "No" in the "Maintenance" page under the "Preferences" menu.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Download the backup from the list below or from your FTP server (in the folder "admin/backups").'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Please ask your hosting provider for "phpMyAdmin" access to your database.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Connect to "phpMyAdmin" and select your current database.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Unless you enabled the "Drop existing tables" option, you must delete all tables from your current database.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'At the top of the screen, please select the "Import" tab'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Click on the "Browse" button and select the backup file from your hard drive.'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Check the maximum filesize allowed (e.g. Max: 16MB)'),$_smarty_tpl);?>
<br /><?php echo smartyTranslate(array('s'=>'If your backup file exceeds this limit, contact your hosting provider for assistance. '),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Click on the "Go" button and please wait patiently for the import process to conclude. This may take several minutes.'),$_smarty_tpl);?>
</li>
			</ol>
		</div>
		<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminListBefore'),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
ListBefore<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
ListBefore<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>

<div class="alert alert-warning" id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
-empty-filters-alert" style="display:none;"><?php echo smartyTranslate(array('s'=>'Please fill at least one field to perform a search in this list.'),$_smarty_tpl);?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['sql']->value)&&$_smarty_tpl->tpl_vars['sql']->value) {?>
	<form id="sql_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRequestSql'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addrequest_sql" method="post" class="hide">
		<input type="hidden" id="sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="sql" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input type="hidden" id="sql_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" value=""/>
	</form>
<?php }?>


	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">


<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<input type="hidden" id="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" value="0"/>
	<input type="hidden" name="page" value="<?php echo intval($_smarty_tpl->tpl_vars['page']->value);?>
"/>
	<input type="hidden" name="selected_pagination" value="<?php echo intval($_smarty_tpl->tpl_vars['selected_pagination']->value);?>
"/>
	
	<div class="panel col-lg-12">
		<div class="panel-heading">
			<?php if (isset($_smarty_tpl->tpl_vars['icon']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i> <?php }?><?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo end($_smarty_tpl->tpl_vars['title']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value)&&count($_smarty_tpl->tpl_vars['toolbar_btn']->value)>0) {?>
				<span class="badge"><?php echo $_smarty_tpl->tpl_vars['list_total']->value;?>
</span>
				<span class="panel-heading-action">
				<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toolbar_btn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value!='modules-list'&&$_smarty_tpl->tpl_vars['k']->value!='back') {?>
						<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?>" class="list-toolbar-btn<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target'])&&$_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
							<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['btn']->value['desc']),$_smarty_tpl);?>
" data-html="true" data-placement="top">
								<i class="process-icon-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>"></i>
							</span>
						</a>
					<?php }?>
				<?php } ?>
					<a class="list-toolbar-btn" href="javascript:location.reload();">
						<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Refresh list'),$_smarty_tpl);?>
" data-html="true" data-placement="top">
							<i class="process-icon-refresh"></i>
						</span>
					</a>
				<?php if (isset($_smarty_tpl->tpl_vars['sql']->value)&&$_smarty_tpl->tpl_vars['sql']->value) {?>
					<?php $_smarty_tpl->tpl_vars['sql_manager'] = new Smarty_variable(Profile::getProfileAccess(Context::getContext()->employee->id_profile,Tab::getIdFromClassName('AdminRequestSql')), null, 0);?>

					<?php if ($_smarty_tpl->tpl_vars['sql_manager']->value['view']==1) {?>
						<a class="list-toolbar-btn" href="javascript:void(0);" onclick="$('.leadin').first().append('<div class=\'alert alert-info\'>' + $('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val() + '</div>'); $(this).attr('onclick', '');">
							<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Show SQL query'),$_smarty_tpl);?>
" data-html="true" data-placement="top" >
								<i class="process-icon-terminal"></i>
							</span>
						</a>
						<a class="list-toolbar-btn" href="javascript:void(0);" onclick="$('#sql_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val(createSqlQueryName()); $('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val($('#sql_query_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').val().replace(/\s+limit\s+[0-9,\s]+$/ig, '').trim()); $('#sql_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_id']->value, ENT_QUOTES, 'UTF-8', true);?>
').submit();">
							<span class="label-tooltip" data-toggle="tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Export to SQL Manager'),$_smarty_tpl);?>
" data-html="true" data-placement="top" >
								<i class="process-icon-database"></i>
							</span>
						</a>
					<?php }?>
				<?php }?>
				</span>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
			<script type="text/javascript">
				//<![CDATA[
				var submited = false;
				$(function() {
					//get reference on save link
					btn_save = $('i[class~="process-icon-save"]').parent();
					//get reference on form submit button
					btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');
					if (btn_save.length > 0 && btn_submit.length > 0) {
						//get reference on save and stay link
						btn_save_and_stay = $('i[class~="process-icon-save-and-stay"]').parent();
						//get reference on current save link label
						lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save div');
						//override save link label with submit button value
						if (btn_submit.val().length > 0) {
							lbl_save.html(btn_submit.attr("value"));
						}
						if (btn_save_and_stay.length > 0) {
							//get reference on current save link label
							lbl_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay div');
							//override save and stay link label with submit button value
							if (btn_submit.val().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked')) {
								lbl_save_and_stay.html(btn_submit.val() + " <?php echo smartyTranslate(array('s'=>'and stay'),$_smarty_tpl);?>
 ");
							}
						}
						//hide standard submit button
						btn_submit.hide();
						//bind enter key press to validate form
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').keypress(function (e) {
							if (e.which == 13 && e.target.localName != 'textarea') {
								$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
							}
						});
						//submit the form
						
							btn_save.click(function() {
								// Avoid double click
								if (submited) {
									return false;
								}
								submited = true;
								//add hidden input to emulate submit button click when posting the form -> field name posted
								btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');
								$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
								return false;
							});
							if (btn_save_and_stay) {
								btn_save_and_stay.click(function() {
									//add hidden input to emulate submit button click when posting the form -> field name posted
									btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');
									$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
									return false;
								});
							}
						
					}
				});
				//]]>
			</script>
		<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<div class="panel col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><h3><?php if (isset($_smarty_tpl->tpl_vars['icon']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i> <?php }?><?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo end($_smarty_tpl->tpl_vars['title']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></h3><?php }?>
<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value&&$_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
		<?php $_smarty_tpl->tpl_vars['y'] = new Smarty_variable(2, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['y'] = new Smarty_variable(1, null, 0);?>
	<?php }?>
	<style>
	@media (max-width: 992px) {
		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['params']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['params']['index']++;
?>
			.table-responsive-row td:nth-of-type(<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['params']['index'],'y'=>$_smarty_tpl->tpl_vars['y']->value),$_smarty_tpl);?>
):before {
				content: "<?php echo $_smarty_tpl->tpl_vars['param']->value['title'];?>
";
			}
		<?php } ?>
	}
	</style>

	
	<div class="table-responsive-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['use_overflow']->value)&&$_smarty_tpl->tpl_vars['use_overflow']->value) {?> overflow-y<?php }?>">
		<table<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?> id="table-<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
"<?php }?> class="table<?php if ($_smarty_tpl->tpl_vars['table_dnd']->value) {?> tableDnD<?php }?> <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" >
			<thead>
				<tr class="nodrag nodrop">
					<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value&&$_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
						<th class="center fixed-width-xs"></th>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
					<th class="<?php if (isset($_smarty_tpl->tpl_vars['params']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['params']->value['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['params']->value['align'])) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];?>
<?php }?>">
						<span class="title_box<?php if (isset($_smarty_tpl->tpl_vars['order_by']->value)&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['order_by']->value)) {?> active<?php }?>">
							<?php if (isset($_smarty_tpl->tpl_vars['params']->value['hint'])) {?>
								<span class="label-tooltip" data-toggle="tooltip"
									title="
										<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['hint'])) {?>
											<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
												<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>

												<?php }?>
											<?php } ?>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['params']->value['hint'];?>

										<?php }?>
									">
									<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

								</span>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

							<?php }?>
							<?php if ((!isset($_smarty_tpl->tpl_vars['params']->value['orderby'])||$_smarty_tpl->tpl_vars['params']->value['orderby'])&&!$_smarty_tpl->tpl_vars['simple_header']->value&&$_smarty_tpl->tpl_vars['show_filters']->value) {?>
								<a <?php if (isset($_smarty_tpl->tpl_vars['order_by']->value)&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['order_by']->value)&&($_smarty_tpl->tpl_vars['order_way']->value=='DESC')) {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=desc&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value])) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);?>
<?php }?>">
									<i class="icon-caret-down"></i>
								</a>
								<a <?php if (isset($_smarty_tpl->tpl_vars['order_by']->value)&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['order_by']->value)&&($_smarty_tpl->tpl_vars['order_way']->value=='ASC')) {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=asc&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value])) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);?>
<?php }?>">
									<i class="icon-caret-up"></i>
								</a>
							<?php }?>
						</span>
					</th>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
						<th>
							<span class="title_box">
							<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value=='shop') {?>
								<?php echo smartyTranslate(array('s'=>'Shop'),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smartyTranslate(array('s'=>'Shop group'),$_smarty_tpl);?>

							<?php }?>
							</span>
						</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['has_actions']->value||$_smarty_tpl->tpl_vars['show_filters']->value) {?>
						<th><?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?><?php }?></th>
					<?php }?>
				</tr>
			<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value&&$_smarty_tpl->tpl_vars['show_filters']->value) {?>
				<tr class="nodrag nodrop filter <?php if ($_smarty_tpl->tpl_vars['row_hover']->value) {?>row_hover<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
						<th class="text-center">
							--
						</th>
					<?php }?>
					
					<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
						<th <?php if (isset($_smarty_tpl->tpl_vars['params']->value['align'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['params']->value['align'];?>
" <?php }?>>
							<?php if (isset($_smarty_tpl->tpl_vars['params']->value['search'])&&!$_smarty_tpl->tpl_vars['params']->value['search']) {?>
								--
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['params']->value['type']=='bool') {?>
									<select class="filter fixed-width-sm center" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
										<option value="">-</option>
										<option value="1" <?php if ($_smarty_tpl->tpl_vars['params']->value['value']==1) {?> selected="selected" <?php }?>><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</option>
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['params']->value['value']==0&&$_smarty_tpl->tpl_vars['params']->value['value']!='') {?> selected="selected" <?php }?>><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</option>
									</select>
								<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='date'||$_smarty_tpl->tpl_vars['params']->value['type']=='datetime') {?>
									<div class="date_range row">
 										<div class="input-group fixed-width-md center">
											<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]"  placeholder="<?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
" />
											<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]" value="<?php if (isset($_smarty_tpl->tpl_vars['params']->value['value'][0])) {?><?php echo $_smarty_tpl->tpl_vars['params']->value['value'][0];?>
<?php }?>">
											<span class="input-group-addon">
												<i class="icon-calendar"></i>
											</span>
										</div>
 										<div class="input-group fixed-width-md center">
											<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]"  placeholder="<?php echo smartyTranslate(array('s'=>'To'),$_smarty_tpl);?>
" />
											<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]" value="<?php if (isset($_smarty_tpl->tpl_vars['params']->value['value'][1])) {?><?php echo $_smarty_tpl->tpl_vars['params']->value['value'][1];?>
<?php }?>">
											<span class="input-group-addon">
												<i class="icon-calendar"></i>
											</span>
										</div>
										<script>
											$(function() {
												var dateStart = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").val());
												var dateEnd = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").val());
												$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0");
												$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1");
												if (dateStart !== null){
													$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("setDate", dateStart);
												}
												if (dateEnd !== null){
													$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("setDate", dateEnd);
												}
											});
										</script>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['params']->value['filter_key'])) {?>
										<select class="filter center" onchange="$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').focus();$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click();" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['params']->value['width'])) {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?>>
											<option value="" <?php if ($_smarty_tpl->tpl_vars['params']->value['value']=='') {?> selected="selected" <?php }?>>-</option>
											<?php if (isset($_smarty_tpl->tpl_vars['params']->value['list'])&&is_array($_smarty_tpl->tpl_vars['params']->value['list'])) {?>
												<?php  $_smarty_tpl->tpl_vars['option_display'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_display']->_loop = false;
 $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_display']->key => $_smarty_tpl->tpl_vars['option_display']->value) {
$_smarty_tpl->tpl_vars['option_display']->_loop = true;
 $_smarty_tpl->tpl_vars['option_value']->value = $_smarty_tpl->tpl_vars['option_display']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['option_value']->value;?>
" <?php if ((string)$_smarty_tpl->tpl_vars['option_display']->value===(string)$_smarty_tpl->tpl_vars['params']->value['value']||(string)$_smarty_tpl->tpl_vars['option_value']->value===(string)$_smarty_tpl->tpl_vars['params']->value['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option_display']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } else { ?>
									<input type="text" class="filter" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if (isset($_smarty_tpl->tpl_vars['params']->value['filter_key'])) {?><?php echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['params']->value['width'])&&$_smarty_tpl->tpl_vars['params']->value['width']!='auto') {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?> />
								<?php }?>
							<?php }?>
						</th>
					<?php } ?>

					<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
						<th>--</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['has_actions']->value||$_smarty_tpl->tpl_vars['show_filters']->value) {?>
						<th class="actions">
							<?php if ($_smarty_tpl->tpl_vars['show_filters']->value) {?>
							<span class="pull-right">
								
								<button type="submit" id="submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter" class="btn btn-default" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
									<i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>

								</button>
								<?php if ($_smarty_tpl->tpl_vars['filters_has_value']->value) {?>
									<button type="submit" name="submitReset<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" class="btn btn-warning">
										<i class="icon-eraser"></i> <?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>

									</button>
								<?php }?>
							</span>
							<?php }?>
						</th>
					<?php }?>
				</tr>
			<?php }?>
			</thead>
<?php }} ?>
