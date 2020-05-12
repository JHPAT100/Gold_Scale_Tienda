<?php
/* Smarty version 3.1.33, created on 2020-05-11 03:13:38
  from 'C:\servidores_locales\xampp_7_4_5\htdocs\Tienda\admin_gold_acceso\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb90932929928_19929841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138b8f7ebb4d071595ae591dc3689ad463915251' => 
    array (
      0 => 'C:\\servidores_locales\\xampp_7_4_5\\htdocs\\Tienda\\admin_gold_acceso\\themes\\default\\template\\content.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb90932929928_19929841 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
