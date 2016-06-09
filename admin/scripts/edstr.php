<?php
include_once('../../config.php');
if(isset($_POST['stream']) && isset($_POST['name']) && isset($_POST['link']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();
    
    $stream = intval($_POST['stream']);
    $name = htmlspecialchars(trim($_POST['name']));
    $link = htmlspecialchars(trim($_POST['link']));

    $query = mysql_query("SELECT s_id FROM stream WHERE s_name = '$name'");

    if(mysql_num_rows($query) < 1)
    {
        mysql_query("UPDATE stream SET s_name = '$name', s_link = '$link' WHERE s_id = $stream");
        header("Location: $location/admin/");
    }
    else header("Location: $location/admin/edstr/");
}else header("Location: $location/admin/edstr/");
