<?php
require "Autombile.php";

$licenseplate = _POST["licensePlate"];
$brand = _POST["brand"];
$model = _POST["model"];
$modelYear = _POST["modelYear"];
$color = _POST["color"];

$automobile = new Automobile($licenseplate, $brand, $model, $modelYear, $color);

$automobile._toString();

