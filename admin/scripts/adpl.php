<?php
include_once('../../config.php');
if(isset($_POST['log']) && isset($_POST['nickname']) && isset($_POST['role']) && isset($_POST['passw']) && isset($_POST['class']))
{
    include_once('../../library/MVdb.php');

    MVdb::connectDb();

    $log = htmlspecialchars(trim($_POST['log']));
    $nick = htmlspecialchars(trim($_POST['nickname']));
    $role = intval($_POST['role']);
    $class = intval($_POST['class']);
    $passw = md5(md5(htmlspecialchars(trim($_POST['passw'] . 'special'))));

    $query = mysql_query("SELECT u_id FROM u_acc WHERE u_log = '$log'");

    if(mysql_num_rows($query) == 0)
    {
        mysql_query("INSERT INTO u_acc VALUES('','$nick','$log','$class','$role','$passw','1')");

        header("Location: $location/admin/edpl/");
    }
    else header("Location: $location/admin/adpl/");
} else header("Location: $location/admin/adpl/");
