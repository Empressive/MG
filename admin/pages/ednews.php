<?php
include_once('../../config.php');
include_once('../../library/MVdb.php');
MVdb::connectDb();
if(!isset($_GET['id']))
{
    echo "<table class='ednewst'>";
    echo "<tr><th width='15%'>Data</th><th width='30%'>Title</th><th>Info</th></tr>";
    MVdb::news();
    echo "</table>";
}
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = mysql_query("SELECT n_subject, n_text FROM news WHERE news_id = $id");

    if (mysql_num_rows($query) > 0) {
        $result = mysql_fetch_assoc($query);

        echo "<div class='padd'>";
        echo "<div class='adnews'>";
        echo "<form method='post'>";
        echo "<input type='text' value='$id' name='id' hidden>";
        echo "<p>Title</p><p><input name='title' value='{$result['n_subject']}'></p>";
        echo "<p>Information</p><p><textarea name='text'>{$result['n_text']}</textarea></p>";

        echo "<div class='adnews'>";
        echo "<input type='submit' value='Save' formaction='/admin/scripts/ednews.php'>";
        echo "<input type='submit' value='Delete' formaction='/admin/scripts/delnews.php'>";
        echo "</from>";
        echo "</div>";
        echo "</div>";
    }
    else header("Location: $location/admin/ednews/");
}
?>