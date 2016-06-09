<?php

class MVdb
{
    public static function connectDb()
    {
        mysql_connect("", "", "") or die (mysql_error());
        mysql_query('SET NAMES utf8');
        mysql_select_db("mv_db") or die(mysql_error());
    }

    public static function select($table, $item, $value)
    {
        $query = mysql_query("SELECT $item, $value FROM $table");
        
        while($result = mysql_fetch_assoc($query))
        {
            echo "<option value='{$result[$value]}'>{$result[$item]}</option>";
        }
    }
    public static function players($role_id)
    {
        $query = mysql_query("SELECT color, u_nick FROM u_acc INNER JOIN class USING(class_id) WHERE role_id = $role_id");
        
        while ($result = mysql_fetch_assoc($query))
        {
            echo "<li style='background-color: {$result['color']}'><a>{$result['u_nick']}</a></li>";
        }
    }

    public static function news()
    {
        $query = mysql_query("SELECT news_id, n_date, n_subject, n_text FROM news ORDER BY news_id DESC");

        while ($result = mysql_fetch_assoc($query))
        {
            mb_internal_encoding("UTF-8");
            $text = mb_substr($result['n_text'],0,150);
            echo "<tr onclick=\"location.href='/admin/ednews/{$result['news_id']}/'\"><td>{$result['n_date']}</td><td>{$result['n_subject']}</td><td>$text...</td></tr>";
        }
    }

    public static function users()
    {
        $query = mysql_query("SELECT u_log, u_nick, class, role, u_id FROM u_acc INNER JOIN class USING(class_id) INNER JOIN role USING(role_id)");
        
        while ($result = mysql_fetch_assoc($query))
        {
            echo "<tr onclick=\"location.href='/admin/edpl/{$result['u_id']}/'\"><td>{$result['u_log']}</td><td>{$result['u_nick']}</td><td>{$result['class']}</td><td>{$result['role']}</td></tr>";
        }
    }

    public static function stream()
    {
        $query = mysql_query("SELECT s_name, s_link FROM stream");

        while ($result = mysql_fetch_assoc($query))
        {
            echo "<div class='blstr' onclick=\"location.href='{$result['s_link']}'\"><span>{$result['s_name']}</span></div>";
        }
    }
}
