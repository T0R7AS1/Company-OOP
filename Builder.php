<?php

class Builder extends ConstructionCompany{

    private $skills;
    private $name;
    
    public function __construct(){
        ConstructionCompany::__construct();
        $this->name = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 12)), 0, rand(5,12));
        $this->name = ucfirst(strtolower($this->name));
        $array = ["electrician", "plumber", "tractor driver", "engineer"];
        shuffle($array);
        $this->skills = [$array[0]];
    }
    public function printInfo(){
        echo "Company name: ". $this->getCompanyName() . "<br>";
        echo "Numbers of employees in the companie: ". $this->getCompanyEmployees(). "<br>";
        echo "Companies turn over: ". $this->getCompanyTurnover(). "<br>";
        echo "Building objects that companie works with: ";
        if ($this->getBuildingObjects() == 0) {
            echo 0;
        }else{
            foreach ($this->getBuildingObjects() as $key => $value) {
                if ($key == 0) {
                    echo "$value";
                }else{
                    echo ", $value";
                }
            }
        }
        echo "<br>";
        echo "Employee works at the companie as a: ";
        if ($this->skills == 0) {
            echo 0;
        }else{
            foreach ($this->skills as $key => $value) {
                if ($key == 0) {
                    echo "$value";
                }else{
                    echo ", $value";
                }
            }
        }
        echo "<br>";
        echo "Employee's name: ". $this->name. "<br>";
    }

    public function addSkill($skill){
        if ($this->skills == 0) {
            echo "Company ". $this->getCompanyName()." is bankrupt. <br>";
        }else{
            $array = [$skill];
            $this->skills = array_merge($this->skills, $array);
        }
    }

    public function bankrupt(){
        $this->setCompanyTurnover(0);
        $this->setBuildingObjects(0);
        $this->skills = 0;
        $this->name = 0;
        echo  $this->getCompanyName() ." is bankrupt. ".$this->getCompanyEmployees()." employees are now unemployed. <br>";
        
    }
}

?>