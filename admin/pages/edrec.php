<div class="edrec">
<?php
include ('config.php');
include_once ('library/MVdb.php');
if(!isset($_GET['id']))
{
    echo "<table class='tabmax'>";
    echo "<tr><th colspan='12'>Recruting</th></tr>";
    echo "<tr>";
    echo "<td onclick=\"location.href='/admin/edrec/dk/'\"><img src=\"../../pic/spec/dk.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/druid/'\"><img src=\"../../pic/spec/druid.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/mage/'\"><img src=\"../../pic/spec/mage.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/paladin/'\"><img src=\"../../pic/spec/paladin.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/priest/'\"><img src=\"../../pic/spec/priest.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/warlock/'\"><img src=\"../../pic/spec/warlock.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/warrior/'\"><img src=\"../../pic/spec/warrior.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/shaman/'\"><img src=\"../../pic/spec/shaman.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/monk/'\"><img src=\"../../pic/spec/monk.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/rogue/'\"><img src=\"../../pic/spec/rogue.jpg\"></td>";
    echo "<td onclick=\"location.href='/admin/edrec/hunter/'\"><img src=\"../../pic/spec/hunter.jpg\"></td>";
    echo "</tr>";

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
    echo "</table>";
}
else {
    $class = htmlspecialchars(trim($_GET['id']));
    $class_id = $class.'_class';

    $query = mysql_query("SELECT $class, r_id, $class_id FROM recruit INNER JOIN recruit_final USING(r_id)");
    if(mysql_num_rows($query) > 0)
    {
        echo "<form action='/admin/scripts/edrec.php' method='post'>";
        echo "<table class='tabmin'>";
        echo "<tr><td colspan='2'><img src=\"/pic/spec/$class.jpg\"></td>";
        while ($result = mysql_fetch_assoc($query))
        {
            $id = $result['r_id'];
            if($result[$class_id] == 'need') $check = 'checked';
            else $check = null;
            echo "<input type='text' hidden value='$class_id' name='class'>";
            echo "<tr><td><img src='/pic/spec/{$result[$class]}.jpg'></td><td><input hidden value='nneed' name='id[{$result['r_id']}]'><input type='checkbox' value='need' name='id[{$result['r_id']}]' $check></td></tr>";
        }
        echo "<tr><td colspan='2'><input type='submit' value='Edit'></td></tr>";
        echo "</table>";
        echo "</form>";
    }
    else header("Location: $location/admin/edrec/");
}
?>
</div>