<?php

class Bike
{
	public $price, $max_speed, $miles;

	public function __construct($p,$m)
	{
		$this->price = $p;
		$this->max_speed = $m;
		$this->miles = 0;
	}
	public function displayinfo()
	{
		echo $this->price."<br>";
		echo $this->max_speed."<br>";
		echo $this->miles."<br>";
		//return $this;
	}
	public function drive()
	{
		echo "Driving...<br>";
		$this->miles += 10;
		return $this;
	}
	public function reverse()
	{
		echo "Reversing...<br>";
		$this->miles -= 5;
		if($this->miles < 0)
		{
			$this->miles = 0;
		}
		return $this;
	}
}
$bike1 = new Bike(200,"25mph");
$bike2 = new Bike(100,"20mph");
$bike3 = new Bike(250,"40mph");

$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayinfo();
echo "<br>";

$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayinfo();
echo "<br>";

$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayinfo();
 ?>