<?php

class superHero
{
    Private $name;
    Private $health;
    Private $isDead;
    
    function __construct($name, $health, $isDead){
        $this->name = $name;
        $this->health = $health;
        $this->isDead = $isDead;
    }
    function attack(){
       $attack = rand(1,10);
       return $attack;
    }
    function determinHealth($getattack){
        $this->health -= $getattack;
        return $this->health;
    }
    function isDead(){
        if($newHealth < 0){
           return true;
           else
           return false;
        }
    }
}

