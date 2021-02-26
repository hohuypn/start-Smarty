<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:05:42
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\pages\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038abd65808e7_82686942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e248619d8c1e8c0871993a820816c8ab46c65c41' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\pages\\cart.tpl',
      1 => 1614326682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038abd65808e7_82686942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13794240746038abd657f846_85127446', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21128130486038abd65803b1_01814160', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/index.tpl");
}
/* {block "title"} */
class Block_13794240746038abd657f846_85127446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13794240746038abd657f846_85127446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Shopping Cart Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21128130486038abd65803b1_01814160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21128130486038abd65803b1_01814160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>This is shopping cart page</p>
<?php
}
}
/* {/block "content"} */
}
