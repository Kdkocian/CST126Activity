<?php
require_once 'superHero.php';
class Superman extends superHero
{
    function __construct(){
        parent::__construct("Superman", $health);
    }
}

