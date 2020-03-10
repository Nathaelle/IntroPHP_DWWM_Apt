<?php

var_dump($_GET);

//$page = $_GET["page"]; // Peut contenir news - meteo - horo
$page = (isset($_GET["page"]))? $_GET["page"] : "news";

require "template.php";