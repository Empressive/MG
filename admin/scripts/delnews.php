<?php
include_once('../../config.php');
if(isset($_POST['id']) && $_POST['id'] != null)
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    $id = intval($_POST['id']);

    mysql_query("DELETE FROM news WHERE news_id = $id");
    header("Location: $location/ednews/");
}
header("Location: $location/admin/ednews/");