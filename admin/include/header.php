<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Head</title>

    <link href="/css/list.css" rel="stylesheet">
    <link href="/css/rec.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/padd.css" rel="stylesheet">
    <link rel="shortcut icon" href="/pic/logo/E.png">
    <link href="/js/slick-1.5.9/slick/slick.css" rel="stylesheet">
    <link href="/js/slick-1.5.9/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.structure.css">
    <link rel="stylesheet" href="/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.theme.css">
    <link rel="stylesheet" href="/css/jquery-ui.theme.min.css">
    <script src="/js/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="/js/jquery-ui.js" type="text/javascript"></script>
    <script src="/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/js/slick-1.5.9/slick/slick.min.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
</head>
<body>
        <div id="bar">
            <?php include('../config.php');?>
            <?php echo "<span onclick=\"location.href='{$location}'\">ENRAGE</span>"; ?>
        <ul class="menu">
            <li><a href="/admin/padd/">Add Data</a></li>
            <li><a href="/admin/pedit/">Edit Data</a></li>
            <li><a href="/" target="_blank">Web site</a></li>
            <li><a href="/admin/out/">Log Out</a></li>
        </ul>
        </div>
        <div class="err" style="display: none">
        </div>
<div class="page">
    <?php echo $_GET['error'] ?>
