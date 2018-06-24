<?php
require(dirname(__FILE__) . "/domloader.php");


$html = file_get_html("https://www.trueachievements.com/gamer/" . preg_replace('/\s+/', '+', gamertag));
require(dirname(__FILE__) . "/functions.php");

$TAS = new TAS();
$TAS->userinformation($html);
$TAS->recent_achievements($html);

?>
