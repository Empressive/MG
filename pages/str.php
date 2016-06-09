<?php
include_once('library/MVdb.php');
MVdb::connectDb();
?>
<div class="pstr">
    <p class="alltit">Our streams</p>
    <?php MVdb::stream();?>
</div>