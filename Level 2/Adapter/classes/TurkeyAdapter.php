<?php

require_once 'Turkey.php';

class TurkeyAdapter {

public function __construct(private Turkey $turkey)
{
       $this->turkey = $turkey;
}

public function quack() {
       $this->turkey->gobble();
}

public function fly() {
       for ($i=0; $i<5; $i++) {
              $this->turkey->fly();
       }
}

}