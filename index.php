<?php
require("image.php");
$x             = 0;
$counter_name  = "visitcount";
$counter_value = 1;
$expire        = strtotime("+30 days");
$path          = "/";

if (isset($_COOKIE['visitcount'])) {
    $counter_value = $_COOKIE['visitcount'];
    $counter_value++;
}
setcookie($counter_name, $counter_value, $expire, $path);
?>