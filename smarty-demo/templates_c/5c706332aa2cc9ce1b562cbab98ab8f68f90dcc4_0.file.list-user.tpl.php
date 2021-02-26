<?php
/* Smarty version 3.1.39, created on 2021-02-26 11:03:56
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\list-user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038c78c241522_72460551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c706332aa2cc9ce1b562cbab98ab8f68f90dcc4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\list-user.tpl',
      1 => 1614333828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038c78c241522_72460551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6923163846038c78c22f192_83889243', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3326502696038c78c22fd31_35803071', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_6923163846038c78c22f192_83889243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6923163846038c78c22f192_83889243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
List User Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_3326502696038c78c22fd31_35803071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3326502696038c78c22fd31_35803071',
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
                        <h3 class="card-title">Danh sách người dùng</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ngày</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['no'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td>
                                    <td><?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
</td>
                                    <td>
                                        <a href="detail-user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['no'];?>
" class="btn btn-info">Xem</a>
                                        <a class="btn btn-primary">Cập nhật</a>
                                        <a class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
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
