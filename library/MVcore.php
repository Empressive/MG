<?php

class MVcore
{
    public $page = "";

    public static function getInstance()
    {
        $core = new MVcore();
        $core->getConf();
        $core->LReq();
        $core->ICont();
    }

    public function getConf()
    {
        require("config.php");
    }

    public function LReq()
    {
        if(isset($_GET['page'])) {
            $request = htmlspecialchars(trim($_GET['page']));

            $page = "pages/$request.php";
            $error = "pages/404.php";

            if(file_exists($page)) $this->page = $page;
            else $this->page = $error;
        }
        else $this->page = 'pages/prog.php';
    }

    public function ICont()
    {
        include_once('include/header.php');

        include_once("$this->page");

        include_once ('include/footer.php');
    }
}