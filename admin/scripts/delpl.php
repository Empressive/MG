<?php
include_once('../../config.php');
if(isset($_POST['id']))
{
    include_once('../../library/MVdb.php');

    MVdb::connectDb();

    $id = intval($_POST['id']);

    mysql_query("DELETE FROM u_acc WHERE u_id = '$id'");

    header("Location: $location/admin/edpl/");
} else header("Location: $location/admin/edpl/");
