<?php
include_once('../../config.php');
if(isset($_POST['id']) && isset($_POST['class']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    $class = htmlspecialchars(trim($_POST['class']));

    foreach ($_POST['id'] as $key => $value)
    {
        mysql_query("UPDATE recruit_final SET $class = '$value' WHERE r_id = $key");
    }
    header("Location: $location/admin/edrec/");
}
header("Location: $location/admin/edrec/");