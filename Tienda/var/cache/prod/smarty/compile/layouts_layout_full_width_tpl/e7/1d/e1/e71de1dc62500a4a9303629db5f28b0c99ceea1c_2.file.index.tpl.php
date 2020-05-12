<?php
/* Smarty version 3.1.33, created on 2020-05-11 03:10:03
  from 'C:\servidores_locales\xampp_7_4_5\htdocs\Tienda\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb9085b150610_99484948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71de1dc62500a4a9303629db5f28b0c99ceea1c' => 
    array (
      0 => 'C:\\servidores_locales\\xampp_7_4_5\\htdocs\\Tienda\\themes\\classic\\templates\\index.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb9085b150610_99484948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5332667705eb9085b14ca76_47096206', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8384011235eb9085b14d307_26087243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13200537565eb9085b14e6d9_83043044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14931486545eb9085b14ded5_04056645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13200537565eb9085b14e6d9_83043044', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5332667705eb9085b14ca76_47096206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5332667705eb9085b14ca76_47096206',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8384011235eb9085b14d307_26087243',
  ),
  'page_content' => 
  array (
    0 => 'Block_14931486545eb9085b14ded5_04056645',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13200537565eb9085b14e6d9_83043044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8384011235eb9085b14d307_26087243', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14931486545eb9085b14ded5_04056645', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
