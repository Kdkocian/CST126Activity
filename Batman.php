<?php
require_once 'superHero.php';
class Batman extends superHero
{
    
    function __construct(){
        $health = rand(1,1000);
        parent::__construct("BatMan", $health);
    }
    
}

