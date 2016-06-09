<?php
session_start();
include_once('../../config.php');
if(isset($_POST['log']) && isset($_POST['passw']))
{
    include_once('../../library/MVdb.php');

    $log = htmlspecialchars(trim($_POST['log']));
    $passw = md5(md5(htmlspecialchars(trim($_POST['passw']) . 'special')));

    MVdb::connectDb();

    $query = mysql_query("SELECT u_id, u_token FROM u_acc WHERE u_log = '$log' and u_token = '$passw'");

    if(mysql_num_rows($query) > 0)
    {
        $result = mysql_fetch_assoc($query);

        $_SESSION['u_id'] = $result['u_id'];
        setcookie("u_id", $result['u_id'], time() + 60 * 60 * 12, "/");
        setcookie("token", $result['u_token'], time() + 60 * 60 * 12, "/");
    }
    header("Location: $location/admin/");
}
else header("Location: $location/admin/");