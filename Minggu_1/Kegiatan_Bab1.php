<?php 
class car {

	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	public function hello()
	{
		return "beep";
	}
}

$bmw = new car ();
$mercedes = new car ();

echo $bmw -> color;
echo "<br/ >";
echo $mercedes -> color;
echo "<hr/ >";

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

echo $bmw -> color;
echo "<br/ >";
echo $mercedes -> color;
echo "<br/ >";
echo $bmw -> comp;
echo "<br/ >";
echo $mercedes -> comp;
echo "<hr/ >";

echo $bmw -> hello();
echo "<br/ >";
echo $mercedes -> hello(); 
?>