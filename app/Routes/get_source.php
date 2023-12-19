<?php
$source = isset($_GET["source"]) ? $_GET["source"] : '';
$source = htmlspecialchars($source, ENT_QUOTES, 'UTF-8');
//zmienne dla route i dla title
$client = "Client";
$home = "Home";
// $test = "test";
