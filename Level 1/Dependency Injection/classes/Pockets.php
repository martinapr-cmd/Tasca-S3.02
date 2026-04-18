<?php

class Pockets {

private array $items;

public function __construct(array $items) { 
    $this->items = $items;
}

public function listItems(): string {

    $names =  [];

    foreach ($this->items as $item) {
        $names[] = $item->getName();
    }
    return implode(", ", $names);
}       

}