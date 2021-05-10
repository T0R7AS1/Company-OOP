<?php

class Company {
    private $name;
    private $employees;
    private $turnover;

    public function __construct()
    {
        $this->name = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 12)), 0, rand(5,12));
        $this->name = ucfirst(strtolower($this->name));
        $this->employees = rand(3,100);
        $this->turnover = rand(10000, 10000000);
    }
    public function getCompanyName(){
        return $this->name;
    }
    public function getCompanyEmployees(){
        return $this->employees;
    }
    public function getCompanyTurnover(){
        return $this->turnover;
    }
    public function setCompanyName($name){
        return $this->name = $name;
    }
    public function setCompanyEmployees($employees){
        return $this->employees = $employees;
    }
    public function setCompanyTurnover($turnover){
        return $this->turnover = $turnover;
    }
}

?>