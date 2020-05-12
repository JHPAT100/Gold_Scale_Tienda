<?php
/* Smarty version 3.1.33, created on 2020-05-11 03:10:03
  from 'C:\servidores_locales\xampp_7_4_5\htdocs\Tienda\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb9085b177f92_31914338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3accbd0e1c4f1d73041a6330921db94b3059ae1' => 
    array (
      0 => 'C:\\servidores_locales\\xampp_7_4_5\\htdocs\\Tienda\\themes\\classic\\templates\\page.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb9085b177f92_31914338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626074155eb9085b16dd49_92894978', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13857906815eb9085b16e808_55884113 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13140261925eb9085b16e249_83301780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13857906815eb9085b16e808_55884113', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_20450763065eb9085b172df9_26771940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6726990155eb9085b174363_36359199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19451801295eb9085b1726c8_33643987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20450763065eb9085b172df9_26771940', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6726990155eb9085b174363_36359199', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_10942837035eb9085b1764f3_16923579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4026157345eb9085b175a56_77242187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10942837035eb9085b1764f3_16923579', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_626074155eb9085b16dd49_92894978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_626074155eb9085b16dd49_92894978',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13140261925eb9085b16e249_83301780',
  ),
  'page_title' => 
  array (
    0 => 'Block_13857906815eb9085b16e808_55884113',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19451801295eb9085b1726c8_33643987',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20450763065eb9085b172df9_26771940',
  ),
  'page_content' => 
  array (
    0 => 'Block_6726990155eb9085b174363_36359199',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4026157345eb9085b175a56_77242187',
  ),
  'page_footer' => 
  array (
    0 => 'Block_10942837035eb9085b1764f3_16923579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13140261925eb9085b16e249_83301780', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19451801295eb9085b1726c8_33643987', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4026157345eb9085b175a56_77242187', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
