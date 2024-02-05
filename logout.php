<?php
require_once "App/config/config.php";
require_once "App/classe/User.php";

$user = new User();
$user ->logout();

header('Location: index.php');
exit();

?>
