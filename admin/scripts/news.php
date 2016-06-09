<?php
include_once('../../config.php');
if (isset($_POST['title']) && isset($_POST['info'])) {
    include_once('../../library/MVdb.php');

    MVdb::connectDb();

    $title = htmlspecialchars(trim($_POST['title']));
    $info = htmlspecialchars(trim($_POST['info']));

    $date = date('Y-m-d');
    mysql_query("INSERT INTO news VALUES ('', '$date', '$title', '$info')");

    header("Location: $location/admin/ednews/");
}
else header("Location: $location/admin/ednews/");