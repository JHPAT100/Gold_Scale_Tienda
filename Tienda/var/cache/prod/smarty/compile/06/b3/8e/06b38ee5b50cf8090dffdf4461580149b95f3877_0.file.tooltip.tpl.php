<?php
/* Smarty version 3.1.33, created on 2020-05-11 03:13:38
  from 'C:\servidores_locales\xampp_7_4_5\htdocs\Tienda\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb90932b96086_62837966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06b38ee5b50cf8090dffdf4461580149b95f3877' => 
    array (
      0 => 'C:\\servidores_locales\\xampp_7_4_5\\htdocs\\Tienda\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1556812126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb90932b96086_62837966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
