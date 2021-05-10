<?php

class ConstructionCompany extends Company{
    
    private $buildingObjects;
    public function __construct()
    {
        Company::__construct();
        $array = ["Houses", "Bridges", "Offices", "Roads", "Gardens", "Railroads", "Canals", "Aqueduct", "Stadions"];
        shuffle($array);
        $this->buildingObjects = [$array[0], $array[1], $array[2], $array[3]];
    }
    public function getBuildingObjects(){
        return $this->buildingObjects;
    }
    public function setBuildingObjects($buildingObjects){
        return $this->buildingObjects = $buildingObjects;
    }
}

?>