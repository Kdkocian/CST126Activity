<?php
require_once 'superHero.php';
class Superman extends superHero
{
    function __construct(){
        $health = rand(1,1000);
        parent::__construct("Superman", $health);
    }
}

