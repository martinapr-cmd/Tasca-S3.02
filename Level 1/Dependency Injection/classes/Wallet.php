<?php

require_once "Item.php";

class Wallet implements Item {

    public function getName(): string
    {
        return "Wallet";
    }

}