<?php
if(!isset($_GET['id']))
{
    echo "<table class='edplt'>";
    echo "<tr><th>Login</th><th>Nickname</th><th>Class</th><th>Role</th></tr>";
    MVdb::users();
    echo "</table>";
}
else {
    $id = intval($_GET['id']);

    $query = mysql_query("SELECT u_nick FROM u_acc WHERE u_id = $id");

    if (mysql_num_rows($query) > 0)
    {
        $result = mysql_fetch_assoc($query);

        echo "<div class='padd'>";
        echo "<div class='edpl'>";
        echo "<form method='post'>";
        echo "<input type='text' hidden value='$id' name='id'>";
        echo "<p><input name='nickname' type='text' value='{$result['u_nick']}' required></p>";
        echo "<p><select name='class'>";
        MVdb::select('class','class','class_id');
        echo "</select></p>";
        echo "<p><select name='role'>";
        MVdb::select('role','role','role_id');
        echo "</select></p>";
        echo "<p><input type='text' name='passw' placeholder='password'></p>";
        echo "<input type='submit' value='Save' formaction='/admin/scripts/edpl.php'>";
        echo "<input type='submit' value='Delete' formaction='/admin/scripts/delpl.php'>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
    else header("Location: $location/admin/edpl/");
}