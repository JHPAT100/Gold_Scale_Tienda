<?php
/* Smarty version 3.1.33, created on 2020-05-11 03:15:08
  from 'C:\servidores_locales\xampp_7_4_5\htdocs\Tienda\admin_gold_acceso\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb9098cdaf7f5_46711879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '046e5427f68b6c81d2d53b969ceb283281238a6c' => 
    array (
      0 => 'C:\\servidores_locales\\xampp_7_4_5\\htdocs\\Tienda\\admin_gold_acceso\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb9098cdaf7f5_46711879 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
