<?php
require("include/simple_html_dom.php");



$html = file_get_html("https://www.trueachievements.com/gamer/" . preg_replace('/\s+/', '+', $gamertag));
require("include/functions.php");

$TAS = new TAS();
$TAS->userinformation($html);
$TAS->recent_achievements($html);

?>
