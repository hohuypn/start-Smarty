<?php
/* Smarty version 3.1.39, created on 2021-02-26 09:54:20
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038b73c6f8639_68398441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7db6d059b957041575210219f9d2218f55048b2' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\login.tpl',
      1 => 1614329656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038b73c6f8639_68398441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15194674726038b73c6f7657_18063761', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14316418246038b73c6f80d4_25538602', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/index.tpl");
}
/* {block "title"} */
class Block_15194674726038b73c6f7657_18063761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15194674726038b73c6f7657_18063761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login Page<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_14316418246038b73c6f80d4_25538602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14316418246038b73c6f80d4_25538602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="form-register">
                    <div class="title">Login Account</div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label for="">Password</label>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span>If you don't have an account?</span><a href="register.php"> Click here</a>
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
