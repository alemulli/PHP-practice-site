<?php

require "functions.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/") {
    require "./controllers/index.php";
} else if ($uri === "/hiro") {
    require "./controllers/hiro.php";
} else if ($uri === "/bender") {
    require "./controllers/bender.php";
}
