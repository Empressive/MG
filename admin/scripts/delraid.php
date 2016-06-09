<?php
include_once('../../config.php');
if(isset($_POST['raid']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    echo $raid_id = intval($_POST['raid']);

    $query = mysql_query("DELETE FROM raids WHERE r_id = $raid_id");

    header("Location: $location/admin/edraid/");
}
else header("Location: $location/admin/edraid/");