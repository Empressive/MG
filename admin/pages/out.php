<?php
include('../config.php');
session_destroy();
setcookie("u_id", '', time() + 1, "/");
setcookie("token", '', time() + 1, "/");
header("Location: $location");
