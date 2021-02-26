<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:55:45
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038b791f340b3_12561941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af007c50df73adee9092660c4b0947c3db314c83' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\contact.tpl',
      1 => 1614329744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038b791f340b3_12561941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8373800046038b791f33020_95452735', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14305839216038b791f33b56_56770095', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_8373800046038b791f33020_95452735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8373800046038b791f33020_95452735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contact Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_14305839216038b791f33b56_56770095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14305839216038b791f33b56_56770095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="contact-page">
                <h3>Thông tin liên hệ</h3>
                <div class="contact-content">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-4">Tên</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">Địa chỉ email</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">Nội dung</div>
                            <div class="col-md-8">
                                <textarea type="text" class="form-control" name="content" placeholder="Nhập nội dung"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
