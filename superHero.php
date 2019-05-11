<?php

class superHero
{
    Private $name;
    Private $health;
    Private $isDead;
    
    function __construct($name, $health){
        $this->name = $name;
        $this->health = $health;
        $this->isDead = false;
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
        if($this->health < 0){
           return true;
        }else{
           return false;
        }
    }
}

