<?php 

class car
{
	public $price, $speed, $fuel, $mileage, $tax;

	public function __construct($p,$s,$f,$m)
	{
		$this->price = $p;
		$this->speed = $s;
		$this->fuel = $f;
		$this->mileage = $m;
		if($this->price > 10000)
		{
			$this->tax = 0.15;
		}
		else
		{
			$this->tax = 0.12;
		}
	}
	public function Display_all()
	{
		echo "Price: ".$this->price."<br>";
		echo "Speed: ".$this->speed."<br>";
		echo "Fuel: ".$this->fuel."<br>";
		echo "Mileage: ".$this->mileage."<br>";
		echo "Tax: ".$this->tax."<br>";
	}
}

$car1 = new car(2000,"35mph","Full","15mpg");
$car2 = new car(2000,"5mph","Not Full","105mpg");
$car3 = new car(2000,"15mph","Kind of Full","95mpg");
$car4 = new car(2000,"45mph","Empty","25mpg");
$car5 = new car(20000000,"35mph","Empty","15mpg");

echo $car1->Display_all()."<br>";
echo $car2->Display_all()."<br>";
echo $car3->Display_all()."<br>";
echo $car4->Display_all()."<br>";
echo $car5->Display_all()."<br>";

 ?>