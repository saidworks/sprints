<?php

/* Fighter class definition */
class Fighter{
    CONST MAX_LIFE = 100; 
    public $name;
    public $strength;
    public $dexterity;
    public $life;
    public function __construct($name,$strength,$dexterity,$life=Fighter::MAX_LIFE){
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = $life;
    }
    public function fight($fighter){
        $attack  = rand(1,$this->strength) - rand(1,$this->dexterity);
        if ($attack>0 && $fighter->life>=0){
        $fighter->life -= $attack; 
    }
    }
}