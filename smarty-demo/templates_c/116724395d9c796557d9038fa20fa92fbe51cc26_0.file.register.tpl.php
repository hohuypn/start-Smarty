<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:54:21
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038b73dbfde69_86110904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116724395d9c796557d9038fa20fa92fbe51cc26' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\register.tpl',
      1 => 1614329644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038b73dbfde69_86110904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18444599356038b73dbfce23_21247327', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9154779496038b73dbfd893_37049320', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_18444599356038b73dbfce23_21247327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18444599356038b73dbfce23_21247327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register User Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_9154779496038b73dbfd893_37049320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9154779496038b73dbfd893_37049320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="form-register">
                    <div class="title">Register Account</div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Name</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Password</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Phone</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Address</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Gender</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <select class="form-control" name="gender" id="gender" value="">
                                    <option value="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Birthday</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="date" class="form-control" name="birthday" id="birthday" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span>You have a account?</span><a class="redirect-to-login" href="login.php"> Click here to login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
