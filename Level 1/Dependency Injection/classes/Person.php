<?php

require_once "Pockets.php";

class Person {

public string $name;
public string $workOrStudy;
private Pockets $pockets;

public function __construct(string $name, string $workOrStudy, Pockets $pockets)
{
    $this->name = $name;
    $this->workOrStudy = $workOrStudy;
    $this->pockets =$pockets;
}

public function getInfo(): void{

echo "{$this->name} goes to {$this->workOrStudy} and they carry:  ";
echo $this->pockets->listItems() . PHP_EOL;
}


}