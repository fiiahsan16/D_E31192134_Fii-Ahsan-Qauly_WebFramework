<?php 

include("Praktikum2_Minggu5.php");
include("Praktikum2_Minggu5_Implements1.php");

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    // calcArea calculates the area of rectangles
    public function calcArea()
    {
        return $this -> width * $this -> height;
    }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo '<br>';
echo $rect -> calcArea();