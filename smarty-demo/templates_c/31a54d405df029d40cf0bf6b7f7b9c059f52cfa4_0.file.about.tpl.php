<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:23:11
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038afef9ddd62_46153244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a54d405df029d40cf0bf6b7f7b9c059f52cfa4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\about.tpl',
      1 => 1614327732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038afef9ddd62_46153244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14085452636038afef9dcdd6_42917709', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7927568286038afef9dd874_73085872', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_14085452636038afef9dcdd6_42917709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14085452636038afef9dcdd6_42917709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
About Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_7927568286038afef9dd874_73085872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7927568286038afef9dd874_73085872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>This is about page</p>
<?php
}
}
/* {/block "content"} */
}
