<?php 
include_once('library/MVdb.php');
MVdb::connectDb();
?>
<div class="praid">
    <ul>
        <li id="tanks"><span>tanks</span></li>
        <ul id="tank">
            <?php MVdb::players(1); ?>
        </ul>
        <li id="heals"><span>Healers</span></li>
        <ul id="heal">
            <?php MVdb::players(2); ?>
        </ul>
        <li id="dpss"><span>Damage</span></li>
        <ul id="dps">
            <?php MVdb::players(3); ?>
        </ul>
    </ul>
</div>