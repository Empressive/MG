<?php include_once('../library/MVdb.php') ?>
<div class="padd">
    <div class="adpl">
        <form method="post" action="/admin/scripts/adpl.php">
            <p><input type="text" placeholder="nickname" name="nickname" required></p>
            <p><select name="class">
                    <?php
                    MVdb::select('class', 'class', 'class_id');
                    ?>
                </select></p>
            <p><select name="role">
                    <?php
                    MVdb::select('role', 'role', 'role_id');
                    ?>
                </select></p>
            <p><input type="text" placeholder="log" name="log" required></p>
            <p><input type="text" placeholder="passw" name="passw" required></p>
            <input type="submit" value="Create">
        </form>
    </div>
</div>
