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
    public function fight($defender){
        $attack  = rand(1,$this->strength) - rand(1,$defender->dexterity);
        if ($attack>0 && $this->life>=0){
        $defender->life -= $attack; 
    }
    }
    public function __get($property){
        if(property_exists($this,$property)){
        return $this->property;
    }
    }
    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->property = $value ;
        }
    }

}