<?php

require_once "classes/Person.php";
require_once "classes/Pockets.php";
require_once "classes/Item.php";
require_once "classes/BikeKeys.php";
require_once "classes/CarKeys.php";
require_once "classes/HouseKeys.php";
require_once "classes/Smartphone.php";
require_once "classes/TransportCard.php";
require_once "classes/Wallet.php";

$carryAlways = [new Wallet(), new HouseKeys(), new Smartphone()];

//MARK 
$markItems = $carryAlways;
$markItems[] = new CarKeys();
$markItems[] = new TransportCard();

$markPockets = new Pockets($markItems);
$mark = new Person("Mark", "Work", $markPockets);
$mark->getInfo() . PHP_EOL;


//ANYA
$anyaItems = $carryAlways;
$anyaItems[] = new BikeKeys();

$anyaPockets = new Pockets($anyaItems);
$anya = new Person("Anya", "Study", $anyaPockets);
$anya->getInfo();

