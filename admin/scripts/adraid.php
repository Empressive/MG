<?php
include_once('../../config.php');
if(isset($_POST['raid']) && $_FILES['upload']['size'] > 0 && isset($_POST['enc']))
{
    $date = date('Y-m-d:h-s');

    $raid = htmlspecialchars(trim($_POST['raid']));
    $enc = htmlspecialchars(trim($_POST['enc']));


    $dir = '../../pic/upload/';
    $file = "$date.png";
    $upload= $dir . $file;

    if(!file_exists($upload))
    {
        include_once('../../library/MVdb.php');

        MVdb::connectDb();

        $img = htmlspecialchars(trim($file));

        mysql_query("INSERT INTO raids VALUES ('', '$raid', '$file', '$enc')");

        move_uploaded_file($_FILES['upload']['tmp_name'], $upload);
        header("Location: $location/admin/");
    }
    else header("Location: $location/admin/adraid/");
}else header("Location: $location/admin/adraid/");
