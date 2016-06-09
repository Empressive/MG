<?php
include_once('../../config.php');
if(isset($_POST['id']) && $_POST['id'] != null && isset($_POST['title']) && isset($_POST['text']))
{
    include_once('../../library/MVdb.php');
    MVdb::connectDb();

    $id = intval($_POST['id']);

    $title = htmlspecialchars(trim($_POST['title']));
    $text = htmlspecialchars(trim($_POST['text']));

    mysql_query("UPDATE news SET n_subject = '$title', n_text = '$text' WHERE news_id = '$id'");
    header("Location: $location/admin/ednews/");
}
header("Location: $location/admin/ednews/");