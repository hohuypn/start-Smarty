<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:05:41
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038abd56d7240_59252307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c3cd936d837f3b8fa8d8d5c196a967baef6fc45' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\pages\\contact.tpl',
      1 => 1614326738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038abd56d7240_59252307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12289893476038abd56d5ec1_23102407', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7437012896038abd56d6c02_30358093', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/index.tpl");
}
/* {block "title"} */
class Block_12289893476038abd56d5ec1_23102407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12289893476038abd56d5ec1_23102407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contact Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_7437012896038abd56d6c02_30358093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7437012896038abd56d6c02_30358093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>This is contact page</p>
    <a href="cart.php" class="btn btn-primary"> Click me</a>
<?php
}
}
/* {/block "content"} */
}
