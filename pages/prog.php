<div class="ppro">
    <div class="pro">
        <?php
        include_once('library/MVdb.php');

        MVdb::connectDb();

        $query = mysql_query("SELECT r_name, r_img, r_enc FROM raids");

        while($result = mysql_fetch_assoc($query))
        {
            echo "<div><img src=\"../pic/upload/{$result['r_img']}\"><span>{$result['r_name']} {$result['r_enc']}</span></div>";
        }
        ?>
    </div>
    <div class="news">
        <?php

        $query = mysql_query("SELECT n_date, n_subject, n_text FROM news ORDER BY news_id DESC LIMIT 1");

        $result = mysql_fetch_assoc($query);

        $date = str_replace('-','.', $result['n_date']);
        $subject = $result['n_subject'];
        $text = $result['n_text'];

        echo "<span class='tit'>$subject</span>";
        echo "<span class='dat'>$date</span>";
        echo "<span class='txt'>$text</span>";
        ?>
        <a href="/news/">Предыдущие новости</a>
    </div>
</div>

