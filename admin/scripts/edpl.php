<?php
include_once('../../config.php');

if(isset($_POST['nickname']) && isset($_POST['class']) && isset($_POST['role']) && isset($_POST['id']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    $id = intval($_POST['id']);
    $nick = htmlspecialchars(trim($_POST['nickname']));
    $class = intval($_POST['class']);
    $role = intval($_POST['role']);
    $passw = $_POST['passw'];

    if($passw != null)
    {
        $passw = md5(md5(htmlspecialchars(trim($_POST['passw'] . 'special'))));

        mysql_query("UPDATE u_acc SET u_nick = '$nick', class_id = '$class', role_id = '$role', u_token = '$passw' WHERE u_id = '$id'");
    }
    else mysql_query("UPDATE u_acc SET u_nick = '$nick', class_id = '$class', role_id = '$role' WHERE u_id = '$id'");

    header("Location: $location/admin/edpl/");
}
header("Location: $location/admin/edpl/");