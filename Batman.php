<?php
require_once 'superHero.php';
class Batman extends superHero
{
    
    function __construct(){
        parent::__construct("BatMan", $health);
    }
    
}

