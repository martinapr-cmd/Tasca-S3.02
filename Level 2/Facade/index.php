<?php

require_once "classes/Clean.php";
require_once "classes/Rinse.php";
require_once "classes/Dry.php";
require_once "classes/Dishwasher.php";

$dishwasher = new Dishwasher();
$dishwasher->start();
