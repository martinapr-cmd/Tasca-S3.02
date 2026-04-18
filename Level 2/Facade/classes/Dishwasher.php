<?php

require_once "Clean.php";
require_once "Rinse.php";
require_once "Dry.php";

class Dishwasher {

private Clean $clean;
private Rinse $rinse;
private Dry $dry;

public function __construct()
{
    $this->clean = new clean();
    $this->rinse = new rinse();
    $this->dry = new dry();
}

public function start(): void {
    echo "starting dishwasher..." . PHP_EOL;
    $this->clean->clean();
    $this->rinse->rinse();
    $this->dry->dry();
    echo "dishwasher finished!" . PHP_EOL;
}

}