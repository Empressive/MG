<?php
include_once('../../config.php');
if(isset($_POST['stream']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    $stream = intval($_POST['stream']);

    mysql_query("DELETE FROM stream WHERE s_id = $stream");
    header("Location: $location/admin/edstr/");
}else header("Location: $location/admin/edstr/");
