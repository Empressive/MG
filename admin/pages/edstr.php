<?php
include_once('../../library/MVdb.php');
MVdb::connectDb();
?>
<div class="padd">
    <div class="edstr">
        <form method="post">
            <p>Choose Stream</p>
            <select name="stream">
                <?php MVdb::select('stream', 's_name', 's_id'); ?>
            </select>
            <p>Rename</p><input type="text" name="name">
            <p>Change URL</p>
            <p><input type="text" name="link"></p>
            <input type="submit" value="Save" formaction="/admin/scripts/edstr.php">
            <input type="submit" value="Delete" formaction="/admin/scripts/delstr.php">
        </form>
    </div>
</div>