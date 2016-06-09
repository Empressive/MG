<?php

class ACore
{
    public $page = '';
    public $access = '';

    public static function getInstance()
    {
        $core = new ACore();
        $core->getConf();
        $core->Auth();
        $core->LReq();
        $core->ICont();
    }

    public function getConf()
    {
        require("../config.php");
    }

    public function Auth()
    {
        include_once('../library/MVdb.php');
        MVdb::connectDb();

        $this->access = 0;

        if(isset($_SESSION['u_id']))
        {
            $u_id = intval($_SESSION['u_id']);

            $query = mysql_query("SELECT u_access FROM u_acc WHERE u_id = '$u_id'");
            $result = mysql_fetch_assoc($query);

            $this->access = $result['u_access'];
        }
        elseif(isset($_COOKIE['u_id']) && isset($_COOKIE['token']))
        {
            $u_id = intval($_COOKIE['u_id']);
            $token = htmlspecialchars(trim($_COOKIE['token']));

            $query = mysql_query("SELECT u_access FROM u_acc WHERE u_id = '$u_id' and u_token = '$token'");
            $result = mysql_fetch_assoc($query);

            $this->access = $result['u_access'];
        }
    }
    public function LReq()
    {
        if($this->access > 1)
        {
            if(isset($_GET['page']))
            {
                $request = htmlspecialchars(trim($_GET['page']));

                $page = "pages/$request.php";
                $error = "pages/404.php";

                if(file_exists($page)) $this->page = $page;
                else $this->page = $error;
            }
        }
        else $this->page = 'pages/plog.php';
    }

    public function ICont()
    {
        if($this->access > 1)
        {
            include_once('include/header.php');

            include_once("$this->page");

            include_once('include/footer.php');
        }
        else include_once("$this->page");
    }
}