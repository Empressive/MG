<?php
include_once('../../config.php');
if(isset($_POST['raid']) && isset($_POST['enc']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    echo $raid_id = intval($_POST['raid']);
    echo $enc = htmlspecialchars(trim($_POST['enc']));

    $query = mysql_query("UPDATE raids SET r_enc = '$enc' WHERE r_id = $raid_id");

    header("Location: $location/admin/edraid/");
}
else header("Location: $location/admin/edraid/");