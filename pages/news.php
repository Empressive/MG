<?php
include_once('library/MVdb.php');
MVdb::connectDb();

$query = mysql_query("SELECT n_subject, n_text, n_date FROM news ORDER BY news_id DESC LIMIT 5");
?>
<div class="pnews">
    <span class="alltit">Last News</span>
    <?php while ($result = mysql_fetch_assoc($query)) {
        $date = str_replace('-', '.', $result['n_date']);
        echo "<div class='newslist'>";
        echo "<span class='tit'>{$result['n_subject']}</span>";
        echo "<span class='dat'>{$date}</span>";
        echo "<span class='txt'>{$result['n_text']}</span>";
        echo "</div>";
    }
    ?>
</div>