<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:40:47
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038b40f5472f1_40084181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96daad00cd8823e0a3947bf1ba72761372a8c7e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\checkout.tpl',
      1 => 1614328845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038b40f5472f1_40084181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13317603256038b40f5452b5_71748151', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21125598326038b40f546689_85020645', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_13317603256038b40f5452b5_71748151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13317603256038b40f5452b5_71748151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Checkout Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21125598326038b40f546689_85020645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21125598326038b40f546689_85020645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="row">
            <div class="checkout-page">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <h3>Thông tin người mua hàng</h3>
                        <div class="form-group">
                            <div class="col-md-3">Tên</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Số điện thoại</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">Địa chỉ</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Thông tin sản phẩm</h3>
                        <div class="checkout-product">
                            <div class="form-group">
                                <div class="col-md-3">Tên sản phẩm</div>
                                <div class="col-md-9">Giày thể thao nam</div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">Giá</div>
                                <div class="col-md-9">150,000 đồng</div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">Số lượng</div>
                                <div class="col-md-9">2</div>
                            </div>
                        </div>
                        <div class="checkout-total">
                            <div class="form-group">
                                <div class="col-md-3">Tổng giá</div>
                                <div class="col-md-9">300,000 đồng</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-submit-form">
                        <a type="submit" class="btn btn-success btn-checkout">Thanh toán</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
