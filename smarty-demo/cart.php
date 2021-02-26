<?php
include('../libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->assign('name', 'Giày thể thao nam');
$smarty->assign('price', 150000);
$smarty->assign('quantity', 2);
$smarty->display('./template/cart.tpl');
?>