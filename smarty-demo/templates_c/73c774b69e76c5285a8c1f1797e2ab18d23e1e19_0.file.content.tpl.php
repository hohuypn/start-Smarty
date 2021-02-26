<?php
/* Smarty version 3.1.39, created on 2021-02-26 08:10:07
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\layouts\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60389ecfdec5a9_85573330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c774b69e76c5285a8c1f1797e2ab18d23e1e19' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\layouts\\content.tpl',
      1 => 1614323401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60389ecfdec5a9_85573330 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
    <p>This is content</p>
    <a href="home.php"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
    <p><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
</div><?php }
}
