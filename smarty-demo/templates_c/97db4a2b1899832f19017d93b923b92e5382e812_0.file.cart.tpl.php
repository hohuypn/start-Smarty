<?php
/* Smarty version 3.1.39, created on 2021-02-26 10:41:30
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038c24aeec1b5_62818123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97db4a2b1899832f19017d93b923b92e5382e812' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\cart.tpl',
      1 => 1614332489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038c24aeec1b5_62818123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5309857196038c24aee01d9_72799615', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_362251216038c24aee0d27_52063960', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_5309857196038c24aee01d9_72799615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5309857196038c24aee01d9_72799615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Shopping Cart Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_362251216038c24aee0d27_52063960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_362251216038c24aee0d27_52063960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Giỏ hàng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Ngày</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
                                <td><?php echo number_format($_smarty_tpl->tpl_vars['price']->value,0,',');?>
 đồng</td>
                                <td class="cart-quantity">
                                    <button>-</button>
                                    <input type="text" class="form-control txt-cart-quantity" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
">
                                    <button>+</button>
                                </td>
                                <td><?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
</td>
                                <td>
                                    <a class="btn btn-info">Cập nhật</a>
                                    <a class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action">
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-redirect-back" href="display.php">Quay lại trang chủ</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-redirect-to-checkout" href="checkout.php">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
