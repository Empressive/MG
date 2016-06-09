<?php
include_once('../../config.php');
if(isset($_POST['name']) && isset($_POST['link']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();
    
    $name = htmlspecialchars(trim($_POST['name']));
    $link = htmlspecialchars(trim($_POST['link']));

    $query = mysql_query("SELECT s_id FROM stream WHERE s_name = '$name'");
    if(mysql_num_rows($query) < 1)
    {
        mysql_query("INSERT INTO stream VALUES('','$name','$link')");
        header("Location: $location/admin/");
    }
    else header("Location: $location/admin/adstr/");
}
else header("Location: $location/admin/adstr/");
