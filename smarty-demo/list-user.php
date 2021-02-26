<?php
include('../libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->assign('users', array(
    array('no' => 1 ,'name' => 'Nguyen Van A', 'phone' => '133-4441', 'address' => '101B Le Huu Trac'),
    array('no' => 2 , 'name' => 'Nguyen Van B', 'phone' => '233-4442' ,'address' => '101B Le Huu Trac'),
    array('no' => 3 ,'name' => 'Nguyen Van C', 'phone' => '333-4443' ,'address' => '101B Le Huu Trac'),
    array('no' => 4 ,'name' => 'Nguyen Van D', 'phone' => '433-4444' ,'address' => '101B Le Huu Trac'),
    array('no' => 5 ,'name' => 'Nguyen Van E', 'phone' => '533-4445' ,'address' => '101B Le Huu Trac'),
    array('no' => 6 ,'name' => 'Nguyen Van F', 'phone' => '633-4446' ,'address' => '101B Le Huu Trac'),
    array('no' => 7 ,'name' => 'Nguyen Van G', 'phone' => '733-4447' ,'address' => '101B Le Huu Trac'),
    array('no' => 8 ,'name' => 'Nguyen Van H', 'phone' => '833-4448' ,'address' => '101B Le Huu Trac'),
    array('no' => 9 ,'name' => 'Nguyen Van I', 'phone' => '933-4449' ,'address' => '101B Le Huu Trac'),
    array('no' => 10 ,'name' => 'Nguyen Van K', 'phone' => '103-4410' ,'address' => '101B Le Huu Trac'),
));
$smarty->display('./template/list-user.tpl');