<?php

require_once "Item.php";

class Smartphone implements Item {

    public function getName(): string
    {
        return "Smartphone";
    }

}