<?php

class Sorcier extends Personnage
{
    public function __construct()
    {
        parent::__construct();
        $this->y = 125;
        $this->x = 125;
    }

}