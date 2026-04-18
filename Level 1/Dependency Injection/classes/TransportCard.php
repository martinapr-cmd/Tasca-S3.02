<?php

require_once "Item.php";

class TransportCard implements Item {

    public function getName(): string
    {
        return "Transport Card";
    }

}