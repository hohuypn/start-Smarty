<?php
/* Smarty version 3.1.39, created on 2021-02-26 10:53:07
  from 'E:\xampp\htdocs\smarty-master\smarty-demo\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6038c5032e19e5_73426129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5422610e0a3cb5f9d918bbb7009914b5de8f93' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smarty-master\\smarty-demo\\template\\header.tpl',
      1 => 1614333182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038c5032e19e5_73426129 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shopping</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="display.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="list-user.php">List User</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php }
}
