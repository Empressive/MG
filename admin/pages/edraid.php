<?php
include_once('../../library/MVdb.php');
MVdb::connectDb();
?>
<div class="padd">
    <div class="edraid">
        <p>Choose Raid</p>
        <form method="post">
            <select name="raid">
                <?php MVdb::select('raids','r_name','r_id') ?>
            </select>
            <p>Progress</p>
            <p><input type="text" placeholder="XX/YY" name="enc" required></p>
            <input type="submit" value="Save" formaction="/admin/scripts/edraid.php">
            <input type="submit" value="Delete" formaction="/admin/scripts/delraid.php">
        </form>
    </div>
</div>