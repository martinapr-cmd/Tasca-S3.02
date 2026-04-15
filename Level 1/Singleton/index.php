<?php

require_once "Tigger.php";

$tg = Tigger::getInstance();
$tg2 = Tigger::getInstance();
$tg3 = Tigger::getInstance();
$tg->roar();
$tg2->roar();
$tg3->roar();

$tg->getCounter();
