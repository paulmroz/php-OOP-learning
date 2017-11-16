 <?php

class Math {

	public static function add(...$nums) {

		return array_sum($nums);

	}
}


//var_dump(Math::add(1, 2, 3));


/*class Person {

	public static $age = 1;


	public function haveBirthday(){

		static::$age++;

	}

}*/

class Person {

	public  $age = 1;


	public function haveBirthday(){

		$this->age++;

	}

	public function age(){

		return $this->age;
	}

}

$joe = new Person;

$joe->haveBirthday();
$joe->haveBirthday();

echo $joe->age();

$jane = new Person;

$jane->haveBirthday();

echo $jane->age();
