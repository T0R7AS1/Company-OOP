<?php

class SoftwareCompany extends Company{

    private $programingLanguages;

    public function __construct()
    {
        Company::__construct();
        $array = ["PHP", "Pascal", "Go", "C++", "JAVA", "Phyton"];
        shuffle($array);
        $this->programingLanguages = [$array[0], $array[1], $array[2]];
    }
    public function getProgramingLanguages(){
        return $this->programingLanguages;
    }
    
    public function setProgramingLanguages($language){
        return $this->programingLanguages = $language;
    }
}

?>