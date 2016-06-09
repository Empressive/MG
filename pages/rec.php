<div class="prec" style="width: 55%; margin: 5em auto;" >
        <table align="center">
        <tr><th colspan="12">Recruting</th></tr>
        <tr>
            <td><img src="/pic/spec/dk.jpg"></td>
            <td><img src="/pic/spec/druid.jpg"></td>
            <td><img src="/pic/spec/mage.jpg"></td>
            <td><img src="/pic/spec/paladin.jpg"></td>
            <td><img src="/pic/spec/priest.jpg"></td>
            <td><img src="/pic/spec/warlock.jpg"></td>
            <td><img src="/pic/spec/warrior.jpg"></td>
            <td><img src="/pic/spec/shaman.jpg"></td>
            <td><img src="/pic/spec/monk.jpg"></td>
            <td><img src="/pic/spec/rogue.jpg"></td>
            <td><img src="/pic/spec/hunter.jpg"></td>
        </tr>
            <?php
            include_once ('library/MVdb.php');
            MVdb::connectDb();

            $query = mysql_query("SELECT * FROM recruit INNER JOIN recruit_final USING(r_id)");
            while($result = mysql_fetch_assoc($query))
            {
                echo "<tr>";
                echo "<td><img class='{$result['dk_class']}' src=\"/pic/spec/{$result['dk']}.jpg\"></td>";
                echo "<td><img class='{$result['druid_class']}' src=\"/pic/spec/{$result['druid']}.jpg\"></td>";
                echo "<td><img class='{$result['mage_class']}' src=\"/pic/spec/{$result['mage']}.jpg\"></td>";
                echo "<td><img class='{$result['paladin_class']}' src=\"/pic/spec/{$result['paladin']}.jpg\"></td>";
                echo "<td><img class='{$result['priest_class']}' src=\"/pic/spec/{$result['priest']}.jpg\"></td>";
                echo "<td><img class='{$result['warlock_class']}' src=\"/pic/spec/{$result['warlock']}.jpg\"></td>";
                echo "<td><img class='{$result['warrior_class']}' src=\"/pic/spec/{$result['warrior']}.jpg\"></td>";
                echo "<td><img class='{$result['shaman_class']}' src=\"/pic/spec/{$result['shaman']}.jpg\"></td>";
                echo "<td><img class='{$result['monk_class']}' src=\"/pic/spec/{$result['monk']}.jpg\"></td>";
                echo "<td><img class='{$result['rogue_class']}' src=\"/pic/spec/{$result['rogue']}.jpg\"></td>";
                echo "<td><img class='{$result['hunter_class']}' src=\"/pic/spec/{$result['hunter']}.jpg\"></td>";
                echo "</tr>";
            }
            ?>
    </table>
</div>