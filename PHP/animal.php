<?php 

class animal
{
	public $name;
	public $health;

	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 100;
	}
	public function walk()
	{
		$this->health -= 1;
		return $this;
	}
	public function run()
	{
		$this->health -= 5;
		return $this;
	}
	public function displayHealth()
	{
		echo "<br/>Name: " .$this->name;
		echo "<br/>Health: " .$this->health;
	}
}

$animal = new animal("animal");
$animal->walk()->walk()->walk()->run()->run();
echo $animal->displayHealth();
echo "<br>";

class dog extends animal
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 150;
	}

	public function pet()
	{
		$this->health += 5;
	}
}

$dog = new dog("dog");
$dog->walk()->walk()->walk()->run()->run()->pet();
echo $dog->displayHealth();
echo "<br>";

class dragon extends animal
{
	public function __construct($name)
	{
		$this->health = 170;
		$this->name = $name;
		echo "<br>this is a dragon!";
	}
	public function fly()
	{
		$this->health -= 10;
		return $this;
	}
}

$dragon = new dragon("dragon");
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly();
echo $dragon->displayHealth();
echo "<br>";

$animal->pet();
$animal->fly();
?>