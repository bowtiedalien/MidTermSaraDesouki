<?php 
class Automobile {
    private $LicencePlate;
    private $Brand;
    private $Model;
    private $ModelYear;
    private $Color;

    function __construct($licensePlate, $brand, $model, $modelYear, $color){
        $this->LicensePlate = $licensePlate;
        $this->Brand = $brand;
        $this->Model = $model;
        $this->ModelYear = $modelYear;
        $this->Color = $color;
    }

    function _toString(){
        echo "License Plate: ".$LicencePlate;
        echo "Brand: ".$Brand;
        echo "Model: ".$Model;
        echo "Model Year: ".$ModelYear;
        echo "Color: ".$Color;
    }

}
?>