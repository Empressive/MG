<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Head</title>
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/list.css" rel="stylesheet">
    <link href="/css/rec.css" rel="stylesheet">
    <link href="/js/slick-1.5.9/slick/slick.css" rel="stylesheet">
    <link href="/js/slick-1.5.9/slick/slick-theme.css" rel="stylesheet">
    <link rel="shortcut icon" href="/pic/logo/">
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
<header>
    <?php include('config.php');?>
    <?php echo "<span onclick=\"location.href='{$location}'\">ENRAGE</span>"; ?>
    <ul>
        <li><a href="/prog/">Progress</a></li>
        <li><a href="/list/">Our players</a></li>
        <li><a href="/rec/">Recruiting</a></li>
        <li><a href="/str/">Streams</a></li>
    </ul>
</header>
<div class="page">
